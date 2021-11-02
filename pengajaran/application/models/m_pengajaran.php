<?php 

class M_pengajaran extends CI_Model {
	// public function get_data(){
	// 	return $this->db->get('tb_pengajaran');
	// }

	public function tampil_data()
	{
		return $this->db->get('tb_pengajaran')->result_array();
	}

	public function input_data($data){
		$this->db->insert('tb_pengajaran', $data);
	}

	public function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('tb_pengajaran');
	}

	public function edit_data($where){
		return $this->db->get_where('tb_pengajaran', $where)->result_array();
	}

	public function update_data($where, $data){
		$this->db->where($where);
		$this->db->update('tb_pengajaran', $data);
	}

	public function detail_data($id = NULL){
		$query = $this->db->get_where('tb_pengajaran', array('id' => $id))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_pengajaran');
		$this->db->like('mata_kuliah', $keyword);
		$this->db->or_like('semester', $keyword);
		$this->db->or_like('sks', $keyword);
		$this->db->or_like('dosen_pengampu', $keyword);
		return $this->db->get()->result();
	}
}
