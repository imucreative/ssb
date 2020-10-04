<?php
	class Info extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mod_info');
			$this->load->model('Mod_user');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		
		function index(){
			if (isset($_POST['submit'])){
				$this->Mod_info->update();
				redirect('admin/info');
			}else{
				//$data['info']	= $this->db->get_where('tbl_info', array('id' => 1))->row_array();
				$data['info']	= $this->Mod_info->select_info()->row_array();
				$this->template->load('templateadmin', 'admin/info', $data);
			}
		}
		
		function profil(){
			$this->template->load('templateadmin', 'admin/profil');
		}
		
		function save_profil(){
			if (isset($_POST['submit'])){
				$this->Mod_user->update_profil();
				redirect("admin/auth/logout");
			}
		}
		
		
		
		//==================================================================================================
		
	}