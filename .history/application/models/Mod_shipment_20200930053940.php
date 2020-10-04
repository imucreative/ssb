<?php
	class Mod_shipment extends CI_Model{
		
		private $shipment	= "tbl_shipment";
		private $shipment_history	= "tbl_shipment_history";
		
		//produk
		function simpan($gambar, $userId){
			$dataShipment = array(
				'date_of_shipment'	=> $this->input->post('date_of_shipment'),
				'code'				=> strtoupper($this->input->post('code')),
				'to_location'		=> strtoupper($this->input->post('to_location')),
				'consignee'			=> strtoupper($this->input->post('consignee')),
				'file'				=> $gambar,
				'description'	=> strtoupper($this->input->post('description')),
				'status'		=> "PROGRESS",
				'date_time'			=> date('Y-m-d H:i:s'),
			);
			$this->db->insert($this->shipment, $dataShipment);
			$shipmentId = $this->db->insert_id();
			
			//sekalian historynya
			$dataShipmentHistory = array(
				'date_history'	=> date('Y-m-d H:i:s'),
				'description'	=> strtoupper($this->input->post('description')),
				'status'		=> "PROGRESS",
				'shipment_id'	=> $shipmentId,
				'user_id'		=> $userId
			);
			$this->db->insert($this->shipment_history, $dataShipmentHistory);
		}
	



		function update($gambar){
			if($gambar == null){
				$data = array(
					'code'				=> strtoupper($this->input->post('code')),
					'date_of_shipment'	=> $this->input->post('date_of_shipment'),
					'to_location'		=> strtoupper($this->input->post('to_location')),
					'consignee'			=> strtoupper($this->input->post('consignee'))
				);
			}else{
				$data = array(
					'code'				=> strtoupper($this->input->post('code')),
					'date_of_shipment'	=> $this->input->post('date_of_shipment'),
					'to_location'		=> strtoupper($this->input->post('to_location')),
					'consignee'			=> strtoupper($this->input->post('consignee')),
					'file'				=> $gambar
				);
			}
			$this->db->where('shipment_id', $this->input->post('shipment_id'));
			$this->db->update($this->shipment, $data);
		}
		
		function hapus($id){
			$data = array(
				'status_delete'    => "1"
			);

			$this->db->where('shipment_id', $id);
			$this->db->update($this->shipment, $data);

			$this->db->where('shipment_id', $id);
			$this->db->update($this->shipment_history, $data);
		}
		
		//==========================================================
		
		//shipment
		function select_all(){
			/*$query	= "SELECT ship.*, ship_history.*
				FROM tbl_shipment AS ship, tbl_shipment_history AS ship_history 
				WHERE ship.shipment_id = ship_history.shipment_id AND ship.status_delete='0' AND ship_history.status_delete='0' AND ship_history.status!='COMPLETE'
				GROUP BY ship.shipment_id
				ORDER BY ship.shipment_id DESC";
			$select	= $this->db->query($query);
			return $select;*/

			$this->db->where('status_delete', 0);
			$this->db->where('status!=', "COMPLETE");
			$this->db->order_by('shipment_id', 'desc');
			$query		= $this->db->get($this->shipment);
			return $query;
		}

		function select_all_complete(){
			$query	= "SELECT ship.*, ship_history.*
				FROM tbl_shipment AS ship, tbl_shipment_history AS ship_history 
				WHERE ship.shipment_id = ship_history.shipment_id AND ship.status_delete='0' AND ship_history.status_delete='0' AND ship_history.status='COMPLETE'
				GROUP BY ship.shipment_id
				ORDER BY ship.shipment_id DESC";
			$select	= $this->db->query($query);
			return $select;
		}
		
		//display edit
		function get_shipment_by_shipment_id($shipment_id){
			$this->db->where('status_delete', 0);
			$this->db->where('shipment_id', $shipment_id);
			$query		= $this->db->get($this->shipment);
			return $query;
		}

		function get_shipment_history_by_shipment_id($shipment_id){
			$this->db->where('status_delete', 0);
			$this->db->where('shipment_id', $shipment_id);
			$this->db->order_by('id', 'desc');
			$query		= $this->db->get($this->shipment_history);
			return $query;
		}

		
		
		
		//=======================================================================================================================================

		//shipment status/ history
		function save_shipment_history($shipmentId, $userId){
			$data = array(
				'shipment_id'	=> $shipmentId,
				'user_id'		=> $userId,
				'status'		=> strtoupper($this->input->post('status')),
				'description'	=> strtoupper($this->input->post('description')),
				'date_history'	=> date('Y-m-d H:i:s'),
			);
			$this->db->insert($this->shipment_history, $data);

			$dataShipment = array(
				'status'		=> strtoupper($this->input->post('status')),
				'description'	=> strtoupper($this->input->post('description')),
			);
			
			$this->db->where('shipment_id', $shipmentId);
			$this->db->update($this->shipment, $dataShipment);
		}

		function delete_shipment_status($shipmentId, $id){
			$data = array(
				'status_delete'    => "1"
			);
			$this->db->where('id', $id);
			$this->db->update($this->shipment_history, $data);

			$lastShipment = $this->get_shipment_history_by_shipment_id($shipmentId)->row_array();
			$dataShipment = array(
				'status'		=> $lastShipment['status'],
				'description'	=> $lastShipment['description'],
			);
			$this->db->where('shipment_id', $shipmentId);
			$this->db->update($this->shipment, $dataShipment);
		}

		//======================================================================================

	}
?>
