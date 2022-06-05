<?php
class M_pengguna extends CI_Model{
    
 function list_pengguna(){
    $nama_sekolah = $this->session->userdata('nama_sekolah');
        $hasil=$this->db->query("SELECT * FROM tbl_permohonan WHERE nama_sekolah='{$nama_sekolah}'");
        return $hasil->result();
    }
    function get_data_barang_bykode(){
        $hasil=$this->db->query("SELECT * FROM tbl_permohonan_detail");
        return $hasil->result();
    }
   function smpn_m_pengguna($nama_sekolah,$jurusan,$waktu_pelaksanaan){
        $hasil = $this->db->query("INSERT INTO tbl_permohonan (nama_sekolah,jurusan,waktu_pelaksanaan) VALUES ('$nama_sekolah','$jurusan','$waktu_pelaksanaan')");
        return $hasil;
    }
     function tambah_user($id_permohonan,$nama_siswa,$jenis_kelamin,$nis){
        $hasil = $this->db->query("INSERT INTO tbl_permohonan_detail (id_permohonan,nama_siswa,jenis_kelamin,nis) VALUES ('$id_permohonan','$nama_siswa','$jenis_kelamin','$nis')");
        return $hasil;
    }
    function hapus($id_permohonan){
            $hasil=$this->db->query("DELETE FROM tbl_permohonan WHERE id_permohonan='$id_permohonan'");
            return $hasil;
        }
       
 function get_barang_by_kode($id_permohonan){
        $hsl=$this->db->query("SELECT * FROM tbl_permohonan WHERE id_permohonan='$id_permohonan'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_permohonan' => $data->id_permohonan,
                    'jurusan' => $data->jurusan,
                    'waktu_pelaksanaan' => $data->waktu_pelaksanaan,

                    );
            }
        }
        return $hasil;
    }
    function update_barang($id_permohonan,$jurusan,$waktu_pelaksanaan){
        $hasil=$this->db->query("UPDATE tbl_permohonan SET jurusan='$jurusan',waktu_pelaksanaan='$waktu_pelaksanaan' WHERE id_permohonan='$id_permohonan'");
        return $hasil;
    }
    public function duatable() {
         $this->db->select('*');
         $this->db->from('tbl_permohonan');
         $this->db->join('tbl_permohonan_detail','tbl_permohonan_detail.id_permohonan=.id');
         $query = $this->db->get();
         return $query->result();
}
}
