<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengguna_model');
  }

  public function index()
  {
    if (! $this->session->username) {
      redirect(base_url());
    }else {
      // $query = $this->Pengguna_model->get_pengguna();
      // $data['pengguna'] = $query;
      $data['title'] = 'Dashboard Admin';
      $this->load->view('layouts/header',$data);
      $this->load->view('dashboard/index');
      $this->load->view('layouts/footer');
      
    }
  }
  public function data(){
    $data['title'] = 'Data Pengguna';
    $query = $this->Pengguna_model->get_all_pengguna()->result();
    $data['pengguna'] = $query;
    $this->load->view('layouts/header',$data);
    $this->load->view('dashboard/data_pengguna' ,$data);
    $this->load->view('layouts/footer');
  }
  public function tambah_pengguna()
  {
    $this->load->view('layouts/header');
    $this->load->view('dashboard/tambah_pengguna');
    $this->load->view('layouts/footer');
  }

  public function input_data_pengguna()
  {
    $data_form = $this->input->post();
        $data=array('username' => $data_form['username'],
              'password' => md5($data_form['password']),
              'role_id' => $data_form['role_id'],
              'is_active' => 1,
              'last_update' => ''
            );
        $this->Pengguna_model->tambahdataPengguna($data);
        redirect('dashboard/data');

  }

  public function hapus_data_pengguna($id){
    $this->Pengguna_model->hapus_pengguna($id);
    redirect('dashboard/data');
  }

  public function edit_pengguna($id)
  {
    $data['pengguna'] = $this->Pengguna_model->get_pengguna($id)->result();
    $this->load->view('layouts/header');
    $this->load->view('dashboard/edit_pengguna', $data);
    $this->load->view('layouts/footer');
  }

  public function update_pengguna($id)
  {
    date_default_timezone_set("ASIA/JAKARTA");
    $data_form = $this->input->post();
        $data=array('username' => $data_form['username'],
              'password' => md5($data_form['password']),
              'role_id' => $data_form['role_id'],
              'is_active' => 1,
              'last_update' => date('Y-m-d H:i:s')
            );
        $this->Pengguna_model->update_pengguna($id,$data);
        redirect('dashboard/data');

  }

}

 