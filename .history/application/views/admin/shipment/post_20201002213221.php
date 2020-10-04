<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>Form Input Shipment
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<div class="alert alert-danger">
				<button data-dismiss="alert" class="close">
					&times;
				</button>
				<i class="fa fa-times-circle"></i>
				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<table class="table">
				<?php
					echo form_open_multipart('admin/shipment/post');
				?>
					<tr>
						<td  class="col-sm-6" >
							<div align='right' class="col-sm-4">
								<label class="control-label" for="form-field-1">CODE <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="form-field-1" placeholder="" name="code" required />
							</div>
						</td>
						<td class="col-sm-6" >
							<div align='right' class="col-sm-4">
								<label class="control-label" for="form-field-2">DATE OF SHIPMENT <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-8">
								<div class="input-group">
                                    <input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" class="form-control date-picker" id="form-field-2" placeholder="" name="date_of_shipment" readonly required />
									<span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                </div>
								
							</div>
						</td>
					</tr>
					
					<tr>
						<td >
							<div align='right' class="col-sm-4">
								<label class="control-label" for="form-field-3">DESTINATION <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="form-field-2" placeholder="" name="to_location" required />
							</div>
						</td>
						<td >
							<div align='right' class="col-sm-4">
								<label class="control-label" for="form-field-3">CONSIGNEE <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="form-field-2" placeholder="" name="consignee" required />
							</div>
						</td>
					</tr>
					
					<tr>
						<td  >
							<div align='right' class="col-sm-4">
								<label class="control-label" for="form-field-3">STATUS DESCRIPTION <span class="symbol required"></span></label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="" name="description" required />
							</div>
						</td>
						<td >
							<div align='right' class="col-sm-4">
								<label class="control-label" for="form-field-6">FILE </label>
							</div>
							<div class="col-sm-8">
								
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="input-group">
											<div class="form-control uneditable-input">
												<i class="fa fa-file fileupload-exists"></i>
												<span class="fileupload-preview"></span>
											</div>
											<div class="input-group-btn">
												<div class="btn btn-light-grey btn-file">
													<span class="fileupload-new"><i class="fa fa-folder-open-o"></i></span>
													<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i></span>
													<input type="file" id="form-field-6" name="userfile" class="file-input"/>
												</div>
												<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
													<i class="fa fa-times"></i>
												</a>
											</div>
										</div>
									</div>
								
							</div>
						</td>
					</tr>
					
					
					<tr>
						
						<td align="right" colspan="2">
							<div class="col-sm-12">
								<button type="submit" name="submit" class="btn btn-success btn-sm"><i class='fa fa-save'></i> SAVE</button>
								<?php
									echo anchor('admin/shipment', "<i class='fa fa-arrow-left'></i> BACK",array('class'=>'btn btn-info btn-sm'));
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
