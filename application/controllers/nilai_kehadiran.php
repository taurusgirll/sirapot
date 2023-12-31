<?php
class nilai_kehadiran extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('M_nilaikehadiran');
$this->load->model('M_kelas');
}

public function index()
	{
      
        $kelas=$this->db->query('select * from bagi_tugas a join kelas b on(a.id_kelas=b.id_kelas)')->result();
        $data ['bagi_tugas'] = $kelas;
        $data['kelas'] = $this->M_kelas->get_data()->result();
        $semester=$this->db->query('select semester from bagi_tugas group by semester')->result();
        $data ['semester'] = $semester;
		$this->load->view('v_nilaikehadiran',$data);
	}
    function get_kelas(){
        $semester=$this->input->post('semester');
    $kelas=$this->db->query("select * from kehadiran a join kelas b on(a.id_kelas=b.id_kelas)")->result();
    echo json_encode($kelas);
    }
    function get_siswa(){
        $kelas=$this->input->post('kelas');
    $siswa=$this->db->query("select * from rombel a join siswa b on(a.nis=b.nis) where id_kelas='$kelas'")->result();
    echo json_encode($siswa);
    }
function tambah(){
    $data['kelas'] = $this->M_kelas->get_data()->result();

    $this->load->view('template/wrapper');
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('v_tambah_kehadiran',$data);
    $this->load->view('template/footer');
    }
    function tambah_aksi(){
        $id_kehadiran = $this->input->post('id_kehadiran');
        $id_kelas = $this->input->post('kelas');
        $semester = $this->input->post('semester');
        $jumlah = $this->input->post('jumlah');
        
        $no=0;
        while($no<$jumlah){
              $nis = $this->input->post('nis'.$no);
              $sakit = $this->input->post('sakit'.$no);
              $izin = $this->input->post('izin'.$no);
              $tanket = $this->input->post('tanket'.$no);

            $data = array(
                'id_kelas' => $id_kelas,
                'semester' => $semester,
                'nis' => $nis,
                'sakit' => $sakit,
                'izin' => $izin,
                'tanket' => $tanket
                );
                $this->M_nilaikehadiran->insert_data($data,'kehadiran');
                $no++;
              
        }
        
        redirect('index.php/nilai_kehadiran');
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