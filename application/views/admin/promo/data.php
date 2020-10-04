	<div class="col-md-12">
		<!-- start: DYNAMIC TABLE PANEL -->
	   
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i> List Promo
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
								<th width='22%'><center>PROMO NAME</center></th>
								<th width='20%'><center>CATEGORY</center></th>
								<th width='20%'><center>DESCRIPTION</center></th>
								<th width='13%'>
									<center>
										<?php echo anchor('admin/promo/post','<i class="fa fa-plus" aria-hidden="true"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' data-original-title='Input'");?>
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
										
										$tbl_publish	= anchor("admin/promo/publish/".$r->promo_id."/0", "<i class='clip-eye'></i>", ["class"=>"btn btn-xs btn-success tooltips", "data-placement"=>'top', "data-original-title"=>'Publish', "title"=>'Publish', "onclick"=>"return confirm('Are you sure Publish Promo?')"]);
										
									}else{
										$publish	= "<td align='center' bgcolor='green'><div title='Publish' class='tooltips'><font color='green'>&nbsp;&nbsp;&nbsp;</font></div></td>";
										
										$tbl_publish	= anchor("admin/promo/publish/".$r->promo_id."/1", "<i class='clip-eye-2'></i>", ["class"=>"btn btn-xs btn-warning tooltips", "data-placement"=>'top', "data-original-title"=>'Draf', "title"=>'Draf', "onclick"=>"return confirm('Are you sure Draf Promo?')"]);
										
									}
									$get_nama_kategori	= $this->Mod_promo->get_kategori_by_kategori_promo_id($r->kategori_id)->row_array();
									echo "<tr>
										".$publish."
										<td align='center'>".$no."</td>
										<td align='center'>".tgl_indo($r->tgl_input)."</td>
										<td>".substr(strtoupper($r->judul_promo), 0, 30)."</td>
										<td align='center'>".$get_nama_kategori['nama_kategori']."</td>
										<td>".substr($r->deskripsi, 0, 30)."</td>
										<td align='center'>".
										
											anchor('admin/promo/edit/'.$r->promo_id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit" title="Edit"')." | ".
											
											anchor("admin/promo/delete/".$r->promo_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])." | ".
											
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