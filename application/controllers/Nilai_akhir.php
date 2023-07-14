<?php
class Nilai_akhir extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_nilaiakhir');
$this->load->model('M_kelas');
}

public function index()
	{
      
        $kelas=$this->db->query('select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas)')->result();
        $data ['bagi_tugas'] = $kelas;
        $data['kelas'] = $this->M_kelas->get_data()->result();
        $semester=$this->db->query('select semester from bagi_tugas group by semester')->result();
        $data ['semester'] = $semester;
		$this->load->view('v_nilaiakhir',$data);
	}
    
function get_kelas(){
 $semester=$this->input->post('semester');
    $kelas=$this->db->query("select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas)")->result();
    
    echo json_encode($kelas);
    }
function get_mapel(){
    $kelas=$this->input->post('kelas');
    $mapel=$this->db->query("select * from bagi_tugas a join mapel b on(a.kd_mapel=b.kd_mapel)")->result();
    echo json_encode($mapel);
    }
    function get_siswa(){
        $kelas=$this->input->post('kelas');
    $siswa=$this->db->query("select * from rombel a join siswa b on(a.nis=b.nis) where id_kelas='$kelas'")->result();
    echo json_encode($siswa);
    }
function tambah(){
    $data['kelas'] = $this->M_kelas->get_data()->result();
    $data['guru'] = $this->M_guru->get_data()->result();


    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('v_tambah_walikelas',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id = $this->input->post('id');
        $kd_mapel = $this->input->post('mapel');
        $semester = $this->input->post('semester');
        $id_kelas = $this->input->post('kelas');
        $jumlah = $this->input->post('jumlah');
        
        $no=0;
        while($no<$jumlah){
              $nilai = $this->input->post('nilai'.$no);
              $nis = $this->input->post('nis'.$no);
            $data = array(
                'kd_mapel' => $kd_mapel,
                'semester' => $semester,
                'nilai' => $nilai,
                'nis' => $nis,
                'id_kelas' => $id_kelas
                );
                $this->M_nilaiakhir->insert_data($data,'nilai_rapot');
                $no++;
              
        }
        
        redirect('index.php/Nilai_akhir');
        }

    function hapus($id){
            $where = array('id' => $id);
            $this->m_walikelas->delete_data($where,'walikelas');
            redirect('index.php/walikelas');
            }
    function edit($id){
                $where = array('id' => $id);
                $data['walikelas'] = $this->m_walikelas->edit_data($where,'walikelas')->result();
                $this->load->view('template/wrapper');
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('walikelas/v_edit_walikelas',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $id_kelas = $this->input->post('id_kelas');
        $id_guru = $this->input->post('id_guru');
        $semester = $this->input->post('semester');
        $tapel = $this->input->post('tapel');
        $data = array(
        'id_kelas' => $id_kelas,
        'id_guru' => $id_guru,
        'semester' => $semester,
        'tapel' => $tapel
        );
        $where = array(
        'id' => $id
        );
        $this->m_walikelas->update_data($where,$data,'walikelas');
        redirect('index.php/walikelas');
        }
}