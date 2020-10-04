<?php
class product extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('Mod_product');
		$this->load->model('Mod_kategori');
    }
	
	function detail(){
		$seo	= $this->uri->segment(2);
		
		$data['product']			= $this->Mod_product->get_product_by_seo($seo)->row_array();
		$data['jumlah']				= $this->Mod_product->get_product_by_seo($seo)->num_rows();
		$data['category']			= $this->Mod_kategori->get_kategori_by_kategori_id($data['product']['kategori_id'])->row_array();
		
		//$data['tags']				= $this->Mod_product->get_product_tags_by_product_id($data['product']['product_id'])->result_array();
		$data['product_img']		= $this->Mod_product->get_product_image_by_product_id($data['product']['product_id'])->result_array();
		$data['product_sama']		= $this->Mod_product->get_product_sama_by_kategori_id($data['product']['kategori_id'], $data['product']['product_id'])->result_array();
		
		if($data['jumlah'] == 0){
			$this->template->load('template', 'errors/error404', $data);
		}else{
			$this->template->load('template', 'detail_product', $data);
		}
    }
	
}