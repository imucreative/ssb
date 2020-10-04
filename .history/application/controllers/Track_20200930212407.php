<?php

class Track extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->model(array('Mod_shipment', 'Mod_user'));
		$this->load->library('pagination');
    }
    
    function index(){
		$this->template->load('template', 'track');
	}
	
	function shipment(){
		$data['code']				= $this->input->post('code');
		$data['track']				= $this->Mod_shipment->get_shipment_by_code($data['code'])->row_array();
		print_r($data['track']);
		die();

		if($data['track']){
			$data['shipment_history']	= $this->Mod_shipment->get_shipment_history_by_shipment_id($data['track']['shipment_id'])->result();
			$this->template->load('template', 'trackShipment', $data);
		}else{

		}
		
	}
}

