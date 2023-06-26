<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportJurusan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
	}

	public function index()
	{
		$this->load->model('M_ImportJurusan');
		$data = array(
			'list_data'	=> $this->M_ImportJurusan->getData()
		);
		$this->load->view('import_excel.php',$data);
	}

	public function import_excel(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$kd_jurusan = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nama_jurusan = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$temp_data[] = array(
						'kd_jurusan'	=> $kd_jurusan,
						'nama_jurusan'	=> $nama_jurusan,
					); 	
				}
			}
			$this->load->model('M_ImportJurusan');
			$insert = $this->M_ImportJurusan->insert($temp_data);
			if($insert){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}

}