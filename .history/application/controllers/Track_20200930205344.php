<?php

class Track extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->model('Mod_shipment');
		$this->load->library('pagination');
    }
    
    function index(){
		$this->template->load('template', 'track');
        /*$seo				=  $this->uri->segment(3);
		$category			= $this->Mod_kategori->get_kategori_by_seo($seo)->row_array();
        $kategoriID			= $category['kategori_id'];
		$nama_kategori		= $category['nama_kategori'];
        
		$data['jumlah']				= $this->Mod_product->get_product_by_kategori_id($kategoriID, 0, 8)->num_rows();
		$config['base_url']			= base_url().'category/index/'.$seo.'/';
		$config['total_rows']		= $data['jumlah'];
		$config['per_page']			= 8;
		$from						= $this->uri->segment(4);
		$this->pagination->initialize($config);
		
		$data['product']	= $this->Mod_product->get_product_by_kategori_id($kategoriID, $from, $config['per_page'])->result();
		$data['category']	= $nama_kategori;
		
		if($data['jumlah'] == 0){
			$this->template->load('template', 'errors/error404');
		}else{
			$this->template->load('template', 'showByKategori', $data);
		}*/
	}
	
	function shipment(){
		$data['code']	= $this->input->post('code');
		$data['track']	= $this->Mod_shipment->get_shipment_by_code($data['code'])->row_array();
		print_r(data['track']);
		die();
		$this->template->load('template', 'trackShipment', $data);
	}
}

