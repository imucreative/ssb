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
							<h3>TRACKING SHIPMENT</h3>
							<hr/>
							<?php
								echo form_open('track/shipment');
							?>
								<div class="row">
									<table class="table">			
										<tr>
											<td class="col-sm-6" >
												<div align='right' class="col-sm-3">
													<label class="control-label" for="form-field-1">TRACKING NO <span class="symbol required"></span></label>
												</div>
												<div class="col-sm-6">
													<input type="text" id="code" name="code" class="form-control" maxlength="30" placeholder="* Code Tracking Shipment" value="" required>
													
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
				</div>
			</section>
		</div>
