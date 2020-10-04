		<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Track Shipment</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active">TRACK SHIPMENT</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class="wrapper portfolio-page">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
							<h3>TRACK SHIPMENT</h3>
							<hr/>
							<?php
								echo form_open('admin/shipment/post_shipment_history/status');
							?>
								<div class="row">
									<table class="table">			
										<tr>
											<td class="col-sm-6" >
												<div align='right' class="col-sm-3">
													<label class="control-label" for="form-field-1">TRACKING NO <span class="symbol required"></span></label>
												</div>
												<div class="col-sm-6">
													<input type="text" id="code" name="code" class="form-control" maxlength="30" placeholder="* Code Tracking Shipment" value="<?php echo $track['code'];?>" required>
													
												</div>
												<div class="col-sm-3">
													<button type="submit" class="btn btn-main-color"><i class="fa fa-search"></i> Tracking</button>
												</div>
											</td>
											<td class="col-sm-6" ></div>
										</tr>
									</table>
								</div>
							<?php echo form_close();?>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12">
							
							<div class="row">
								<table class="table">
									<tr>
										<td class="col-sm-6" >
											<div align='right' class="col-sm-3">
												<label class="control-label" for="form-field-1">CODE <span class="symbol required"></span></label>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="form-field-1" placeholder="" name="code" value="<?php echo $track['code'];?>" readonly required  />
											</div>
										</td>
										<td class="col-sm-6" >
											<div align='right' class="col-sm-4">
												<label class="control-label" for="form-field-2">DATE OF SHIPMENT <span class="symbol required"></span></label>
											</div>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="form-field-2" placeholder="" name="date_of_shipment" value="<?php echo $track['date_of_shipment'];?>" readonly required />
											</div>
										</td>
									</tr>
									<tr>
										<td  >
											<div align='right' class="col-sm-3">
												<label class="control-label" for="form-field-3">DESTINATION <span class="symbol required"></span></label>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="form-field-2" placeholder="" name="to_location" value="<?php echo $track['to_location'];?>" readonly required />
											</div>
										</td>
										<td >
											<div align='right' class="col-sm-4">
												<label class="control-label" for="form-field-3">CONSIGNEE <span class="symbol required"></span></label>
											</div>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="form-field-2" placeholder="" name="consignee" value="<?php echo $track['consignee'];?>" readonly required />
											</div>
										</td>
									</tr>
									<tr>
										<td >
											
										</td>
										<td >
											<div align='right' class="col-sm-4">
												<label class="control-label" for="form-field-6">FILE </label>
											</div>
											<div class="col-sm-8">
												<?php
													if($track['file']!=""){
														
														echo "<a href='".base_url()."admin/shipment/download/".$track['file']."' class='tooltips' data-placement='top' data-original-title='Download File' title='Download File'>
															<i class='fa fa-download'></i> Download
														</a>";
												
													}else{
														echo "Not attach file";
													}
												?>
											</div>
										</td>
									</tr>
								</table>

						</div>
					</div>
					
				</div>
			</section>
		</div>
