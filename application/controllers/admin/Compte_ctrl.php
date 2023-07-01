<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte_ctrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Compte');
    }

    public function balance_page(){
        $data['ecritures'] = $this -> Compte -> get_balance_comptes();
        $data['total_balance'] = $this -> Compte -> total_balance();

        $data['content'] = 'back_office/comptabilite/balance';
        $this->load->view('back_office/main', $data);
    }

    // Grand livre d'un compte
    public function grand_livre_page(){
        $data['content'] = 'back_office/comptabilite/grand_livre';
        $comptes = $this -> Compte -> get_all_comptes();
        $data['comptes'] = $comptes;
        $id_compte_general = $this->input->get('id_compte_general');

        if($id_compte_general == null && count($comptes) > 0){
            $id_compte_general = $comptes[0] -> id_compte_general ;
        }
        $data['main_compte'] = $this -> Compte -> get_compte_general_by_id($id_compte_general);
        $data['ecritures'] = $this -> Compte -> get_grand_livre($id_compte_general);
        $data['balance'] = $this -> Compte -> get_balance_compte_general($id_compte_general);

        $this->load->view('back_office/main', $data);
    }
}
