<?php
class Mod_adv extends CI_Model{
	
	public $table = "tbl_adv";
	
	function select_adv_top(){
		$this->db->where('status_display', 1);
		$this->db->where('status_delete', 0);
        $query = $this->db->get($this->table);
		return $query;
	}
	
	function select_adv_bottom(){
		$this->db->where('status_display', 2);
		$this->db->where('status_delete', 0);
        $query = $this->db->get($this->table);
		return $query;
	}
	
	function select_adv_promo(){
		$this->db->where('status_display', 3);
		$this->db->where('status_delete', 0);
        $query = $this->db->get($this->table);
		return $query;
	}
	
	function select_adv_promo_detail(){
		$this->db->where('status_display', 4);
		$this->db->where('status_delete', 0);
        $query = $this->db->get($this->table);
		return $query;
	}
	
}