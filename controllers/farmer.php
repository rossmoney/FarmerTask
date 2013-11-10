<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Farmer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('farmer_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$data['farmers_livestock'] = $this->farmer_model->get_farmer_and_livestock();
		$data['title'] = 'Farmers available';
		$data['controller'] = $this->router->class;
		$data['validation_errors'] = $this->session->flashdata('validation_errors');
		$data['alert_success'] = $this->session->flashdata('alert_success');
		$data['alert_danger'] = $this->session->flashdata('alert_danger');

		$this->load->view('templates/header', $data);
		$this->load->view('farmer/index', $data);
		$this->load->view('templates/footer');
	}

	public function validate()
	{
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //** Set rules */
        $this->form_validation->set_rules('name','Farmer Name','required|max_length[50]');
        $this->form_validation->set_rules('county','County','required|max_length[20]');

        if($this->input->is_ajax_request())
        {
	        if ($this->form_validation->run() == FALSE)
			{
				echo validation_errors();
			}
			else
			{
				echo '1';
			}
		} else {
			$this->load->library('session');
			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('validation_errors', validation_errors());
			}
		}
	}

	public function add()
	{
		$this->farmer_model->set_farmer($_POST['name'], $_POST['county']);
		$this->session->set_flashdata('alert_success', 'Farmer added!');
	}

	public function delete()
	{
		$this->farmer_model->delete_farmer($_POST['id']);
		$this->session->set_flashdata('alert_success', 'Farmer deleted sucessfully!');
	}
}
?>