<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Farmer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('farmer_model');
	}

	public function index()
	{
		$data['farmers_livestock'] = $this->farmer_model->get_farmer_and_livestock();
		$data['title'] = 'Farmers available';

		$this->load->view('templates/header', $data);
		$this->load->view('farmer/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['farmer'] = $this->farmer_model->get_farmer($id);
	}
}
?>