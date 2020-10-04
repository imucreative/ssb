<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="clip-grid"></i>Form Edit Product
		</div>
		<div class="panel-body">
			<div class="tabbable panel-tabs">
				<ul class="nav nav-tabs">
				
					<li class="active"><a data-toggle="tab" href="#panel1"><i class="clip-wrench"></i> Product</a></li>
					<?php /*<li><a data-toggle="tab" href="#panel2"><i class="clip-tag"></i> Tags</a></li>*/?>
					<li><a data-toggle="tab" href="#panel3"><i class="clip-image"></i> Images</a></li>
					
				</ul>
				<div class="tab-content">
				
					<div id="panel1" class="tab-pane active">
						<table class="table">
							<?php
								echo form_open_multipart('admin/product/edit');
								echo form_hidden('id', $row['product_id']);
							?>
								<tr>
									<td align='right' width='20%'>
										<label class="col-sm-12 control-label" for="form-field-1">PRODUCT NAME :</label>
									</td>
									<td>
										<div class="col-sm-12">
											<input value="<?php echo $row['nama_product'];?>" type="text" class="form-control" id="form-field-1" placeholder="* Product Name" name="nama_product" required />
										</div>
									</td>
								</tr>
								
								<tr>
									<td align='right' width='20%'>
										<label class="col-sm-12 control-label" for="form-field-2">PRICE :</label>
									</td>
									<td>
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon">Rp. </span>
												<input value="<?php echo $row['harga'];?>" type="text" class="form-control" id="form-field-2" placeholder="* Price" name="harga" required />
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<td align='right' width='20%'>
										<label class="col-sm-12 control-label" for="form-field-3">CATEGORY :</label>
									</td>
									<td>
										<div class="col-sm-12">
											<select name="kategori_id" class="form-control search-select" id="form-field-3" placeholder="* Category" required>
												<?php
													foreach ($category as $k){
														echo "<option value='$k->kategori_id' ";
														echo $k->kategori_id==$row['kategori_id']?'selected':'';
														echo ">$k->nama_kategori</option>";
													}
												?>
											</select>
										</div>
									</td>
								</tr>
								
								<tr>
									<td align='right' width='20%'>
										<label class="col-sm-12 control-label" for="form-field-6">DESCRIPTION :</label>
									</td>
									<td>
										<div class="col-sm-12">
											<textarea class="ckeditor form-control" name="keterangan" id="form-field-6" cols="10" rows="10" placeholder="* Product Description" required><?php echo $row['keterangan'];?></textarea>
										</div>
									</td>
								</tr>
								
								<tr>
									<td align='right' width='20%'>
										<label class="col-sm-12 control-label" for="form-field-7">IMAGE PRODUCT :</label>
									</td>
									<td>
										<div class="col-sm-12">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-group">
													<div class="form-control uneditable-input">
														<i class="fa fa-file fileupload-exists"></i>
														<span class="fileupload-preview"></span>
													</div>
													<div class="input-group-btn">
														<div class="btn btn-light-grey btn-file">
															<span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
															<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
															<input type="file" id="form-field-7" name="userfile" class="file-input"/>
														</div>
														<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
															<i class="fa fa-times"></i> Remove
														</a>
													</div>
												</div>
											</div>
											<?php
												if(empty($row['image'])){
													echo "<img title='No Image Available' width='200' src='".base_url()."/uploads/noimage.jpg'>";
												}else{
													echo "<img title='".$row['nama_product']."' width='200' src='".base_url()."/uploads/produk/".$row['image']."'>";
												}
											?>
										</div>
									</td>
								</tr>
								
								<tr>
									<td align='right' width='20%'></td>
									<td>
										<div class="col-sm-12">
											<button type="submit" name="submit" class="btn btn-success btn-sm"><i class='fa fa-save'></i> SAVE</button> | 
											<?php
												echo anchor('admin/product', "<i class='fa fa-arrow-left'></i> BACK",array('class'=>'btn btn-info btn-sm'));
											?>
										</div>
									</td>
								</tr>
							</form>
						</table>
					</div>
					
					<div id="panel3" class="tab-pane">
						<table id="mytable2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th width='10%'><center>NO</center></th>
									<th width='30%'><center>IMAGE</center></th>
									<th width='50%'><center>IMAGE NAME</center></th>
									<th width='10%'><center><?php 
											echo anchor('#modal_input_image','<i class="fa fa-plus"></i> Input',"class='btn btn-primary btn-xs tooltips' data-placement='top' id='0' data-original-title='Input' data-toggle='modal'");
									?></center></th>
								</tr>
							</thead>
							
							<tbody>
								<?php
									$no = 1;
									foreach ($product_images as $pi){
										echo "<tr>
											<td width='10%' align='center'>".$no."</td>
											<td width='30%' align='center'><img title='".$pi->nama_image."' width='200' src='".base_url().'uploads/produk/'.$pi->image."' /></td>
											<td width='50%'>".$pi->nama_image."</td>
											<td width='10%' align='center'>".
												
												anchor("admin/product/delete_image_produk/".$row['product_id']."/".$pi->image_id, '<i class="fa fa-trash-o"></i> Delete', ["class"=>"btn btn-xs btn-danger tooltips", "data-placement"=>'top', "data-original-title"=>'Delete', "title"=>'Delete', "onclick"=>"return confirm('Are you sure?')"])
												
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
		</div>
	</div>
	
</div>
	
	
	<div id="modal_input_image" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
		<?php 
			echo form_open_multipart('admin/product/post_image_produk');
			echo form_hidden('product_id', $row['product_id']);
		?>
		
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><i class='clip-image'></i> Input Images</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<p>
						<input type="text" class="form-control" placeholder="* Image Name" name="nama_image" required />
					</p>
				
					<p>
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="input-group">
								<div class="form-control uneditable-input">
									<i class="fa fa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<div class="input-group-btn">
									<div class="btn btn-light-grey btn-file">
										<span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
										<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
										<input type="file" name="userfile" class="file-input" required />
									</div>
									<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
										<i class="fa fa-times"></i> Remove
									</a>
								</div>
							</div>
						</div>
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