<?php
class M_admin extends CI_Model{
    
 function list_admin(){
   
        $hasil=$this->db->query("SELECT * from tbl_permohonan");
        return $hasil->result();
        
    }
   // select nama_sekolah,count(id_permohonan) from tbl_permohonan
    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM tbl_permohonan WHERE id_permohonan='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_permohonan' => $data->id_permohonan,
                    'nama_sekolah' => $data->nama_sekolah,
                    'jurusan' => $data->jurusan,
                    'waktu_pelaksanaan' => $data->waktu_pelaksanaan,
                    'status' => $data->status,
                    'keterangan' => $data->keterangan,
                    );
            }
        }
        return $hasil;
    }

    function update($id_permohonan,$status,$ket){
        $hasil=$this->db->query("UPDATE tbl_permohonan SET status='$status',keterangan='$ket' WHERE id_permohonan='$id_permohonan'");
        return $hasil;
    }
}
// SELECT p.nama_sekolah, p.jurusan, p.waktu_pelaksanaan, count(*) jml FROM tbl_permohonan p left join `tbl_permohonan_detail` d on d.id_permohonan=p.id_permohonan group by d.id_permohonan