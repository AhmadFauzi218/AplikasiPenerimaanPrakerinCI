<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function registerUser() {

        //validate  the data taken through the register form
        $this->form_validation->set_rules('email','email','required|is_unique[user.email]');
        $this->form_validation->set_rules('nama','Full Name','required');
         $this->form_validation->set_rules('nama_sekolah','nama_sekolah','required|is_unique[user.nama_sekolah]');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('konfirmasi_password','Confirm Password','required|matches[password]');

        if ($this->form_validation->run() == TRUE) {

        //load the model to connect to the db
        $this->load->model('Model_user');
        $this->Model_user->insertUser();

        //set message to be shown when registration is completed
        $this->session->set_flashdata('success','You are registered!');
        redirect('autch/registrasi');

    } else {

        $this->load->view('registrasi');

        }
    }
}





?>
