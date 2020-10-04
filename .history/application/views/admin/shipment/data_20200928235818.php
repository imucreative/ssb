	<div class="col-md-12">
		<!-- start: DYNAMIC TABLE PANEL -->
	   
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i> List Shipment
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-expand"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<div class='table-responsive'>
					<table id="mytable" class="table table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width='5%'><center>NO</center></th>
								<th width='10%'><center>CODE</center></th>
								<th width='10%'><center>DATE OF SHIPMENT</center></th>
								<th width='15%'><center>LOCATION</center></th>
								<th width='15%'><center>CONSIGNEE</center></th>
								<th width='20%'><center>DESCRIPTION</center></th>
								<th width='10%'><center>STATUS</center></th>
								<th width='10%'>
									<center>
										<?php echo anchor('admin/shipment/post','<i class="fa fa-plus" aria-hidden="true"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' data-original-title='Input'");?>
									</center>
								</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
								$no=1;
								foreach ($shipment as $r){
									$shipHistory = $this->Mod_shipment->get_shipment_history_by_shipment_id($r->shipment_id)->row_array();
									//print_r($shipHistory);
									//if(($shipHistory['status'] != "DELIVERY")&&($shipHistory['status'] != "COMPLETE")){
										$edit	= anchor('admin/shipment/edit/'.$r->shipment_id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit" title="Edit"');
										$delete	= anchor("admin/shipment/delete/".$r->shipment_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"]);
									//}else{
									//	$edit	= "";
									//	$delete	= "";
									//}

									if($r->file){
										$download	= anchor(base_url()."admin/shipment/download/".$r->file, "<i class='clip-download'></i>", ["class"=>"btn btn-xs btn-info tooltips", "data-placement"=>'top', "data-original-title"=>'Download File', "title"=>'Download File']);
									}else{
										$download	= "";
									}

									echo "<tr>
										<td align='center'>".$no."</td>
										<td align='center'>".strtoupper($r->code)."</td>
										<td align='center'>".$r->date_of_shipment."</td>
										<td align='left'>".strtoupper($r->to_location)."</td>
										<td align='center'>".strtoupper($r->consignee)."</td>
										<td align='left'>".
											$shipHistory['description']
										."</td>
										<td align='center'>".
											$shipHistory['status']
										."</td>

										<td align='center'>".
										
											$edit.$delete.$download
																						
										."</td>
										
									</tr>";
									$no++;
								}
							?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>

<style>
	.btn{
		margin-right: 5px;
	}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
	$(document).ready(function() {
		$('#mytable').DataTable();
	} );
</script>