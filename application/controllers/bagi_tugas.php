<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bagi_tugas extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_bagi_tugas');
    $this->load->model('M_mapel');
    $this->load->model('M_kelas');

	
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
       
        $data['bagi_tugas'] = $this->M_bagi_tugas->get_data('bagi_tugas')->result();
		$this->load->view('bagi_tugas/v_bagi_tugas',$data);
        $this->load->view('template/footer');
	}
	function tambah(){
        $data['mapel'] = $this->M_mapel->get_data('mapel')->result();
        $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
        $this->load->view('template/header');
        $this->load->view('template/wrapper');
        $this->load->view('template/navbar');
        $this->load->view('bagi_tugas/v_input',$data);
        $this->load->view('template/footer');
       
    }


		function tambah_aksi(){
			$id_petugas = $this->input->post('id_petugas');
			$kd_mapel = $this->input->post('kd_mapel');
			$id_kelas = $this->input->post('id_kelas');
			$semester = $this->input->post('semester');
			$data = array(
			'id_petugas' => $id_petugas,
			'kd_mapel' => $kd_mapel,
			'id_kelas' => $id_kelas,
			'semester' => $semester,
			);
			$this->M_bagi_tugas->insert_data($data,'bagi_tugas');
			redirect('index.php/bagi_tugas');
			}
	
		function hapus($id_petugas){
				$where = array('id_petugas' => $id_petugas);
				$this->M_bagi_tugas->delete_data($where,'bagi_tugas');
				redirect('index.php/bagi_tugas');
				}
		function edit($id_petugas){
			$this->load->view('template/header');
        			$this->load->view('template/wrapper');
        			$this->load->view('template/navbar');
					$where = array('id_petugas' => $id_petugas);
					$data['bagi_tugas'] = $this->M_bagi_tugas->edit_data($where,'bagi_tugas')->result();
					$this->load->view('bagi_tugas/v_edit',$data);
					$this->load->view('template/footer');
		}
		function update(){
			$id_petugas = $this->input->post('id_petugas');
			$nama_mapel = $this->input->post('nama_mapel');
			$semester = $this->input->post('semester');
			$no_urut = $this->input->post('no_urut');
			$data = array(
			'nama_mapel' => $nama_mapel,
			'semester' => $semester,
			'no_urut' => $no_urut,
			);
			$where = array(
			'id_petugas' => $id_petugas
			);
			$this->M_bagi_tugas->update_data($where,$data,'bagi_tugas');
			redirect('index.php/bagi_tugas');
			}
}