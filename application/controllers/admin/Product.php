<?php
	class Product extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array('Mod_product', 'Mod_kategori'));
			$this->load->library('upload');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		function index(){
			$data['record']	=  $this->Mod_product->select_all()->result();
			$this->template->load('templateadmin', 'admin/product/data', $data);
		}
		
		//================================================================================
		
		function post(){
			if(isset($_POST['submit'])){
				$image	= $this->upload_image();
				$this->Mod_product->simpan($image);
				redirect('admin/product');
				
			}else{
				$data['category']	= $this->Mod_kategori->select_all()->result();
				$this->template->load('templateadmin', 'admin/product/post', $data);
			}
		}
		
		function edit(){
			if(isset($_POST['submit'])){
				$image	= $this->upload_image();
				$this->Mod_product->update($image);
				//print_r($this->upload->display_errors()); 
				redirect('admin/product');
			}else{
				$id						= $this->uri->segment(4);
				$data['row']			= $this->Mod_product->get_product_by_product_id($id)->row_array();
				$data['category']		= $this->Mod_kategori->select_all()->result();
				$data['product_images']	= $this->Mod_product->get_product_image_by_product_id($data['row']['product_id'])->result();
				$this->template->load('templateadmin', 'admin/product/edit', $data);
			}
		}
		
		function delete(){
			$id = $this->uri->segment(4);
			if(!empty($id)){
				$this->Mod_product->hapus($id);
			}
			redirect('admin/product');
		}
		
		function publish(){
			$id 	= $this->uri->segment(4);
			$status	= $this->uri->segment(5);
			if(!empty($id)){
				$this->Mod_product->publish($id, $status);
			}
			redirect('admin/product');
		}
		
		//================================================================================
		
		function post_image_produk(){
			$product_id	= $this->input->post('product_id');
			$image		= $this->upload_image();
			$this->Mod_product->simpan_image_produk($product_id, $image);
			redirect('admin/product/edit/'.$product_id);
		}
		
		function delete_image_produk(){
			$product_id	= $this->uri->segment(4);
			$id			= $this->uri->segment(5);
			if(!empty($id)){
				$this->Mod_product->hapus_image_produk($id);
			}
			redirect('admin/product/edit/'.$product_id);
		}

		//================================================================================
		
		function upload_image2(){
			$config['upload_path']		= "./uploads/produk/";
			$config['allowed_types']	= "jpg|png|jpeg";
			$config['max_size']			= 500; //1mb
			$this->load->library('upload', $config);
			
			$this->upload->do_upload('userfile');
			$upload	= $this->upload->data();
			return $upload['file_name'];
		}
		
		function upload_image(){
			$config['upload_path']		= './uploads/produk/';	//path folder
			$config['allowed_types']	= 'jpg|png|jpeg';		//type yang dapat diakses bisa anda sesuaikan
			$config['max_size']			= 500; //1mb
			//$config['encrypt_name']		= TRUE;				//Enkripsi nama yang terupload
			
			$this->upload->initialize($config);
			if(!empty($_FILES['userfile']['name'])){
				if ($this->upload->do_upload('userfile')){
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./uploads/produk/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					//$config['quality']= '100%';
					$config['width']= 483;
					$config['height']= 395;
					$config['new_image']= './uploads/produk/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					return $gbr['file_name'];
	 			}
			}
		}
	}
?>