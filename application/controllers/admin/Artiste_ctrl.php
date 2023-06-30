<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artiste_ctrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Artiste');
    }

	// Liste des artistes
	public function artiste_liste()
	{
		$data['content'] = 'back_office/artiste/liste_artiste';
        $data['artistes'] = $this->Artiste->get_all_artiste_with_age();

		$this->load->view('back_office/main', $data);	
	}		

	// Modification d'une artiste
	public function modifing_artiste(){
		$id = $this->input->post('idartist');
		$nom = $this->input->post('name_artiste');
		$biograhie = $this->input->post('biographie');
		$dtn = $this->input->post('dtn');
		$email = $this->input->post('email');
		$adress = $this->input->post('adresse');

		$this -> Artiste -> modify_artiste($id, $nom, $dtn, $biographie, $email, $adress);
		redirect(base_url().'admin/Artiste_ctrl/artiste_liste');
	}

    // public function inserting_tiers(){
    //     $compte_general = $this->input->post('compte_general');
	// 	$nom = $this->input->post('entreprise'); 
	// 	$debut_num = $this->input->post('debut_numero'); 
	// 	$numero = $this->input->post('numero_compte');
	// 	$main_num = $debut_num . $numero;
	// 	$intitule = $this->input->post('intitule'); 
	// 	$adresse = $this->input->post('adresse'); 
	// 	$email = $this->input->post('email'); 
	// 	$responsable = $this->input->post('responsable'); 

	// 	$this -> Tiers -> insert_tiers($compte_general, $nom, $main_num, $intitule, $adresse, $email, $responsable);
	// 	redirect("index.php/Tiers_ctrl");
    // }
}
