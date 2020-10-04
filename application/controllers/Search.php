<?php
class search extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model('Mod_product');
		$this->load->model('Mod_kategori');
		$this->load->library('pagination');
    }
		
	function index(){
		
		$keyword			= (trim($this->input->post('key', TRUE))) ? trim($this->input->post('key', TRUE)) : '';
		$keyword			= ($this->uri->segment(3)) ? $this->uri->segment(3) : $keyword;
		$data['keyword']	= $keyword;
		
		$data['jumlah']		= $this->Mod_product->search($keyword, 0, 8)->num_rows();
		$data['category']	= $this->Mod_kategori->select_all()->result_array();
		
		$config['base_url']			= base_url().'search/index/'.$keyword.'/';
		$config['total_rows']		= $data['jumlah'];
		$config['per_page']			= 9;
		$from						= $this->uri->segment(4);
		$this->pagination->initialize($config);
		
		$data['product']	= $this->Mod_product->search($keyword, $from, $config['per_page'])->result_array();
		
		$this->template->load('template', 'hasilPencarian', $data);
	}
}