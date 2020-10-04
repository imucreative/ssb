	<div class="col-md-12">
		<!-- start: DYNAMIC TABLE PANEL -->
	   
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i> List Home Slider
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
								<th width='15%'><center>IMAGE</center></th>
								<th width='30%'><center>SLIDER NAME</center></th>
								<th width='35%'><center>DESCRIPTION</center></th>
								<th width='15%'>
									<center>
										<?php echo anchor('admin/product_slider/post','<i class="fa fa-plus" aria-hidden="true"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' data-original-title='Input'");?>
									</center>
								</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
								$no=1;
								foreach ($record as $r){
									if($r->publish == '0'){
										$tbl_publish	= anchor("admin/product_slider/publish/".$r->slider_id."/0", "<i class='clip-eye'></i>", ["class"=>"btn btn-xs btn-success tooltips", "data-placement"=>'top', "data-original-title"=>'Publish', "title"=>'Publish', "onclick"=>"return confirm('Are you sure Publish Slider Product?')"]);
										
									}else{
										$tbl_publish	= anchor("admin/product_slider/publish/".$r->slider_id."/1", "<i class='clip-eye-2'></i>", ["class"=>"btn btn-xs btn-warning tooltips", "data-placement"=>'top', "data-original-title"=>'Draf', "title"=>'Draf', "onclick"=>"return confirm('Are you sure Draf Slider Product?')"]);
										
									}
									
									if(empty($r->image)){
										$img = "<img title='No Image Available' width='200' src='".base_url()."uploads/noimage.jpg'>";
									}else{
										$img = "<img title='".$r->nama_slider."' width='200' src='".base_url()."uploads/slider/".$r->image."'>";
									}
									
									echo "<tr>
										<td align='center'>".$no."</td>
										<td align='center'>".$img."</td>
										<td>".strtoupper($r->nama_slider)."</td>
										<td>".$r->keterangan."</td>
										<td align='center'>".
										
											anchor('admin/product_slider/edit/'.$r->slider_id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit" title="Edit"')." | ".
											
											anchor("admin/product_slider/delete/".$r->slider_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])." | ".
											
											$tbl_publish
											
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
	$(document).ready(function() {
		$('#mytable').DataTable();
	} );
</script>