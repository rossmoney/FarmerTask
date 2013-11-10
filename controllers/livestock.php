<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Livestock extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('livestock_model');
		$this->load->model('farmer_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}

	public function index()
	{
		$data['livestock'] = $this->livestock_model->get_livestock_with_farmer();
		$data['farmers'] = $this->farmer_model->get_farmer();
		$data['title'] = 'Livestock available';
		$data['controller'] = $this->router->class;
		$data['validation_errors'] = $this->session->flashdata('validation_errors');
		$data['alert_success'] = $this->session->flashdata('alert_success');
		$data['alert_danger'] = $this->session->flashdata('alert_danger');

		$this->load->view('templates/header', $data);
		$this->load->view('livestock/index', $data);
		$this->load->view('templates/footer');
	}

	public function validate()
	{
        $this->load->library('form_validation');

        //** Set rules */
        $this->form_validation->set_rules('farmer_id','Farmer','required|numeric');
        $this->form_validation->set_rules('cowName','Cow Name','required|max_length[50]');
        $this->form_validation->set_rules('admOutput','Average Daily Milk Output','required|numeric');

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
		$this->livestock_model->set_livestock($_POST['farmer_id'], $_POST['cowName'], $_POST['admOutput']);
		$this->session->set_flashdata('alert_success', 'Livestock added!');
	}

	public function delete()
	{
		$this->livestock_model->delete_livestock($_POST['id']);
		$this->session->set_flashdata('alert_success', 'Livestock deleted sucessfully!');
	}
}
?>