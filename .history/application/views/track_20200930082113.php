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
									<div class="form-group">
										<div class="col-md-3">
											<input type="text" id="code" name="ncodeame" class="form-control" maxlength="30" placeholder="* Code Tracking Shipment" required>
										</div>
										<div class="col-md-6">
											<button type="submit" class="btn btn-main-color submit_message"><i class="fa fa-search"></i> Tracking</button>
											<button data-style="expand-right" class="btn btn-teal ladda-button">
												<span class="ladda-label"> expand </span>
												<i class="fa fa-arrow-circle-right"></i>
												<span class="ladda-spinner"></span>
											</button>
										</div>
									</div>
								</div>
							<?php echo form_close();?>
						</div>
						
						
					</div>
				</div>
			</section>
		</div>
