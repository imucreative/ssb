<?php
	class Distributor extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mod_distributor');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		
		function index(){
			$data['record']=  $this->Mod_distributor->select_all()->result();
			$this->template->load('templateadmin', 'admin/distributor/data', $data);
		}
		
		//==================================================================================================
		
		function post(){
			if(isset($_POST['submit'])){
				$image		= $this->upload_image();
				$this->Mod_distributor->simpan($image);
				redirect('admin/distributor');
			}else{
				$this->template->load('templateadmin','admin/distributor/post');
			}
		}
		
		
		function edit(){
			if(isset($_POST['submit'])){
				$image		= $this->upload_image();
				$this->Mod_distributor->update($image);
				redirect('admin/distributor');
			}else{
				$distributor_id		= $this->uri->segment(4);
				$data['row']		= $this->Mod_distributor->get_distributor_by_id($distributor_id)->row_array();
				$this->template->load('templateadmin', 'admin/distributor/edit', $data);
			}
		}
		
		function delete(){
			$distributor_id = $this->uri->segment(4);
			if(!empty($distributor_id)){
				$this->Mod_distributor->hapus($distributor_id);
			}
			redirect('admin/distributor');
		}
		
		//==================================================================================================
		
		function upload_image(){
			$config['upload_path']		= "./uploads/distributor/";
			$config['allowed_types']	= "jpg|png|jpeg";
			$config['max_size']			= 1024; //1mb
			$this->load->library('upload', $config);
			
			$this->upload->do_upload('userfile');
			$upload	= $this->upload->data();
			return $upload['file_name'];
		}
		
	}