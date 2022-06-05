<?php

class C_admin extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		if ($this->session->userdata('username')=="") {
			redirect('autch/login_admin');
		}
	}

	public function dashboard() {
		$data['username'] = $this->session->userdata('username');
		$data['nama_sekolah'] = $this->session->userdata('nama_sekolah');
		$data['level'] = $this->session->userdata('level');
		$data['isi'] = 'dt_admin/tampil_dashboard';
		$this->load->view('admin',$data);
		$this->model_squrity->getsqurityadmin();
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		redirect('autch/login_admin');
	}
}
?>
