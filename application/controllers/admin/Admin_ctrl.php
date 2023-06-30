<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// Main
	public function index()
	{
        $data['content'] = 'back_office/home';
		$data['dash_active'] = 'active';
		$this->load->view('back_office/main', $data);
	}		

	// LISTE DES ARTISTES_PAGE
    public function artiste_liste(){
        $data['content'] = 'back_office/artiste/liste_artiste';
		$this->load->view('back_office/main', $data);
    }

	// AJOUT ARTISTE_PAGE
    public function artiste_ajout(){
        $data['content'] = 'back_office/artiste/ajout_artiste';
		$this->load->view('back_office/main', $data);
    }

	// LISTES DES TABLEAUX_PAGE
    public function painting_liste(){
        $data['content'] = 'back_office/painting/liste_painting';
		$this->load->view('back_office/main', $data);
    }

	// AJOUT TABLEAUX_PAGE
    public function painting_ajout(){
        $data['content'] = 'back_office/painting/ajout_painting';
		$this->load->view('back_office/main', $data);
    }

	// JOURNAL D'UN CODE_JOURNAL_PAGE -> ARGUMENT AZA ADINO
	public function journal_liste(){
		$data['content'] = 'back_office/comptabilite/journal';
		$this->load->view('back_office/main', $data);
	}

	// PRE_JOURNAL_D'UNE ECRITURE JOURNAL -> ARGUMENT
	public function journal_pre(){
		$data['content'] = 'back_office/comptabilite/pre_journal';
		$this->load->view('back_office/main', $data);
	}

	// GRAND_LIVRE_COMPTE_PAGE -> ARGUMENT COMPTE ET DEFAULT
	public function grand_livre_compte(){
		$data['content'] = 'back_office/comptabilite/grand_livre';
		$this->load->view('back_office/main', $data);
	}

	// BALANCE
	public function balance_general(){
		$data['content'] = 'back_office/comptabilite/balance';
		$this->load->view('back_office/main', $data);
	}
}
