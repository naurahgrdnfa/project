<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model{

  public function get_all_pengguna()
  {
    return $this->db->query('SELECT * FROM user u JOIN user_role ur ON u.role_id=ur.id');
  }

  public function get_pengguna($id)
  {
    $this->db->where('user_id',$id);
    return $this->db->get('user');
  }

  public function hapus_pengguna($id){
      $this->db->like('user_id',$id);
      $this->db->delete('user');
    }

  public function update_pengguna($id,$data)
  {
    $this->db->like('user_id', $id);
    return $this->db->update('user', $data);
  }

  public function tambahdataPengguna($data){
      $this->db->insert('user',$data);
    }

}
