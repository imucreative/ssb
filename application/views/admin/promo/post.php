<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>Form Input Promo
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<table class="table">
				<?php
					echo form_open_multipart('admin/promo/post');
				?>
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-1">PROMO NAME :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="form-field-1" placeholder="*" name="judul_promo" required />
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-3">CATEGORY :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<select name="kategori_id" class="form-control search-select" id="form-field-3" placeholder="*" required>
									<?php
										foreach ($category as $k){
											echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
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
								<textarea class="ckeditor form-control" name="deskripsi" id="form-field-6" placeholder="*" required></textarea>
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-6">IMAGE BLOG :</label>
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
												<input type="file" id="form-field-6" name="userfile" class="file-input" required/>
											</div>
											<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
											</a>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'></td>
						<td>
							<div class="col-sm-12">
								<button type="submit" name="submit" class="btn btn-success btn-sm"><i class='fa fa-save'></i> SAVE</button>
								<?php
									echo anchor('admin/promo', "<i class='fa fa-arrow-left'></i> BACK",array('class'=>'btn btn-info btn-sm'));
								?>
							</div>
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
	<!-- end: TEXT FIELDS PANEL -->
</div>