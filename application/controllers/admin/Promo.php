<?php
	class Promo extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array('Mod_promo', 'Mod_kategori_promo'));
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		function index(){
			$data['record']	=  $this->Mod_promo->select_all_admin()->result();
			$this->template->load('templateadmin', 'admin/promo/data', $data);
		}
		
		//================================================================================
		
		function post(){
			if(isset($_POST['submit'])){
				$image	= $this->upload_image();
				$this->Mod_promo->simpan($image);
				redirect('admin/promo');
				
			}else{
				$data['category']	= $this->Mod_kategori_promo->select_all()->result();
				$this->template->load('templateadmin', 'admin/promo/post', $data);
			}
		}
		
		function edit(){
			if(isset($_POST['submit'])){
				$this->Mod_promo->update();
				//print_r($this->upload->display_errors()); 
				redirect('admin/promo');
			}else{
				$id						= $this->uri->segment(4);
				$data['row']			= $this->Mod_promo->get_promo_by_promo_id($id)->row_array();
				$data['category']		= $this->Mod_kategori_promo->select_all()->result();
				$data['promo_images']	= $this->Mod_promo->get_promo_image_by_promo_id($data['row']['promo_id'])->result();
				$this->template->load('templateadmin', 'admin/promo/edit', $data);
			}
		}
		
		function delete(){
			$id = $this->uri->segment(4);
			if(!empty($id)){
				$this->Mod_promo->hapus($id);
			}
			redirect('admin/promo');
		}
		
		function publish(){
			$id 	= $this->uri->segment(4);
			$status	= $this->uri->segment(5);
			if(!empty($id)){
				$this->Mod_promo->publish($id, $status);
			}
			redirect('admin/promo');
		}
		
		//================================================================================
		
		function post_image_promo(){
			$promo_id	= $this->input->post('promo_id');
			$image		= $this->upload_image();
			$this->Mod_promo->simpan_image_promo($promo_id, $image);
			redirect('admin/promo/edit/'.$promo_id);
		}
		
		function delete_image_promo(){
			$promo_id	= $this->uri->segment(4);
			$id			= $this->uri->segment(5);
			if(!empty($id)){
				$this->Mod_promo->hapus_image_promo($id);
			}
			redirect('admin/promo/edit/'.$promo_id);
		}
		
		//================================================================================
		
		function upload_image(){
			$config['upload_path']		= "./uploads/promo/";
			$config['allowed_types']	= "jpg|png|jpeg";
			$config['max_size']			= 1024; //1mb
			$this->load->library('upload', $config);
			
			$this->upload->do_upload('userfile');
			$upload	= $this->upload->data();
			return $upload['file_name'];
		}
	}
?>