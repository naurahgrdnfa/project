<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses extends CI_Model {

	public function getSubMenu()
	{
		$this->db->select('*, sm.id AS idsm, sm.icon AS icon');
		$this->db->from('user_sub_menu AS sm');
		$this->db->join('user_menu AS m', 'm.id = sm.menu_id');
		return $this->db->get()->result_array();
	}

	public function getMenuById($id)
	{
		return $this->db->get_where('user_menu', ['id' => $id])->row_array();
	}

	public function getSubMenuById($id)
	{
		return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
	}

}