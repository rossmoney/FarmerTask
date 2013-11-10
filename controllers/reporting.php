<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('reporting_model');
	}

	public function toptenfarmers_by_averagedailymilk()
	{
		$data['reportdata'] = $this->reporting_model->toptenfarmers_by_averagedailymilk();

		$data['title'] = 'Report of Top Ten Farmers by Average Daily Milk';
		$data['controller'] = $this->router->class;

		$this->load->view('templates/header', $data);
		$this->load->view('reporting/index', $data);
		$this->load->view('templates/footer');
	}

	public function toptenfarmers_by_combinedweeklymilk()
	{
		$data['reportdata'] = $this->reporting_model->toptenfarmers_by_combinedweeklymilk();

		$data['title'] = 'Report of Top Ten Farmers by Combined Weekly Milk';
		$data['controller'] = $this->router->class;

		$this->load->view('templates/header', $data);
		$this->load->view('reporting/index', $data);
		$this->load->view('templates/footer');
	}

	public function topfivecows_with_highestweeklymilk()
	{
		$data['reportdata'] = $this->reporting_model->topfivecows_with_highestweeklymilk();

		$data['title'] = 'Report of Top Five Cows with Highest Weekly Milk';
		$data['controller'] = $this->router->class;

		$this->load->view('templates/header', $data);
		$this->load->view('reporting/index', $data);
		$this->load->view('templates/footer');
	}

}