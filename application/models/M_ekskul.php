<?php 
class M_ekskul extends CI_Model{
function get_data(){
return $this->db->get('ekskul');
}
function insert_data($data,$table){
$this->db->insert($table,$data);
}
function edit_data($where,$table){
return $this->db->get_where($table,$where);
}
function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
function delete_data($where,$table){
$this->db->delete($table,$where);
}
function cek_login($table,$where){
    return $this->db->get_where($table,$where);
}
}
?>