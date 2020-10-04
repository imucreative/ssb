<?php
	class Product_slider extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Mod_slider');
			$this->load->model('Mod_product');
			$this->load->library('upload');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		function index(){
			$data['record']	= $this->Mod_slider->slider_all()->result();
			$this->template->load('templateadmin', 'admin/product/slider_product', $data);
		}
		
		function post(){
			if(isset($_POST['submit'])){
				$image		= $this->upload_image();
				$image_bg	= $this->upload_image_bg();
				
				$this->Mod_slider->simpan($image, $image_bg);
				
				redirect('admin/product_slider');
				
			}else{
				$data['link_product']	= $this->Mod_product->select_all_publish()->result();
				$this->template->load('templateadmin', 'admin/product/slider_product_post', $data);
			}
		}
		
		function edit(){
			if(isset($_POST['submit'])){
				$image		= $this->upload_image();
				$image_bg	= $this->upload_image_bg();
				
				$this->Mod_slider->update($image, $image_bg);
				//print_r($this->upload->display_errors()); 
				
				redirect('admin/product_slider');
			}else{
				$id						= $this->uri->segment(4);
				$data['product_slider']	= $this->Mod_slider->edit_slider_by_id($id)->row_array();
				$data['link_product']	= $this->Mod_product->select_all_publish()->result();
				$this->template->load('templateadmin', 'admin/product/slider_product_edit', $data);
			}
		}
		
		function delete(){
			$id = $this->uri->segment(4);
			if(!empty($id)){
				$this->Mod_slider->hapus($id);
			}
			redirect('admin/product_slider');
		}
		
		//================================================================================
		
		function publish(){
			$id 	= $this->uri->segment(4);
			$status	= $this->uri->segment(5);
			if(!empty($id)){
				$this->Mod_slider->publish($id, $status);
			}
			redirect('admin/product_slider');
		}
		
		function upload_image(){
			$config['upload_path']		= "./uploads/slider/";
			$config['allowed_types']	= "jpg|png|jpeg";
			$config['max_size']			= 500; //1mb
			$this->load->library('upload', $config, 'img');
			
			$this->img->do_upload('userfile');
			$upload	= $this->img->data();
			return $upload['file_name'];
		}
		
		function upload_image_bg(){
			$config['upload_path']		= "./uploads/slider/bg/";
			$config['allowed_types']	= "jpg|png|jpeg";
			$config['max_size']			= 500; //1mb
			$this->load->library('upload', $config, 'img_bg');
			
			$this->img_bg->do_upload('userfile_bg');
			$upload	= $this->img_bg->data();
			return $upload['file_name'];
		}
	}
?>