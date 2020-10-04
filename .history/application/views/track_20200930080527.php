		<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Track</h1>
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
							<form type="post" id="contactForm" action="" >
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>
												Your name <span class="symbol required"></span>
											</label>
											<input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" required>
										</div>
										<div class="col-md-6">
											<label>
												Your email address <span class="symbol required"></span>
											</label>
											<input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Subject <span class="symbol required"></span>
											</label>
											<input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Message <span class="symbol required"></span>
											</label>
											<textarea id="message" name="message" class="form-control" rows="5" data-msg-required="Please enter your message." maxlength="5000" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" data-loading-text="Loading..." class="btn btn-main-color submit_message" value="Send Message">
									</div>
								</div>
							</form>
						</div>
						
						
					</div>
				</div>
			</section>
		</div>
