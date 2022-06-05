<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_squrity extends CI_Model {

  public function getsqurity(){
    $email = $this->session->userdata('email');
    if (empty($email)) {
      $this->session->sess_destroy();
      redirect('autch/login_pengguna');
    }
  }

    public function getsqurityadmin(){
    $username = $this->session->userdata('username');
    if (empty($username)) {
      $this->session->sess_destroy();
      redirect('cek_admin/login_admin');
    }
  }
}
