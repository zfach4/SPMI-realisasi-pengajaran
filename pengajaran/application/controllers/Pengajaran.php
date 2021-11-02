<?php 

class Pengajaran extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

	public function index()
	{
		// $this->load->model('m_pengajaran');
		$data['pengajaran'] = $this->m_pengajaran->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengajaran', $data);
		// $this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengajaran');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$id 				= $this->input->post('id');
		$mata_kuliah 		= $this->input->post('mata_kuliah');
		$kode				= $this->input->post('kode');
		// $file				= $_FILES['file'];
		// if ($foto=''){} else{
		// 	$config['upload_path']		= './assets/file';
		// 	$config['allowed_types']	= 'jpg|pdf|doc|';

		// 	$this->load->library('upload', $config);
		// 	if(!$this->upload->do_upload('file')){
		// 		echo 'Upload Gagal'; die();
		// 	} else {
		// 		$file = $this->upload->data('file_name');
		// 	}
		// }
		
		$semester	 		= $this->input->post('semester');
		$sks				= $this->input->post('sks');
		$dosen_pengampu		= $this->input->post('dosen_pengampu');
		$tahun_ajaran		= $this->input->post('tahun_ajaran');
		$capaian_mk 		= $this->input->post('capaian_mk');
		$jurusan			= $this->input->post('jurusan');
		$program_studi		= $this->input->post('program_studi');
		$metode_penilaian	= $this->input->post('metode_penilaian');
		$daftar_referensi	= $this->input->post('daftar_referensi');
		$pertemuan_ke		= $this->input->post('pertemuan_ke');
		$tanggal			= $this->input->post('tanggal');
		$jam		 		= $this->input->post('jam');
		$pokok_bahasan		= $this->input->post('pokok_bahasan');
		$metode_pengajaran	= $this->input->post('metode_pengajaran');
		$modul				= $this->input->post('modul');

		$data = array(
			'mata_kuliah'		=> $mata_kuliah,
			'kode'				=> $kode,
			'semester'			=> $semester,
			'sks'				=> $sks,
			'dosen_pengampu'	=> $dosen_pengampu,
			'tahun_ajaran'		=> $tahun_ajaran,
			'capaian_mk'		=> $capaian_mk,
			'jurusan'			=> $jurusan,
			'program_studi'		=> $program_studi,
			'metode_penilaian'	=> $metode_penilaian,
			'daftar_referensi'	=> $daftar_referensi,
			'pertemuan_ke'		=> $pertemuan_ke,
			'tanggal'			=> $tanggal,
			'jam'				=> $jam,
			'pokok_bahasan'		=> $pokok_bahasan,
			'metode_pengajaran'	=> $metode_pengajaran,
			'modul'				=> $modul,
		);

		$this->m_pengajaran->input_data($data, 'tb_pengajaran');
		redirect('pengajaran/index');
	}

	public function hapus($id)
	{
		$where = array ('id' => $id);
		$this->m_pengajaran->hapus_data($where, 'tb_pengajaran');
		redirect('pengajaran/index');
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['pengajaran'] = $this->m_pengajaran->edit_data($where, 'tb_pengajaran');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id 				= $this->input->post('id');
		$mata_kuliah 		= $this->input->post('mata_kuliah');
		$kode				= $this->input->post('kode');
		$semester	 		= $this->input->post('semester');
		$sks				= $this->input->post('sks');
		$dosen_pengampu		= $this->input->post('dosen_pengampu');
		$tahun_ajaran		= $this->input->post('tahun_ajaran');
		$capaian_mk 		= $this->input->post('capaian_mk');
		$jurusan			= $this->input->post('jurusan');
		$program_studi		= $this->input->post('program_studi');
		$metode_penilaian	= $this->input->post('metode_penilaian');
		$daftar_referensi	= $this->input->post('daftar_referensi');
		$pertemuan_ke		= $this->input->post('pertemuan_ke');
		$tanggal			= $this->input->post('tanggal');
		$jam		 		= $this->input->post('jam');
		$pokok_bahasan		= $this->input->post('pokok_bahasan');
		$metode_pengajaran	= $this->input->post('metode_pengajaran');
		$modul				= $this->input->post('modul');

		$data = array(
			'mata_kuliah'		=> $mata_kuliah,
			'kode'				=> $kode,
			'semester'			=> $semester,
			'sks'				=> $sks,
			'dosen_pengampu'	=> $dosen_pengampu,
			'tahun_ajaran'		=> $tahun_ajaran,
			'capaian_mk'		=> $capaian_mk,
			'jurusan'			=> $jurusan,
			'program_studi'		=> $program_studi,
			'metode_penilaian'	=> $metode_penilaian,
			'daftar_referensi'	=> $daftar_referensi,
			'pertemuan_ke'		=> $pertemuan_ke,
			'tanggal'			=> $tanggal,
			'jam'				=> $jam,
			'pokok_bahasan'		=> $pokok_bahasan,
			'metode_pengajaran'	=> $metode_pengajaran,
			'modul'				=> $modul,
		);

		$where = array(
			'id'				=> $id
		);

		$this->m_pengajaran->update_data($where, $data, 'tb_pengajaran');

		redirect('pengajaran/index');
	}

	public function detail($id){
		$this->load->model('m_pengajaran');
		$detail = $this->m_pengajaran->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['pengajaran'] = $this->m_pengajaran->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengajaran', $data);
		$this->load->view('templates/footer');
	}

	public function print()
	{
		$data['pengajaran'] = $this->m_pengajaran->tampil_data('tb_pengajaran');
		$this->load->view('print_pengajaran', $data);
	}
}
