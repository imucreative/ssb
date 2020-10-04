<?php
	class Category extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mod_kategori');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		
		function index(){
			$data['record']=  $this->Mod_kategori->select_all()->result();
			$this->template->load('templateadmin', 'admin/category/data', $data);
		}
		
		//==================================================================================================
		
		function post(){
			if(isset($_POST['submit'])){
				$this->Mod_kategori->simpan();
				redirect('admin/category');
			}else{
				$this->template->load('templateadmin','admin/category/post');
			}
		}	
	
		function edit(){
			if(isset($_POST['submit'])){
				$this->Mod_kategori->update();
				redirect('admin/category');
			}else{
				$kategori_id	= $this->uri->segment(4);
				$data['row']	= $this->Mod_kategori->get_kategori_by_kategori_id($kategori_id)->row_array();
				$this->template->load('templateadmin', 'admin/category/edit', $data);
			}
		}
		
		function delete(){
			$kategori_id = $this->uri->segment(4);
			if(!empty($kategori_id)){
				$this->Mod_kategori->hapus($kategori_id);
			}
			redirect('admin/category');
		}
		
		//==================================================================================================
		
	}