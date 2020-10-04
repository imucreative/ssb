<?php
class Mod_promo extends CI_Model{
	
	public $table_promo			= "tbl_promo";
	public $table_promo_tags		= "tbl_promo_tags";
	public $table_promo_img		= "tbl_promo_image";
	public $table_promo_kategori	= "tbl_promo_kategori";
	
	function simpan($gambar){
		$data	= array(
			'tgl_input'			=> date('Y-m-d'),
			'judul_promo'		=> strtoupper($this->input->post('judul_promo')),
			'judul_promo_seo'	=> seo_title($this->input->post('judul_promo')),
			'kategori_id'		=> $this->input->post('kategori_id'),
			'deskripsi'			=> strtoupper($this->input->post('deskripsi')),
			'user_id'			=> $this->session->userdata('user_id')
		);
		$this->db->insert($this->table_promo, $data);
		$promo_id = $this->db->insert_id();
		
		$data = array(
			'nama_image'	=> strtoupper($this->input->post('judul_promo')),
			'image'			=> $gambar,
			'promo_id'		=> $promo_id
		);
		$this->db->insert($this->table_promo_img, $data);
	}
    
	function update(){
		$data	= array(
			//'tgl_input'			=> date('Y-m-d'),
			'judul_promo'		=> strtoupper($this->input->post('judul_promo')),
			'judul_promo_seo'	=> seo_title($this->input->post('judul_promo')),
			'kategori_id'		=> $this->input->post('kategori_id'),
			'deskripsi'			=> strtoupper($this->input->post('deskripsi'))
		);
		$this->db->where('promo_id', $this->input->post('promo_id'));
		$this->db->update($this->table_promo, $data);
	}
	
	function hapus($promo_id){
		$data	= array(
			'status_delete'	=> 1
		);
		$this->db->where('promo_id', $promo_id);
		$this->db->update($this->table_promo, $data);
	}
	
	function publish($id, $status){
		if($status=='1'){
			$data = array(
				'publish'    => "0"	//jika publish, maka ubah jadi 0/draft
			);
		}else{
			$data = array(
				'publish'    => "1"	//jika draft, maka ubah jadi 1/publish
			);
		}
		
		$this->db->where('promo_id', $id);
		$this->db->update($this->table_promo, $data);
	}
	
	//==================================================================================================
	
	function select_all($offset, $number){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->offset($offset);
		$this->db->limit($number);
		$this->db->order_by('tgl_input', 'desc');
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function select_all_admin(){
		$this->db->where('status_delete', 0);
		$this->db->order_by('tgl_input', 'desc');
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function select_all_new(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->order_by('tgl_input', 'desc');
		$this->db->limit('5');
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function select_all_popular(){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->order_by('rand()');
		$this->db->limit('5');
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function get_promo_by_promo_id($promo_id){
		$this->db->where('status_delete', 0);
		$this->db->where('promo_id', $promo_id);
		$query	= $this->db->get($this->table_promo);
		return $query;
	}
	
	function get_promo_by_kategori_promo_id($kategori_id, $offset, $number){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->where('kategori_id', $kategori_id);
		$this->db->offset($offset);
		$this->db->limit($number);
		$this->db->order_by('tgl_input', 'desc');
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function get_promo_by_seo($seo){
		$this->db->where('status_delete', 0);
		$this->db->where('judul_promo_seo', $seo);
		$this->db->where('publish', 1);
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function get_promo_sama_by_kategori_promo_id($kategori_id, $promo_id){
		$this->db->where('promo_id !=', $promo_id);
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->limit(5);
		$this->db->order_by('rand()');
		$this->db->where('kategori_id', $kategori_id);
		$query		= $this->db->get($this->table_promo);
		return $query;
	}
	
	function search($key, $offset, $number){
		$this->db->where('status_delete', 0);
		$this->db->where('publish', 1);
		$this->db->like('judul_promo', $key);
		$this->db->offset($offset);
		$this->db->limit($number);
		$this->db->order_by('tgl_input', 'desc');
		$query	= $this->db->get($this->table_promo);
		return $query;
	}
	
	//==================================================================================================
	
	//produk images
	function get_promo_image_by_promo_id($promo_id){
		$this->db->where('status_delete', 0);
		$this->db->where('promo_id', $promo_id);
		$query		= $this->db->get($this->table_promo_img);
		return $query;
	}
	
	function simpan_image_promo($promo_id, $image){
		$data = array(
			'nama_image'	=> strtoupper($this->input->post('nama_image')),
			'promo_id'		=> $promo_id,
			'image'			=> $image
		);
		$this->db->insert($this->table_promo_img, $data);
	}
	
	function hapus_image_promo($id){
		$data = array(
			'status_delete'    => "1"
		);
		$this->db->where('image_id', $id);
		$this->db->update($this->table_promo_img, $data);
	}
	
	//==================================================================================================
	
	//kategori promo
	
	function get_kategori_by_kategori_promo_id($kategori_id){
		$this->db->where('status_delete', 0);
		$this->db->where('kategori_id', $kategori_id);
		$query		= $this->db->get($this->table_promo_kategori);
		return $query;
	}
}