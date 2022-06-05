<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_siswa extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$nama_sekolah = $this->session->userdata('nama_sekolah');
		$isi['email'] = $this->session->userdata('email');
		$isi['nama_sekolah'] = $this->session->userdata('nama_sekolah');
	    $isi['isi'] = 'dt_pengguna/dt_sekolah';
	     $isi['data'] =$this->db->group_by('id_permohonan');
	    $isi['data'] =$this->db->select('id_permohonan,jurusan,status,keterangan, COUNT(id_permohonan) as jumlah');
	    $isi['data'] = $this->db->get("tbl_permohonan WHERE nama_sekolah='{$nama_sekolah}'");
	    $this->db->where('id_permohonan',$isi);
	  // $isi['data'] =$this->db->select("tbl_permohonan.id_permohonan,tbl_permohonan.jurusan,tbl_permohonan.status,tbl_permohonan.keterangan, count(tbl_permohonan_detail.id_permohonan)  as jumlah");
   //    $isi['data'] =$this->db->from('tbl_permohonan');
   //    $isi['data'] =$this->db->join('tbl_permohonan_detail', 'tbl_permohonan_detail.id_permohonan = tbl_permohonan.id_permohonan');
   //    $isi['data'] =$query = $this->db->get();


		$this->load->view('pengguna',$isi);
	}
	public function print(){
		$this->model_squrity->getsqurity();
		$isi['email'] = $this->session->userdata('email');
		$isi['nama_sekolah'] = $this->session->userdata('nama_sekolah');
		$isi['isi'] = 'dt_pengguna/v_siswa';
		$key =$this->uri->segment(4);
		$this->db->where('id_permohonan',$key);
		$isi['data'] = $this->db->get('tbl_permohonan_detail');
			$this->load->view('pengguna',$isi);
		}
}

?>
<!-- 
	     $isi['data'] =$this->db->select('jurusan,status,keterangan, COUNT(id_permohonan) as jumlah');
		 $isi['data'] =$this->db->group_by('id_permohonan'); 
		 $isi['isi'] = 'dt_admin/laporan'; 
		 $isi['data'] = $this->db->get("tbl_permohonan_detail"); -->