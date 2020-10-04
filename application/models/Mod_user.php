<?php

class Mod_user extends CI_Model{

	private $table		= "tbl_users";
	private $tableRole	= "tbl_role";
	
	function chek_login($username, $password){
		$this->db->where('status_delete',0);
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$user	= $this->db->get($this->table);
		return $user;
	}
	
	function update_profil() {
		$data = array(
			'password'	=> md5($this->input->post('password', TRUE))
		);
		$id_user = $this->input->post('user_id');
		$this->db->where('user_id', $id_user);
		$this->db->update($this->table, $data);
	}
	
	function role(){
		$this->db->where('status_delete',0);
		$role	= $this->db->get($this->tableRole);
		return $role;
	}

	function check_role($userId, $menuId){
		$this->db->where('user_id', $userId);
		$this->db->where('menu_id', $menuId);
		$role	= $this->db->get($this->tableRole);
		return $role;
	}

	function check_user($userId){
		$this->db->where('user_id', $userId);
		$role	= $this->db->get($this->table);
		return $role;
	}
    
}
