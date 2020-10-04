<?php
class Mod_distributor extends CI_Model{
	
	public $table = "tbl_distributor";
	
	function simpan($image){
		$data	= array(
			'nama_distributor'	=> strtoupper($this->input->post('nama_distributor')),
			'image'				=> $image
		);
		$this->db->insert($this->table, $data);
	}
    
	function update($image){
		$data	= array(
			'nama_distributor'	=> strtoupper($this->input->post('nama_distributor')),
			'image'				=> $image
		);
		$this->db->where('distributor_id', $this->input->post('distributor_id'));
		$this->db->update($this->table, $data);
	}
	
	function hapus($distributor_id){
		$data	= array(
			'status_delete'	=> 1
		);
		$this->db->where('distributor_id', $distributor_id);
		$this->db->update($this->table, $data);
	}
	
	//==================================================================================================
	
	function select_all(){
		$this->db->where('status_delete', 0);
		$query		= $this->db->get($this->table);
		return $query;
	}
	
	function get_distributor_by_id($distributor_id){
		$this->db->where('status_delete', 0);
		$this->db->where('distributor_id', $distributor_id);
		$query	= $this->db->get($this->table);
		return $query;
		
	}
	
}