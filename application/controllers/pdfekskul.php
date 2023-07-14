<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdfekskul extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('M_ekskul');
		$this->load->helper('url');
		}

    function index()
    {
        $data['ekskul'] = $this->M_ekskul->get_data()->result();
        $this->load->library('pdf');
        $this->load->view('ekskul/v_ekskul',$data);
        $html = $this->load->view('ekskul/pdfekskul', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>