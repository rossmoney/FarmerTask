<?php
class Reporting_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function toptenfarmers_by_averagedailymilk()
	{
		$this->db->select('farmer.name as farmer, SUM(livestock.averagedailymilk) as totaldailymilk', false);
		$this->db->from('livestock');
		$this->db->join('farmer', 'farmer.id = livestock.farmer_id' );
		$this->db->group_by('farmer.name');
		$this->db->order_by('totaldailymilk', 'DESC');
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function toptenfarmers_by_combinedweeklymilk()
	{
		$this->db->select('farmer.name as farmer, SUM(livestock.averagedailymilk * 7 ) as combinedweeklymilk', false);
		$this->db->from('livestock');
		$this->db->join('farmer', 'farmer.id = livestock.farmer_id' );
		$this->db->group_by('farmer.name');
		$this->db->order_by('combinedweeklymilk', 'DESC');
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function topfivecows_with_highestweeklymilk()
	{
		$this->db->select('livestock.cowname as cowname, livestock.averagedailymilk * 7 as weeklymilk');
		$this->db->from('livestock');
		$this->db->order_by('weeklymilk', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
	}
}
