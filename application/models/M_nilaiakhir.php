<?php 
// WWW.MALASNGODING.COM | Author : Diki Alfarabi Hadi
// Model yang terstruktur. agar bisa digunakan berulang kali untuk membuat operasi 
// Sehingga proses pembuatan CRUD menjadi lebih cepat dan efisien.
class M_nilaiakhir extends CI_Model{
// FUNGSI CRUD
// fungsi untuk mengambil data dari database
function get_data(){
return $this->db->get('Nilai_akhir');
}
// fungsi untuk menginput data ke database
function insert_data($data,$table){
$this->db->insert($table,$data);
}
// fungsi untuk mengedit data
function edit_data($where,$table){
return $this->db->get_where($table,$where);
}
// fungsi untuk mengupdate atau mengubah data di database
function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
// fungsi untuk menghapus data dari database
function delete_data($where,$table){
$this->db->delete($table,$where);
}
function cek_login($table,$where){
    return $this->db->get_where($table,$where);
}
// AKHIR FUNGSI CRUD
}
// function get_data($table){
//     return $this->db->get($table);
//     }
?>