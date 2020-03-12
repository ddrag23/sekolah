<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

	public function __construct(){
		parent::__construct();
		cekNotLogin();
		$this->load->model('m_siswa');
	}
	public function index()
	{
		
		$this->form_validation->set_rules('ayah', 'Nama Ayah', 'required|trim');
        $this->form_validation->set_rules('ibu', 'Nama Ibu', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/main', [
				"src" => "module/ppdb/index",
				"page" => "Ppdb"
			]);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->m_siswa->ppdb($post);
			if ($this->db->affected_rows() > 0 ) {
				echo json_encode("sukses");
			}
			echo "gagal";
		}
	}
	public function regPpdb(){
	

	}
}
