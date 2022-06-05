<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_admin extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->model('m_admin');
			
		}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$data['nama_sekolah'] = $this->session->userdata('nama_sekolah');
		$data['isi'] = 'dt_admin/tampil_databases';
		$this->load->view('admin', $data);
		$this->model_squrity->getsqurityadmin();
	}
	function data_admin(){
		$this->model_squrity->getsqurityadmin();	
		$data=$this->m_admin->list_admin();
		echo json_encode($data);

	}
	function edit(){
		$this->model_squrity->getsqurityadmin();
		$id_permohonan=$this->input->post('id_permohonan');
		$status=$this->input->post('status');
		$ket=$this->input->post('keterangan');
		$data=$this->m_admin->update($id_permohonan,$status,$ket);
		echo json_encode($data);
	}
	function get_barang(){
		$this->model_squrity->getsqurityadmin();
		$kobar=$this->input->get('id_permohonan');
		$data=$this->m_admin->get_barang_by_kode($kobar);
		echo json_encode($data);
	}

	
}
