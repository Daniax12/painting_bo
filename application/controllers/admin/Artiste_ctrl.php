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
		$fail = $this->input->get('fail');
		if(isset($fail)){
			$data['fail'] = 'Artiste a encore des tableaux dans la base de donnee';
		}
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

	// AJOUT ARTISTE_PAGE
	public function artiste_ajout(){
		$data['content'] = 'back_office/artiste/ajout_artiste';
		$this->load->view('back_office/main', $data);
	}

	// Ajout d'un nouveau artiste
	public function adding_artiste(){
		$nom = $this->input->post('name_artiste');
		$biographie = $this->input->post('biographie');
		$dtn = $this->input->post('dtn');
		$email = $this->input->post('email');
		$adress = $this->input->post('adresse');

		// Traiting image
		$img = $_FILES['artiste_img'];
		$imgName = $img['name'];
		$config['upload_path']   = "./assets/images/artiste/";
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 100000000; 
        $config['max_width']     = 1024000000; 
        $config['max_height']    = 2000;  
        $this->load->library('upload', $config);

		$this->upload->do_upload('artiste_img');
		$data = array('upload_data' => $this->upload->data());
		$this -> Artiste -> add_artiste($nom, $dtn, $biographie, $imgName, $email, $adress);
		redirect(base_url().'admin/Artiste_ctrl/artiste_liste');
	}

	// Supprimer artiste
	public function deleting_artiste(){
		$id_artiste = $nom = $this->input->post('id_artiste');
		$result = $this -> Artiste -> delete_artiste($id_artiste);
		if($result == 1){	// Already have some paintings
			redirect(base_url().'admin/Artiste_ctrl/artiste_liste?fail=0');
		} else {
			redirect(base_url().'admin/Artiste_ctrl/artiste_liste');
		}
	}
}