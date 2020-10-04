<?php
	class Auth extends CI_Controller{
		
		public $table	= "tbl_users";
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mod_user');
		}
		
		function index(){
			if(isset($_POST['submit'])){
				// proses login
				$username	= $this->input->post('username');
				$password	= $this->input->post('password');
				//$chek		= $this->db->get_where($this->table, array('username'=>$username, 'password'=>md5($password)));
				$chek		= $this->Mod_user->chek_login($username, $password);
				if($chek->num_rows() > 0){
					$this->session->set_userdata($chek->row_array());
					redirect('admin/product');
				}else{
					$this->load->view('admin/login');
				}
			}else{
				$this->load->view('admin/login');
			}
		}
		
		function logout(){
			$this->session->sess_destroy();
			redirect('admin/auth');
		}

		
		
		
	}
	