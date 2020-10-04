<?php
	class Shipment extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array('Mod_shipment', 'Mod_user'));
			$this->load->library('upload');
			$this->load->helper(array('download'));
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		function index(){
			$data['shipment']			=  $this->Mod_shipment->select_all()->result();
			$this->template->load('templateadmin', 'admin/shipment/data', $data);
		}
		
		//================================================================================

		function post(){
			$image	= $this->upload_image();
			$userId = $this->session->userdata('user_id');
			$data['error']	= "";

			if(isset($_POST['submit'])){
				if($image){
					$this->Mod_shipment->simpan($image, $userId);
					redirect('admin/shipment');
				}else{
					$data['error']	= "Error Upload Data, Please upload image/doc and max file size not more than 1Mb";
					$this->template->load('templateadmin', 'admin/shipment/post', $data);
				}
			}else{
				$this->template->load('templateadmin', 'admin/shipment/post', $data);
			}
		}

		function edit(){
			$id							= $this->uri->segment(4);
			$image	= $this->upload_image();
			$data['error']				= "";
			$data['row']				= $this->Mod_shipment->get_shipment_by_shipment_id($id)->row_array();
			$data['shipment_history']	= $this->Mod_shipment->get_shipment_history_by_shipment_id($data['row']['shipment_id'])->result();
			$data['user_id']			= $this->session->userdata('user_id');
			
			if(isset($_POST['submit'])){
				

				if($image){
					$this->Mod_shipment->update($image);
					//print_r($this->upload->display_errors()); 
					redirect('admin/shipment');
				}else{
					$data['error']	= "Error Upload Data, Please upload image/doc and max file size not more than 1Mb";
					$this->template->load('templateadmin', "admin/shipment/edit/'".$id."'", $data);
				}
			}else{
				$this->template->load('templateadmin', 'admin/shipment/edit', $data);
			}
		}
		
		function delete(){
			$id = $this->uri->segment(4);
			if(!empty($id)){
				$this->Mod_shipment->hapus($id);
			}
			redirect('admin/shipment');
		}
		
		//================================================================================
		
		function post_shipment_history(){
			$link		= $this->uri->segment(4);
			$shipment_id	= $this->input->post('shipment_id');
			$userId 		= $this->session->userdata('user_id');
			$this->Mod_shipment->save_shipment_history($shipment_id, $userId);
			
			if($link == 'status'){
				redirect('admin/shipment/status_detail/'.$shipment_id);
			}else{
				redirect('admin/shipment/edit/'.$shipment_id);
			}
			
		}
		
		function delete_shipment_history(){
			$link		= $this->uri->segment(4);
			$shipmentId	= $this->uri->segment(5);
			$id			= $this->uri->segment(6);
			if(!empty($id)){
				$this->Mod_shipment->delete_shipment_status($shipmentId, $id);
			}
			
			if($link == 'status'){
				redirect('admin/shipment/status_detail/'.$shipmentId);
			}else{
				redirect('admin/shipment/edit/'.$shipmentId);
			}
			
		}

		function download(){
			$fileName	= $this->uri->segment(4);
			//print_r($fileName);
			force_download('uploads/shipment/'.$fileName, NULL);
		}

		function remove_file(){
			$shipmentId	= $this->uri->segment(4);
			$this->Mod_shipment->remove_file($shipmentId);
			
			redirect('admin/shipment/edit/'.$shipmentId);
		}

		//================================================================================

		function status(){
			$data['shipment']			=  $this->Mod_shipment->select_all()->result();
			$this->template->load('templateadmin', 'admin/shipment/status', $data);
		}

		function status_detail(){
			$id							= $this->uri->segment(4);
			$data['row']				= $this->Mod_shipment->get_shipment_by_shipment_id($id)->row_array();
			$data['shipment_history']	= $this->Mod_shipment->get_shipment_history_by_shipment_id($data['row']['shipment_id'])->result();
			$data['user_id']			= $this->session->userdata('user_id');
			$this->template->load('templateadmin', 'admin/shipment/status_detail', $data);
		}

		//================================================================================
		
		function list_shipment(){
			$data['shipment']			=  $this->Mod_shipment->select_all_complete()->result();
			//print_r("<br/><br/><br/><br/>".$this->db->last_query());
			$this->template->load('templateadmin', 'admin/shipment/list', $data);
		}

		function list_detail(){
			$id							= $this->uri->segment(4);
			$data['row']				= $this->Mod_shipment->get_shipment_by_shipment_id($id)->row_array();
			$data['shipment_history']	= $this->Mod_shipment->get_shipment_history_by_shipment_id($data['row']['shipment_id'])->result();
			$data['user_id']			= $this->session->userdata('user_id');
			$this->template->load('templateadmin', 'admin/shipment/list_detail', $data);
		}

		//================================================================================
		
		function upload_image2(){
			$config['upload_path']		= "./uploads/shipment/";
			$config['allowed_types']	= "jpg|png|jpeg|pdf|doc|docs|xls|xlsx|ppt|ppts";
			$config['max_size']			= 500; //1mb
			$this->load->library('upload', $config);
			
			$this->upload->do_upload('userfile');
			$upload	= $this->upload->data();
			return $upload['file_name'];
		}
		
		function upload_image(){
			$config['upload_path']		= './uploads/shipment/';	//path folder
			$config['allowed_types']	= 'jpg|png|jpeg|pdf|doc|docs|xls|xlsx|ppt|ppts';		//type yang dapat diakses bisa anda sesuaikan
			$config['max_size']			= 500; //1mb
			//$config['encrypt_name']		= TRUE;				//Enkripsi nama yang terupload
			
			$this->upload->initialize($config);
			if(!empty($_FILES['userfile']['name'])){
				if ($this->upload->do_upload('userfile')){
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./uploads/shipment/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					//$config['quality']= '100%';
					//$config['width']= 483;
					//$config['height']= 395;
					$config['new_image']= './uploads/shipment/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					return $gbr['file_name'];
	 			}
			}
		}
	}
?>
