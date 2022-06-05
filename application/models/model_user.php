<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;

	
		}
		public function insertUser () {

        //insert data
        $data = array(
            //assign data into array elements
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'level' => $this->input->post('level'),
            'password' =>md5($this->input->post('password'))
        );
        //insert data to the database
        $this->db->insert('user',$data);

    }
		
	}

