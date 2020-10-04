<div class="col-sm-12">
    
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>Company Information
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<table class="table">
            <?php
				echo form_open('admin/info', 'role="form"');
				echo form_hidden('id',$info['id']);
            ?>
				<tr>
					<td align='right' width='20%'>
						<label class="col-sm-12 control-label" for="form-field-1">COMPANY NAME :</label>
					</td>
					<td>
						<div class="col-sm-12">
							<input type="text" value="<?php echo $info['nama_toko'];?>" name="nama_toko" placeholder="* Company Name" id="form-field-1" class="form-control" maxlength='50' required />
						</div>
					</td>
				</tr>
				<tr>
					<td align='right'>
						<label class="col-sm-12 control-label" for="form-field-2">ADDRESS :</label>
					</td>
					<td>
						<div class="col-sm-12">
							<input type="text" name="alamat" value="<?php echo $info['alamat'];?>" placeholder="* Address" id="form-field-2" class="form-control" required/>
						</div>
					</td>
				</tr>
				<tr>
					<td align='right'>
						<label class="col-sm-12 control-label" for="form-field-3">EMAIL, TELP & FAX :</label>
					</td>
					<td>
						<div class="col-sm-4">
							<div class="input-group">
								<input type="text" value="<?php echo $info['email'];?>" name="email" placeholder="* Email" id="form-field-3" class="form-control" maxlength='30' required/>
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
								<input type="text" value="<?php echo $info['telp'];?>" name="telp" placeholder="* Telp" class="form-control" maxlength='30' required/>
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
								<input type="text" value="<?php echo $info['fax'];?>" name="fax" placeholder="* Fax" class="form-control" maxlength='30' required/>
								<span class="input-group-addon"><i class="fa fa-fax"></i></span>
							</div>
						</div>
					</td>
				</tr>
				
				<tr>
					<td align='right'>
						<label class="col-sm-12 control-label" for="form-field-4">SIUP & NPWP :</label>
					</td>
					<td>
						<div class="col-sm-6">
							<div class="input-group">
								<input type="text" value="<?php echo $info['siup'];?>" name="siup" placeholder="* SIUP" id="form-field-4" class="form-control" maxlength='30' required/>
								<span class="input-group-addon"><i class="fa fa-file"></i></span>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="input-group">
								<input type="text" value="<?php echo $info['npwp'];?>" name="npwp" placeholder="* NPWP" class="form-control" maxlength='30' required/>
								<span class="input-group-addon"><i class="fa fa-file"></i></span>
							</div>
						</div>
					</td>
				</tr>
				
				<tr>
					<td align='right'>
						<label class="col-sm-12 control-label" for="form-field-5">ABOUT :</label>
					</td>
					<td>
						<div class="col-sm-12">
							<textarea class="ckeditor form-control" name="about" id="form-field-5" placeholder="* About" required><?php echo $info['about'];?></textarea>
						</div>
					</td>
				</tr>
				
				<tr>
					<td align='right'>
						<label class="col-sm-12 control-label" for="form-field-6">KEUNGGULAN :</label>
					</td>
					<td>
						<div class="col-sm-12">
							<textarea class="ckeditor form-control" name="keunggulan" id="form-field-6" placeholder="* Keunggulan" required><?php echo $info['keunggulan'];?></textarea>
						</div>
					</td>
				</tr>
				
				
				
				<tr>
					<td align='right'>
						<label class="col-sm-12 control-label"></label>
					</td>
					<td>
						<div class="col-sm-12">
							<button type="submit" name="submit" class="btn btn-success btn-sm"><i class='fa fa-save' aria-hidden='true'></i> SAVE</button>
						</div>
					</td>
				</tr>
            </form>
			</table>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>