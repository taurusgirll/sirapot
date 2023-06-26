<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ImportSiswa extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('siswa', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('siswa')->result_array();
	}

}