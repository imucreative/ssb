<?php
	class Mod_product extends CI_Model{
		
		public $table_produk	= "tbl_product";
		public $table_prod_img	= "tbl_product_image";
		public $table_kategori	= "tbl_product_kategori";
		
		//produk
		function simpan($gambar){
			$data = array(
				'tgl_input'			=> date('Y-m-d'),
				'nama_product'		=> strtoupper($this->input->post('nama_product')),
				'nama_product_seo'	=> seo_title($this->input->post('nama_product')),
				'keterangan'		=> $this->input->post('keterangan'),
				'harga'				=> $this->input->post('harga'),
				'kategori_id'		=> $this->input->post('kategori_id'),
				'image'				=> $gambar
			);
			$this->db->insert($this->table_produk, $data);
			$product_id = $this->db->insert_id();
			
			//sekalian images
			$data = array(
				'nama_image'	=> strtoupper($this->input->post('nama_product')),
				'image'			=> $gambar,
				'product_id'	=> $product_id
			);
			$this->db->insert($this->table_prod_img, $data);
		}
		
		function update($gambar){
			if($gambar == null){
				$data = array(
					'nama_product'		=> strtoupper($this->input->post('nama_product')),
					'nama_product_seo'	=> seo_title($this->input->post('nama_product')),
					'keterangan'		=> $this->input->post('keterangan'),
					'harga'				=> $this->input->post('harga'),
					'kategori_id'		=> $this->input->post('kategori_id')
				);
			}else{
				$data = array(
					'nama_product'		=> strtoupper($this->input->post('nama_product')),
					'nama_product_seo'	=> seo_title($this->input->post('nama_product')),
					'keterangan'		=> $this->input->post('keterangan'),
					'harga'				=> $this->input->post('harga'),
					'kategori_id'		=> $this->input->post('kategori_id'),
					'image'				=> $gambar
				);
			}
			$this->db->where('product_id', $this->input->post('id'));
			$this->db->update($this->table_produk, $data);
		}
		
		function hapus($id){
			$data = array(
				'status_delete'    => "1"
			);
			$this->db->where('product_id', $id);
			$this->db->update($this->table_produk, $data);
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
			
			$this->db->where('product_id', $id);
			$this->db->update($this->table_produk, $data);
		}
		
		//==========================================================
		
		//produk images
		function simpan_image_produk($product_id, $image){
			$data = array(
				'nama_image'	=> strtoupper($this->input->post('nama_image')),
				'product_id'	=> $product_id,
				'image'			=> $image
			);
			$this->db->insert($this->table_prod_img, $data);
		}
		
		function hapus_image_produk($id){
			$data = array(
				'status_delete'    => "1"
			);
			$this->db->where('image_id', $id);
			$this->db->update($this->table_prod_img, $data);
		}
		
		
		//======================================================================================
		
		
		//produk
		function select_all(){
			$query	= "SELECT tp.product_id, tp.nama_product, tp.harga, tk.nama_kategori, tp.tgl_input, tp.publish
				FROM tbl_product AS tp, tbl_product_kategori AS tk 
				WHERE tp.kategori_id=tk.kategori_id AND tp.status_delete='0'
				ORDER BY tk.nama_kategori, tp.nama_product";
			$select	= $this->db->query($query);
			return $select;
		}
		
		function select_all_publish(){
			$query	= "SELECT tp.product_id, tp.nama_product, tp.harga, tk.nama_kategori, tp.tgl_input, tp.publish, tp.nama_product_seo
				FROM tbl_product AS tp, tbl_product_kategori AS tk 
				WHERE tp.kategori_id=tk.kategori_id AND tp.status_delete='0' AND tp.publish='1' AND tp.display_in_home='0'
				ORDER BY tk.nama_kategori, tp.nama_product";
			$select	= $this->db->query($query);
			return $select;
		}
		
		//display edit
		function get_product_by_product_id($product_id){
			$this->db->where('status_delete', 0);
			$this->db->where('product_id', $product_id);
			$query		= $this->db->get($this->table_produk);
			return $query;
		}
		
		function search($key, $offset, $number){
			$this->db->where('status_delete', 0);
			$this->db->where('publish', 1);
			$this->db->like('nama_product', $key);
			$this->db->offset($offset);
			$this->db->limit($number);
			$query	= $this->db->get($this->table_produk);
			return $query;
		}
		
		function get_product_sama_by_kategori_id($kategori_id, $product_id){
			$this->db->where('product_id !=', $product_id);
			$this->db->where('status_delete', 0);
			$this->db->where('publish', 1);
			$this->db->limit(4);
			$this->db->order_by('rand()');
			$this->db->where('kategori_id', $kategori_id);
			$query		= $this->db->get($this->table_produk);
			return $query;
		}
		
		function get_product_by_kategori_id($kategori_id, $offset, $number){
			$this->db->where('status_delete', 0);
			$this->db->where('publish', 1);
			$this->db->where('kategori_id', $kategori_id);
			$this->db->offset($offset);
			$this->db->limit($number);
			$query		= $this->db->get($this->table_produk);
			return $query;
		}
		
		function get_product_by_seo($seo){
			$this->db->where('status_delete', 0);
			$this->db->where('nama_product_seo', $seo);
			$this->db->where('publish', 1);
			$query		= $this->db->get($this->table_produk);
			return $query;
		}
		
		
//=======================================================================================================================================


		//produk images
		function get_product_image_by_product_id($product_id){
			$this->db->where('status_delete', 0);
			$this->db->where('product_id', $product_id);
			$query		= $this->db->get($this->table_prod_img);
			return $query;
		}
		
		//widget
		function hapus_widget1($id){
			$data = array(
				'display_in_home'    => "0"
			);
			$this->db->where('product_id', $id);
			$this->db->update($this->table_produk, $data);
		}
		
		function post_widget1(){
			$id	= $this->input->post('widget');
			$data = array(
				'display_in_home'    => "1"
			);
			$this->db->where('product_id', $id);
			$this->db->update($this->table_produk, $data);
		}
		
		function post_widget2(){
			$id	= $this->input->post('widget');
			$data = array(
				'display_in_home'    => "2"
			);
			$this->db->where('product_id', $id);
			$this->db->update($this->table_produk, $data);
		}
		
		function post_widget3(){
			$id	= $this->input->post('widget');
			$data = array(
				'display_in_home'    => "3"
			);
			$this->db->where('product_id', $id);
			$this->db->update($this->table_produk, $data);
		}
	}
?>