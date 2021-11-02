<?php 

class Ajaran extends CI_Controller{
	public function index(){
		$this->load->model('m_pengajaran');
		$data['ajaran'] = $this->m_pengajaran->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengajaran', $data);
		$this->load->view('templates/footer');
	}

}

