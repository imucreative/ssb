	<div class="col-md-12">
		<!-- start: DYNAMIC TABLE PANEL -->
	   
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i> List Master Category Promo
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-expand"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<div class='table-responsive'>
					<table id="mytable" class="table table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width='10%'><center>NO</center></th>
								<th width='80%'><center>CATEGORY NAME</center></th>
								<th width='10%'><center>
									<?php
										echo anchor('admin/category_promo/post','<i class="fa fa-plus"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' data-original-title='Input'");
									?>
								</center></th>
							</tr>
						</thead>
						
						<tbody>
							<?php
							
								$no = 1;
								foreach ($record as $r){
									echo "<tr>
										<td width='10%' align='center'>".$no."</td>
										<td width='80%'>".strtoupper($r->nama_kategori)."</td>
										<td width='10%' align='center'>".
										
											anchor('admin/category_promo/edit/'.$r->kategori_id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit" title="Edit"')." | ".
											
											anchor("admin/category_promo/delete/".$r->kategori_id, '<i class="fa fa-trash-o"></i>', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])
											
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
	$(document).ready(function(){
		$('#mytable').DataTable();
	});
</script>