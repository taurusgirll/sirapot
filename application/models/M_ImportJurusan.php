<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ImportJurusan extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('jurusan', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('jurusan')->result_array();
	}

}