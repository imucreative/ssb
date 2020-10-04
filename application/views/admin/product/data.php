<div class="col-md-12">
		<!-- start: DYNAMIC TABLE PANEL -->
	   
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i> List Product
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-expand"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<div class='table-responsive'>
					<table id="mytable" class="table table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width='5%'><center>#</center></th>
								<th width='5%'><center>NO</center></th>
								<th width='15%'><center>TGL INPUT</center></th>
								<th width='29%'><center>PRODUCT NAME</center></th>
								<th width='13%'><center>PRICE</center></th>
								<th width='20%'><center>CATEGORY</center></th>
								<th width='13%'>
									<center>
										<?php echo anchor('admin/product/post','<i class="fa fa-plus" aria-hidden="true"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' data-original-title='Input'");?>
									</center>
								</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
								$no=1;
								foreach ($record as $r){
									if($r->publish == '0'){
										$publish	= "<td align='center' bgcolor='red'><div title='Not Publish' class='tooltips'><font color='red'>&nbsp;&nbsp;&nbsp;</font></div></td>";
										
										$tbl_publish	= anchor("admin/product/publish/".$r->product_id."/0", "<i class='clip-eye'></i>", ["class"=>"btn btn-xs btn-success tooltips", "data-placement"=>'top', "data-original-title"=>'Publish', "title"=>'Publish', "onclick"=>"return confirm('Are you sure Publish Product?')"]);
										
									}else{
										$publish	= "<td align='center' bgcolor='green'><div title='Publish' class='tooltips'><font color='green'>&nbsp;&nbsp;&nbsp;</font></div></td>";
										
										$tbl_publish	= anchor("admin/product/publish/".$r->product_id."/1", "<i class='clip-eye-2'></i>", ["class"=>"btn btn-xs btn-warning tooltips", "data-placement"=>'top', "data-original-title"=>'Draf', "title"=>'Draf', "onclick"=>"return confirm('Are you sure Draf Product?')"]);
										
									}
									echo "<tr>
										".$publish."
										<td align='center'>".$no."</td>
										<td align='center'>".tgl_indo($r->tgl_input)."</td>
										<td>".strtoupper($r->nama_product)."</td>
										<td align='right'>Rp. ".nominal($r->harga)."</td>
										<td align='center'>".$r->nama_kategori."</td>
										<td align='center'>".
										
											anchor('admin/product/edit/'.$r->product_id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit" title="Edit"')." | ".
											
											anchor("admin/product/delete/".$r->product_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])." | ".
											
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