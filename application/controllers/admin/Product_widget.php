<?php
	class Product_widget extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Mod_front');
			$this->load->model('Mod_product');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		function index(){
			$data['widget1']	= $this->Mod_front->get_widget1()->result();
			$data['widget2']	= $this->Mod_front->get_widget2()->result();
			$data['widget3']	= $this->Mod_front->get_widget3()->result();
			$data['product']	= $this->Mod_product->select_all_publish()->result();
			$this->template->load('templateadmin', 'admin/product/widget', $data);
		}
		
		//================================================================================
		
		function delete(){
			$id = $this->uri->segment(4);
			if(!empty($id)){
				$this->Mod_product->hapus_widget1($id);
			}
			redirect('admin/product_widget');
		}
		
		function post_widget1(){
			$this->Mod_product->post_widget1();
			redirect('admin/product_widget');
		}
		
		function post_widget2(){
			$this->Mod_product->post_widget2();
			redirect('admin/product_widget');
		}
		
		function post_widget3(){
			$this->Mod_product->post_widget3();
			redirect('admin/product_widget');
		}
		
		
	}
?>