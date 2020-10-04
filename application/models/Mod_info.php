<?php
class Mod_info extends CI_Model{
	
	public $table = "tbl_info";
	
	function update(){
		$data = array(
			'nama_toko'		=> strtoupper($this->input->post('nama_toko', TRUE)),
			'alamat'		=> $this->input->post('alamat', TRUE),
			'telp'			=> $this->input->post('telp', TRUE),
			'fax'			=> $this->input->post('fax', TRUE),
			'email'			=> $this->input->post('email', TRUE),
			//'logo'			=> $logo,
			//'logo_full'		=> $logo_full,
			'about'			=> $this->input->post('about', TRUE),
			'keunggulan'	=> $this->input->post('keunggulan', TRUE),
			'siup'			=> $this->input->post('siup', TRUE),
			'npwp'			=> $this->input->post('npwp', TRUE)
		);
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}
	
	function select_info(){
		$this->db->where('id', 1);
        $query = $this->db->get($this->table);
		return $query;
	}
	
}