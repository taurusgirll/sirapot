<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPdfJurusan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_jurusan');
		$this->load->helper('url');
		}

    function index()
    {
        $data['jurusan'] = $this->M_jurusan->get_data('jurusan')->result();
        $this->load->library('pdf');
        $this->load->view('jurusan/v_jurusan',$data);
        $html = $this->load->view('jurusan/Pdfjurusan', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>