<?php
	class Category_promo extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mod_kategori_promo');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		
		function index(){
			$data['record']=  $this->Mod_kategori_promo->select_all()->result();
			$this->template->load('templateadmin', 'admin/category_promo/data', $data);
		}
		
		//==================================================================================================
		
		function post(){
			if(isset($_POST['submit'])){
				$this->Mod_kategori_promo->simpan();
				redirect('admin/category_promo');
			}else{
				$this->template->load('templateadmin','admin/category_promo/post');
			}
		}
		
		
		function edit(){
			if(isset($_POST['submit'])){
				$this->Mod_kategori_promo->update();
				redirect('admin/category_promo');
			}else{
				$kategori_id	= $this->uri->segment(4);
				$data['row']	= $this->Mod_kategori_promo->get_kategori_promo_by_kategori_promo_id($kategori_id)->row_array();
				$this->template->load('templateadmin', 'admin/category_promo/edit', $data);
			}
		}
		
		function delete(){
			$kategori_id = $this->uri->segment(4);
			if(!empty($kategori_id)){
				$this->Mod_kategori_promo->hapus($kategori_id);
			}
			redirect('admin/category_promo');
		}
		
		//==================================================================================================
		
	}