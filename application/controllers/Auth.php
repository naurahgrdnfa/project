<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
    $this->load->library('session');
  }
  // public function index(){
  // if ($this->session->userdata('username')) {
  //     redirect('Dashboard');
  //   }
  //   $this->form_validation->set_rules('username', 'Username', 'trim|required|');
  //   $this->form_validation->set_rules('password', 'Password', 'trim|required');
  //   if ($this->form_validation->run() == false) {
  //     $data['title'] = 'User Log In';
  //     $this->load->view('auth/login', $data);
  //   } else {
  //     $this->_login();
  //   }
  // }
  public function index()
  {
    
   $data['title'] = "Masuk Admin";
   $this->load->view('auth/login', $data);
  }

  public function proses_login()
  {
    $username = $this->input->POST('username');
    $password = $this->input->POST('password');

    $data = array(
      'username' => $username,
      'password' => $password
    );
    $cek_user = $this->Auth_model->login($data);
    if ($cek_user->num_rows() > 0) {

      $this->session->set_userdata($cek_user->row_array());
      redirect(base_url('Dashboard'));
    }else{
      $this->session->set_flashdata('error', 'Username & password tidak cocok');
      redirect(base_url());
    }
  }

  // public function proses_login()
  // {
  //   $username = $this->input->POST('username');
  //   $password = $this->input->POST('password');

  //   $user = $this->db->get_where('user', ['username' => $username])->row_array();
  //   if ($user) {
  //     if ($user['is_active'] ==  1) {
  //       if (password_verify($password, $user['password'])) {
  //         $data = [
  //           'username' => $user['username'],
  //           'role_id' => $user['role_id'],
  //           'id' => $user['id'],
  //         ];
  //         $this->session->set_userdata($data);
  //         if ($user['role_id'] == 1 || $user['role_id'] == 6) {
  //           redirect('Dashboard');
  //         } 
  //       } 
  //     } 
  //   } else {
  //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  //       Username atau password salah!
  //       </div>');
  //     redirect('auth/login');
  //   }
  // }

  // private function _login()
  // {
  //   if ($this->session->userdata('username')) {
  //     redirect('Dashboard');
  //   }
  //   $username    = $this->input->post('username');
  //   $password = $this->input->post('password');

  //   $user = $this->db->get_where('user', ['username' => $username])->row_array();
  //   if ($user) {
  //     if ($user['is_active'] ==  1) {
  //       if (password_verify($password, $user['password'])) {
  //         $data = [
  //           'username' => $user['username'],
  //           'role_id' => $user['role_id'],
  //           'id' => $user['id'],
  //         ];
  //         $this->session->set_userdata($data);
  //         if ($user['role_id'] == 1 || $user['role_id'] == 6 || $user['role_id'] == 7) {
  //           redirect('Dashboard');
  //         } 
  //       } 
  //     } 
  //   } else {
  //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  //       Username atau password salah!
  //       </div>');
  //     redirect('auth/login');
  //   }
  // }

  public function logout()
  {
    date_default_timezone_set("ASIA/JAKARTA");
    $date = array('last_update' => date('Y-m-d H:i:s'));
    $id = $this->session->userdata('id');
    $this->Auth_model->logout($date, $id);
    $this->session->sess_destroy();
    redirect('auth/');
  }

}
