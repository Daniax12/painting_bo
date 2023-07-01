<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_ctrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Journal');
    }

    // Submiting journal
    public function submiting_journal($id_code_journal, $id_journal){
        $result = $this -> Journal -> submit_journal($id_journal);
        if($result == 1){
            redirect(base_url().'admin/Journal_ctrl/pre_journal_page/'.$id_code_journal.'/'.$id_journal.'?fail=0');
        } else {
            redirect(base_url().'admin/Journal_ctrl/code_ecriture/'.$id_code_journal);
        }
    }

    // Ajout ecriture fille
    public function adding_ecriture_fille(){
        $id_journal = $this->input->post('id_journal');
        $id_code_journal = $this->input->post('code_journal');

        $id_compte_general = $this->input->post('compte_general_id');
        $credit_debit = $this->input->post('credit_debit');

        $montant = $this->input->post('montant');

        $debit = 0;
        $credit = 0;

        if($credit_debit == 0) $credit = $montant;
        else $debit = $montant;

        $this -> Journal -> add_child_journal($id_journal, $id_compte_general, $debit, $credit);
        redirect(base_url().'admin/Journal_ctrl/pre_journal_page/'.$id_code_journal.'/'.$id_journal);
    }

    // Pre_journal page
    public function pre_journal_page($id_code_journal, $id_journal){
        $data['comptes'] = $this -> Journal -> get_compte_generaux();
        $data['code_journal'] = $this -> Journal -> get_code_journal_id($id_code_journal);
        $data['journal'] =  $this -> Journal -> get_journal_by_id_journal($id_journal);
        $data['ecritures_fille'] = $this -> Journal -> get_journal_content($id_journal);
        $data['content'] = 'back_office/comptabilite/pre_journal';
        $fail = $this->input->get('fail');
        if(isset($fail)){
            $data['fail'] = '1';
        }

        $this->load->view('back_office/main', $data);
    }


    // Nouvelle journal
    public function creating_journal(){
        $id_code_journal = $this->input->post('code_journal');
        $date = $this->input->post('date_journal');
        $piece = $this->input->post('piece_journal');
        $libelle = $this->input->post('libelle');

        $id_journal = $this -> Journal -> create_journal($date, $piece, $libelle,  $id_code_journal);
        redirect(base_url().'admin/Journal_ctrl/pre_journal_page/'.$id_code_journal.'/'.$id_journal);
    }

    // Ecritures d'un code journal
    public function code_ecriture($id_code_journal){
        $this -> Journal -> clean_invalid_journal();
        $data['code_journal'] = $this -> Journal -> get_code_journal_id($id_code_journal);
        $data['content'] = 'back_office/comptabilite/journal';
        $data['ecritures'] = $this -> Journal -> journal_liste($id_code_journal);

        $this->load->view('back_office/main', $data);
    }

}