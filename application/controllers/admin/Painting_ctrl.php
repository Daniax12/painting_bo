<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painting_ctrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Painting');
    }

    // Liste des tableaux
    public function painting_list(){
        $data['content'] = 'back_office/painting/liste_painting';
        $data['paintings'] = $this->Painting->get_all_paintings();
        $fail = $this->input->get('fail');
		if(isset($fail)){
			$data['fail'] = 'Un tableau vendu ne peut etre supprime de la base';
		}

        $this->load->view('back_office/main', $data);
    }

    // AJOUT PAINTING PAGE
    public function painting_ajout_page(){
        $this->load->model('admin/Artiste');
        $data['artistes'] = $this -> Artiste -> get_all_artiste_with_age();
        $data['content'] = 'back_office/painting/ajout_painting';
		$this->load->view('back_office/main', $data);
    }

    // AJOUTER UN TABLEAU
    public function adding_painting(){
        $paintingname = $this->input->post('paintingname');
        $idartist = $this->input->post('idartist');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $entrancedate = $this->input->post('entrancedate');

        // Traiting image
		$img = $_FILES['painting_photo'];
		$imgName = $img['name'];
		$config['upload_path']   = "./assets/images/tableau/";
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 100000000; 
        $config['max_width']     = 1024000000; 
        $config['max_height']    = 2000;  
        $this->load->library('upload', $config);

		$this->upload->do_upload('painting_photo');
		$data = array('upload_data' => $this->upload->data());
		$this -> Painting -> add_painting($paintingname, $idartist, $imgName, $entrancedate, $description, $price);
		redirect(base_url().'admin/Painting_ctrl/painting_list');
    }

    // Modify painting
    public function modifing_painting(){
        $idpainting = $this->input->post('idpainting');
        $paintingname = $this->input->post('paintingname');
        $description = $this->input->post('description');
        $price = $this->input->post('price');

        $this -> Painting -> modify_painting($idpainting, $paintingname, $description, $price);
        redirect(base_url().'admin/Painting_ctrl/painting_list');
    }

    // Deleting painting
    public function deleting_painting(){
        $idpainting = $this->input->post('idpainting');
        $result = $this -> Painting -> delete_painting($idpainting);
        if($result == 1){	// Already sold
			redirect(base_url().'admin/Painting_ctrl/painting_list?fail=0');
		} else {
			redirect(base_url().'admin/Painting_ctrl/painting_list');
		}
    }
	
}