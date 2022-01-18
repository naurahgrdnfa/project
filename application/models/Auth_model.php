<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function login($data)
  {
    $this->db->where('username', $data['username']);
    $this->db->where('password', $data['password']);
    return $this->db->get('user');
  }

  public function logout($date, $id)
{
    $this->db->where('user_id', $id);
    $this->db->update('user', $date);
}

}
