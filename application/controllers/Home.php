<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mod_front');
		$this->load->model('Mod_promo');
		$this->load->model('Mod_kategori_promo');
		$this->load->model('Mod_distributor');
		$this->load->model('Mod_adv');
    }

    function index() {
        $data['slider']				= $this->Mod_front->get_slider()->result();
		$data['widget1']			= $this->Mod_front->get_widget1()->result();
		$data['widget2']			= $this->Mod_front->get_widget2()->result();
		$data['widget3']			= $this->Mod_front->get_widget3()->result();
		$data['total_distributor']	= $this->Mod_distributor->select_all()->num_rows();
		$limit_distributor			= ceil($data['total_distributor']/4);
		//print_r(ceil($limit_distributor));
		//die();
		$data['distributor']		= $this->Mod_front->get_distributor()->result();
		$data['promo']				= $this->Mod_front->get_promo()->result();
		$data['adv_bottom']			= $this->Mod_adv->select_adv_bottom()->row();
		
        $this->template->load('template', 'home', $data);
    }

}