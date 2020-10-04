<?php
class Mod_front extends CI_Model{
    
	public $table_product		= 'tbl_product';
	public $table_slider		= 'tbl_slider';
	public $table_distributor	= 'tbl_distributor';
	public $table_promo			= 'tbl_promo';
	
	//==================================================================================================
	
    function get_product(){
		$this->db->where('publish', 1);
		$this->db->limit(6);
		$query	= $this->db->get($this->table_product);
		return $query;
        //return $this->db->query("SELECT * FROM tabel_product WHERE publish='1' LIMIT 6");
    }
	
	function get_slider(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$query	= $this->db->get($this->table_slider);
		return $query;
		//return $this->db->query("SELECT * FROM tabel_slider WHERE status_delete='0' LIMIT 3");
	}
	
	function get_distributor(){
		$this->db->where('status_delete', 0);
		$this->db->limit(4);
		$query	= $this->db->get($this->table_distributor);
		return $query;
		//return $this->db->query("SELECT * FROM tabel_distributor WHERE status_delete='0' LIMIT 4");
	}
	
	function get_promo(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->limit(10);
		$query	= $this->db->get($this->table_promo);
		return $query;
	}
	
	
	
	//==================================================================================================
	
	function get_widget1(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->where('display_in_home', 1);
		$query	= $this->db->get($this->table_product);
		return $query;
		//return $this->db->query("SELECT * FROM tabel_product WHERE status_delete='0' AND publish='1' AND display_in_home='1'");
	}
	
	function get_widget2(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->where('display_in_home', 2);
		$query	= $this->db->get($this->table_product);
		return $query;
		//return $this->db->query("SELECT * FROM tabel_product WHERE status_delete='0' AND publish='1' AND display_in_home='2'");
	}
	
	function get_widget3(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->where('display_in_home', 3);
		$query	= $this->db->get($this->table_product);
		return $query;
		//return $this->db->query("SELECT * FROM tabel_product WHERE status_delete='0' AND publish='1' AND display_in_home='3'");
	}
}