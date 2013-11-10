<?php
class Farmer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_farmer($id = FALSE)
	{
		if ($id === FALSE)
		{
			$this->db->order_by('name', 'ASC');
			$query = $this->db->get('farmer');
			return $query->result_array();
		}

		$query = $this->db->get_where('farmer', array('id' => $id));
		return $query->result_array();
	}

	public function get_farmer_and_livestock($id = FALSE)
	{
		$farmers = $this->get_farmer($id);
		$CI =& get_instance();
		$CI->load->model('livestock_model');
		foreach ($farmers as &$farmer) {
			$farmer['livestock'] = $CI->livestock_model->get_livestock_by_farmer($farmer['id']);
		}
		return $farmers;
	}

	public function set_farmer($name, $county)
	{
		$data = array(
		   'name' => $name,
		   'county' => $county
		);

		$this->db->insert('farmer', $data);
	}

	public function delete_farmer($id)
	{
		$this->db->delete('farmer', array('id' => $id));
	}
}
?>