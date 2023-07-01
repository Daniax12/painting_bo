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

	public function __construct() {
        parent::__construct();
        $this->load->model('admin/Dashboard');
    }

	// Main
	public function index()
	{
		$this->load->model('admin/Compte');
		$data['users'] = $this -> Dashboard -> count_user();
		$data['sales'] = $this -> Dashboard -> count_selling();
		$data['artiste_sales'] = $this -> Dashboard -> summary_sales();

		$data['charges'] = $this -> Compte -> get_total_charge();
		$data['produits'] = $this -> Compte -> get_total_product();
		$data['benefice'] = $this -> Compte -> benefice_net();

        $data['content'] = 'back_office/home';
		$data['dash_active'] = 'active';
		$this->load->view('back_office/main', $data);
	}		

	
}
