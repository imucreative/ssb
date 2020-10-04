<?php
class promo extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('Mod_promo');
		$this->load->model('Mod_kategori_promo');
		$this->load->model('Mod_adv');
		$this->load->library('pagination');
    }
	
	function index(){
		$data['new']				= $this->Mod_promo->select_all_new()->result_array();
		$data['popular']			= $this->Mod_promo->select_all_popular()->result_array();
		$data['promo_all_kategori']	= $this->Mod_kategori_promo->get_promo_all_kategori_by_promo_id()->result_array();
		
		$data['jumlah']				= $this->Mod_promo->select_all(0)->num_rows();
		$config['base_url']			= base_url().'promo/index/';
		$config['total_rows']		= $data['jumlah'];
		$config['per_page']			= 5;
		$from						= $this->uri->segment(3);
		$this->pagination->initialize($config);
		
		$data['promo']				= $this->Mod_promo->select_all($from, $config['per_page'])->result_array();
		$data['adv_side']			= $this->Mod_adv->select_adv_promo()->row();
		
		if($data['jumlah'] == 0){
			$this->template->load('template', 'errors/errorPromo404', $data);
		}else{
			$this->template->load('template', 'promo', $data);
		}
		
	}
	
	function detail(){
		$seo				= $this->uri->segment(3);
		$data['promo']		= $this->Mod_promo->get_promo_by_seo($seo)->row_array();
		$data['category']	= $this->Mod_kategori_promo->get_kategori_promo_by_kategori_promo_id($data['promo']['kategori_id'])->row_array();
		//$data['tags']		= $this->Mod_promo->get_promo_tags_by_promo_id($data['promo']['promo_id'])->result_array();
		$data['promo_img']	= $this->Mod_promo->get_promo_image_by_promo_id($data['promo']['promo_id'])->result_array();
		$data['promo_sama']	= $this->Mod_promo->get_promo_sama_by_kategori_promo_id($data['promo']['kategori_id'], $data['promo']['promo_id'])->result_array();
		$data['jumlah']				= $this->Mod_promo->get_promo_by_seo($seo)->num_rows();
	
		$data['new']				= $this->Mod_promo->select_all_new()->result_array();
		$data['popular']			= $this->Mod_promo->select_all_popular()->result_array();
		$data['promo_all_kategori']	= $this->Mod_kategori_promo->get_promo_all_kategori_by_promo_id()->result_array();	
		$data['adv_side']			= $this->Mod_adv->select_adv_promo_detail()->row();
		
		if($data['jumlah'] == 0){
			$this->template->load('template', 'errors/errorPromo404', $data);
		}else{
			$this->template->load('template', 'promo_detail', $data);
		}
        
    }
	
	function category(){
		$data['seo']				= $this->uri->segment(3);
		
		$category					= $this->Mod_kategori_promo->get_kategori_promo_by_seo($data['seo'])->row_array();
        $kategoriID					= $category['kategori_id'];
		$nama_kategori				= $category['nama_kategori'];
		$data['category']			= $nama_kategori;
		
		$data['new']				= $this->Mod_promo->select_all_new()->result_array();
		$data['popular']			= $this->Mod_promo->select_all_popular()->result_array();
		$data['promo_all_kategori']	= $this->Mod_kategori_promo->get_promo_all_kategori_by_promo_id()->result_array();
		
		$data['jumlah']				= $this->Mod_promo->get_promo_by_kategori_promo_id($kategoriID, 0)->num_rows();
		$config['base_url']			= base_url().'promo/category/'.$data['seo'].'/';
		$config['total_rows']		= $data['jumlah'];
		$config['per_page']			= 5;
		$from						= $this->uri->segment(4);
		$this->pagination->initialize($config);
		
		$data['promo']				= $this->Mod_promo->get_promo_by_kategori_promo_id($kategoriID, $from, $config['per_page'])->result_array();
		$data['adv_side']			= $this->Mod_adv->select_adv_promo()->row();
		
		if($data['jumlah'] == 0){
			$this->template->load('template', 'errors/errorPromo404', $data);
		}else{
			$this->template->load('template', 'promo_kategori', $data);
		}
        
	}

	function search(){
		$keyword					= (trim($this->input->post('key', TRUE))) ? trim($this->input->post('key', TRUE)) : '';
		$keyword					= ($this->uri->segment(3)) ? $this->uri->segment(3) : $keyword;
		$data['keyword']			= $keyword;
		
		$data['jumlah']				= $this->Mod_promo->search($keyword, $from, $config['per_page'])->num_rows();
		$data['new']				= $this->Mod_promo->select_all_new()->result_array();
		$data['popular']			= $this->Mod_promo->select_all_popular()->result_array();
		$data['promo_all_kategori']	= $this->Mod_kategori_promo->get_promo_all_kategori_by_promo_id()->result_array();
		
		$config['base_url']			= base_url().'promo/search/'.$keyword.'/';
		$config['total_rows']		= $data['jumlah'];
		$config['per_page']			= 5;
		$from						= $this->uri->segment(4);
		$this->pagination->initialize($config);
		
		$data['promo']				= $this->Mod_promo->search($keyword, $from, $config['per_page'])->result_array();
		$data['adv_side']			= $this->Mod_adv->select_adv_promo()->row();
		
		//if($data['jumlah'] == 0){
			//$this->template->load('template', 'errors/errorPromo404', $data);
		//}else{
			$this->template->load('template', 'promo_search', $data);
		//}
	}
	
}
