<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="clip-grid"></i>Widget
		</div>
		<div class="panel-body">
			<div class="tabbable panel-tabs">
				<ul class="nav nav-tabs">
				
					<li class="active"><a data-toggle="tab" href="#panel1"><i class="clip-images"></i> Widget 1</a></li>
					<!--<li><a data-toggle="tab" href="#panel2"><i class="clip-images"></i> Widget 2</a></li>-->
					<!--<li><a data-toggle="tab" href="#panel3"><i class="clip-images"></i> Widget 3</a></li>-->
					
				</ul>
				<div class="tab-content">
				
					<div id="panel1" class="tab-pane active">
						<table id="mytable" class="table table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width='10%'><center>NO</center></th>
									<th width='30%'><center>PRODUCT IMAGE</center></th>
									<th width='50%'><center>PRODUCT NAME</center></th>
									<th width='10%'><center>
										<?php
											echo anchor('#widget1','<i class="fa fa-plus"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' id='0' data-original-title='Input' data-toggle='modal'");
										?>
									</center></th>
								</tr>
							</thead>
							
							<tbody>
								<?php
								
									$no = 1;
									foreach ($widget1 as $w1){
										echo "<tr>
											<td width='10%' align='center'>".$no."</td>
											<td width='30%' align='center'><img title='".$w1->nama_product."' width='200' src='".base_url()."/uploads/produk/".$w1->image."'></td>
											<td width='50%'>".strtoupper($w1->nama_product)."</td>
											<td width='10%' align='center'>".
												
												anchor("admin/product_widget/delete/".$w1->product_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])
												
											."</td>
										</tr>";
										$no++;
									}
								?>
							</tbody>
							
						</table>
					</div>
					
					<?php /*
					<div id="panel2" class="tab-pane">
						<table id="mytable" class="table table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width='10%'><center>NO</center></th>
									<th width='30%'><center>PRODUCT IMAGE</center></th>
									<th width='50%'><center>PRODUCT NAME</center></th>
									<th width='10%'><center>
										<?php
											echo anchor('#widget2','<i class="fa fa-plus"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' id='0' data-original-title='Input' data-toggle='modal'");
										?>
									</center></th>
								</tr>
							</thead>
							
							<tbody>
								<?php
								
									$no = 1;
									foreach ($widget2 as $w2){
										echo "<tr>
											<td width='10%' align='center'>".$no."</td>
											<td width='30%' align='center'><img title='".$w2->nama_product."' width='200' src='".base_url()."/uploads/produk/".$w2->image."'></td>
											<td width='50%'>".strtoupper($w2->nama_product)."</td>
											<td width='10%' align='center'>".
												
												anchor("admin/product_widget/delete/".$w2->product_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])
												
											."</td>
										</tr>";
										$no++;
									}
								?>
							</tbody>
							
						</table>
					</div>
					
					
					<div id="panel3" class="tab-pane">
						<table id="mytable" class="table table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width='10%'><center>NO</center></th>
									<th width='30%'><center>PRODUCT IMAGE</center></th>
									<th width='50%'><center>PRODUCT NAME</center></th>
									<th width='10%'><center>
										<?php
											echo anchor('#widget3','<i class="fa fa-plus"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' id='0' data-original-title='Input' data-toggle='modal'");
										?>
									</center></th>
								</tr>
							</thead>
							
							<tbody>
								<?php
								
									$no = 1;
									foreach ($widget3 as $w3){
										echo "<tr>
											<td width='10%' align='center'>".$no."</td>
											<td width='30%' align='center'><img title='".$w3->nama_product."' width='200' src='".base_url()."/uploads/produk/".$w3->image."'></td>
											<td width='50%'>".strtoupper($w3->nama_product)."</td>
											<td width='10%' align='center'>".
												
												anchor("admin/product_widget/delete/".$w3->product_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])
												
											."</td>
										</tr>";
										$no++;
									}
								?>
							</tbody>
							
						</table>
					</div>
					*/ ?>
					
				</div>
			</div>
		</div>
	</div>
	
</div>



	<div id="widget1" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
		<?php echo form_open('admin/product_widget/post_widget1');?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><i class='clip-wrench'></i> Choose Product</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<select name="widget" class="form-control search-select" required>
						<?php
							foreach ($product as $p){
								echo "<option value='$p->product_id'>$p->nama_product</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-default btn-sm"><i class="clip-close"></i> CLOSE</button>
			<button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SAVE</button>
		</div>
		<?php echo form_close();?>
	</div>
	
	
	<?php /*
	<div id="widget2" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
		<?php echo form_open('admin/product_widget/post_widget2');?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><i class='clip-wrench'></i> Choose Product</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<select name="widget" class="form-control search-select" required>
						<?php
							foreach ($product as $p){
								echo "<option value='$p->product_id'>$p->nama_product</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-default btn-sm"><i class="clip-close"></i> CLOSE</button>
			<button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SAVE</button>
		</div>
		<?php echo form_close();?>
	</div>
	
	
	
	<div id="widget3" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
		<?php echo form_open('admin/product_widget/post_widget3');?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><i class='clip-wrench'></i> Choose Product</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<select name="widget" class="form-control search-select" required>
						<?php
							foreach ($product as $p){
								echo "<option value='$p->product_id'>$p->nama_product</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-default btn-sm"><i class="clip-close"></i> CLOSE</button>
			<button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SAVE</button>
		</div>
		<?php echo form_close();?>
	</div>
	*/ ?>
	


<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
	$(document).ready(function(){
		$('#mytable, #mytable2').DataTable();
	});
</script>