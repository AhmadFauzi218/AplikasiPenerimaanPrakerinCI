<?php

class C_pengguna extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		if ($this->session->userdata('email')=="") {
			redirect('autch/login_pengguna');
		}
	}

	public function dashboard() {
		$data['email'] = $this->session->userdata('email');
		$data['nama_sekolah'] = $this->session->userdata('nama_sekolah');
		$data['level'] = $this->session->userdata('level');
		$data['isi'] = 'dt_pengguna/tampil_dashboard';
		$this->load->view('pengguna', $data);
		$this->model_squrity->getsqurity();
	}

	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');
		redirect('autch/login_pengguna');
	}
}
?>
