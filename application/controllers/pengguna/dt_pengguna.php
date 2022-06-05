<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_pengguna extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_pengguna');
			
		}
	public function index() {
		$data['email'] = $this->session->userdata('email');
		$data['nama_sekolah'] = $this->session->userdata('nama_sekolah');
		$data['isi'] = 'dt_pengguna/tampil_databases';
		$this->load->view('pengguna', $data);
		$this->model_squrity->getsqurity();
	}
	function data_pengguna(){
		$this->model_squrity->getsqurity();
		$data=$this->m_pengguna->list_pengguna();
		echo json_encode($data);

	}

	function simpan_pengguna(){
		$this->model_squrity->getsqurity();
		$nama_sekolah = $this->input->post('nama_sekolah');
		$jurusan = $this->input->post('jurusan');
		$waktu_pelaksanaan = $this->input->post('waktu_pelaksanaan');
		$data = $this->m_pengguna->smpn_m_pengguna($nama_sekolah,$jurusan,$waktu_pelaksanaan);
		echo json_encode($data);
	}
	function tambah_user(){
		$this->model_squrity->getsqurity();
		$id_permohonan = $this->input->post('id_permohonan');
		$nama_siswa = $this->input->post('nama_siswa');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nis = $this->input->post('nis');
		$data = $this->m_pengguna->tambah_user($id_permohonan,$nama_siswa,$jenis_kelamin,$nis);
		echo json_encode($data);
	}
	 function get_pengguna(){
	 	$this->model_squrity->getsqurity();
		$id_permohonan=$this->input->get('id_permohonan');
		$data=$this->m_pengguna->get_barang_by_kode($id_permohonan);
		echo json_encode($data);
	}
	function hapus(){
		$this->model_squrity->getsqurity();
			$id_permohonan=$this->input->post('id_permohonan');
			$data=$this->m_pengguna->hapus($id_permohonan);
			echo json_encode($data);
		}
		function edit(){
		$id_permohonan=$this->input->post('id_permohonan');
		$jurusan=$this->input->post('jurusan');
		$waktu_pelaksanaan=$this->input->post('waktu_pelaksanaan');
		$data=$this->m_pengguna->update_barang($id_permohonan,$jurusan,$waktu_pelaksanaan);
		echo json_encode($data);
	}
	public function d_dtsiswa() {
		$data['email'] = $this->session->userdata('email');
		$data['nama_sekolah'] = $this->session->userdata('nama_sekolah');
		$data['isi'] = 'dt_pengguna/dt_sekolah';
		$this->load->view('pengguna', $data);
		$this->model_squrity->getsqurity();
	}
// 	function data_siswa(){
// $this->model_squrity->getsqurity();
// 		$data=$this->m_pengguna->get_data_barang_bykode();
// 		echo json_encode($data);
// 	}

	
}
