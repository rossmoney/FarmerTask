<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Livestock extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('livestock_model');
	}

	public function index()
	{
		$data['livestock'] = $this->livestock_model->get_livestock_with_farmer();
		$data['title'] = 'Livestock available';

		$this->load->view('templates/header', $data);
		$this->load->view('livestock/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['livestock'] = $this->livestock_model->get_livestock($id);
	}
}
?>