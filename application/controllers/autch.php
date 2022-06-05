<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autch extends CI_Controller {

	public function login_pengguna(){
			$this->load->view('login_pengguna');
	}

	public function cek_login() {

		$data = array('email' => $this->input->post('email', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['nama_sekolah'] = $sess->nama_sekolah;
				$sess_data['email'] = $sess->email;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='pengguna') {
				redirect('pengguna/c_pengguna/dashboard');
			}

			
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}


	public function login_admin() {

		$this->load->view('login_admin');
	}

	public function registrasi(){
		$this->load->view('registrasi');
	}
} 

?>
