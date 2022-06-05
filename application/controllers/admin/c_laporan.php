<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan extends CI_Controller {

	public function index()
	{

		// $this->model_squrity->getsqurityadmin();
		// $data['username'] = $this->session->userdata('username');
	 //    $data['isi'] = 'dt_admin/laporan';
	 //    $data['data'] = $this->db->get("tbl_permohonan where status = 'Terima'");
	 //    $this->db->where('id_permohonan',$data);
		// $this->load->view('admin',$data);
		$this->model_squrity->getsqurityadmin();
		 $data['data'] =$this->db->select('nama_sekolah,jurusan,waktu_pelaksanaan,status, COUNT(id_permohonan) as jumlah');
		 $data['username'] = $this->session->userdata('username');
		 $data['data'] =$this->db->group_by('id_permohonan'); 
		 $data['isi'] = 'dt_admin/laporan';
		 $data['data'] =$this->db->order_by('waktu_pelaksanaan', 'desc'); 
		 $data['data'] = $this->db->get("tbl_permohonan where status = 'Terima'");
		 $this->load->view('admin',$data);
	}
		public function print(){
		$this->model_squrity->getsqurityadmin();
			$data['username'] = $this->session->userdata('username');
	    	$data['isi'] = 'dt_admin/laporan';
	    	$isi['data'] = $this->db->order_by('waktu_pelaksanaan', 'DESC');	    
    		$isi['data'] = $this->db->get("tbl_permohonan where status = 'Terima'");
    		// SELECT * FROM tbl_permohonan ORDER BY waktu_pelaksanaan DESC
			$isi['isi'] = 'dt_admin/c_laporan';
		    $key =$this->uri->segment(3);
		    $this->db->where('id_permohonan',$key);
		    $query = $this->db->get('tbl_permohonan');
		    if ($query->num_rows()>0) {
		      foreach ($query->result() as $row) {
		        $isi['nama_sekolah'] = $row->nama_sekolah;
		        $isi['jurusan'] = $row->jurusan;
		        $isi['waktu_pelaksanaan'] = $row->waktu_pelaksanaan;
		        $isi['status'] = $row->status;
		        $isi['keterangan'] = $row->keterangan;
		      }
		    }else {
					$isi['nama_sekolah'] = '';
					$isi['jurusan'] = '';
					$isi['waktu_pelaksanaan'] = '';
					$isi['status'] = '';
					$isi['keterangan'] = '';
		    	}
					$this->load->view('dt_admin/c_laporan',$isi);
		  	}
}

?>
