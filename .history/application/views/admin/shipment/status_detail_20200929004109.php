<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-external-link-square"></i>Detail Shipment
			<div class="panel-tools">
				<a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
			</div>
		</div>
		<div class="panel-body">
			
			<table class="table">
				<?php
					echo form_open_multipart('admin/shipment/edit');
					echo form_hidden('shipment_id', $row['shipment_id']);
				?>
					
					
					<tr>
						<td class="col-sm-6" >
							<div align='right' class="col-sm-3">
								<label class="control-label" for="form-field-1">CODE <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="form-field-1" placeholder="" name="code" value="<?php echo $row['code'];?>" readonly required  />
							</div>
						</td>
						<td class="col-sm-6" >
							<div align='right' class="col-sm-3">
								<label class="control-label" for="form-field-2">DATE <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-9">
								<div class="input-group">
									<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" class="form-control date-picker" id="form-field-2" placeholder="" name="date_of_shipment" value="<?php echo $row['date_of_shipment'];?>" readonly required />
									<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
								</div>
								
							</div>
						</td>
					</tr>
					
					<tr>
						<td  >
							<div align='right' class="col-sm-3">
								<label class="control-label" for="form-field-3">LOCATION <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="form-field-2" placeholder="" name="to_location" value="<?php echo $row['to_location'];?>" readonly required />
							</div>
						</td>
						<td >
							<div align='right' class="col-sm-3">
								<label class="control-label" for="form-field-3">CONSIGNEE <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="form-field-2" placeholder="" name="consignee" value="<?php echo $row['consignee'];?>" readonly required />
							</div>
						</td>
					</tr>
					
					

					<tr>
						<td  >
							
						</td>
						<td >
							<div align='right' class="col-sm-3">
								<label class="control-label" for="form-field-6">FILE </label>
							</div>
							<div class="col-sm-9">
								
								<div class="input-group">
								<input type="text" class="form-control"  name="userfile" value="<?php echo $row['file'];?>" readonly />
									<span class="input-group-addon"> 
										<?php
											if($row['file']!=""){
												
												echo "<a href='".base_url()."admin/shipment/download/".$row['file']."' class='tooltips' data-placement='top' data-original-title='Download File' title='Download File'>
													<i class='fa fa-download'></i>
												</a>";
										
											}
										?>
									</span>
								</div>
								
								
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' colspan="2">
							<div class="col-sm-12">
								<?php
									echo anchor('admin/shipment/status', "<i class='fa fa-arrow-left'></i> BACK",array('class'=>'btn btn-info btn-sm'));
								?>
							</div>
						</td>
					</tr>
				</form>
			</table>
					
		</div>
		
	</div>



	<div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>Shipment History
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<table id="mytable2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th width='5%'><center>NO</center></th>
						<th width='15%'><center>DATE</center></th>
						<th width='20%'><center>STATUS</center></th>
						<th width='40%'><center>DESCRIPTION</center></th>
						<th width='15%'><center>USER</center></th>
						<th width='5%'><center><?php 
								echo anchor('#modal_input','<i class="fa fa-plus"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' id='0' data-original-title='Input' data-toggle='modal'");
						?></center></th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$no = 1;
						foreach ($shipment_history as $pi){
							$userId = $this->Mod_user->check_user($pi->user_id)->row_array();
							if($pi->user_id == $user_id){
								$delete	= anchor("admin/shipment/delete_shipment_history/status/".$row['shipment_id']."/".$pi->id, '<i class="fa fa-trash-o"></i> Delete', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"]);
							}else{
								$delete	= "#";
							}
							echo "<tr>
								<td align='center'>".$no."</td>
								<td align='center'>".$pi->date_history."</td>
								<td align='center'>".$pi->status."</td>
								<td >".$pi->description."</td>
								<td >".$userId['nama_lengkap']."</td>
								<td align='center'>".$delete."</td>
							</tr>";
							$no++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>
	
	
	<div id="modal_input" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
		<?php 
			echo form_open_multipart('admin/shipment/post_shipment_history/status');
			echo form_hidden('shipment_id', $row['shipment_id']);
		?>
		
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><i class='clip-history'></i> Input Shipment Status </h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<p>
						<select id="form-field-select-3" class="form-control search-select" name="status" required >
							<option value="">&nbsp;</option>
							<option value="PENDING">PENDING</option>
							<option value="CANCEL">CANCEL</option>
							<option value="BLOCK">BLOCK</option>
							<option value="PROGRESS">PROGRESS</option>
							<option value="DELIVERY">DELIVERY</option>
							<option value="COMPLETE">COMPLETE</option>
						</select>
					</p>

					<p>
						<input type="text" class="form-control" placeholder="* Description" name="description" required />
					</p>
				
				</div>
				
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-default btn-sm"><i class="clip-close"></i> CLOSE</button>
			<button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SAVE</button>
		</div>
		<?php echo form_close();?>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
	$(document).ready(function(){
		$('#mytable, #mytable2').DataTable();
	});
</script>