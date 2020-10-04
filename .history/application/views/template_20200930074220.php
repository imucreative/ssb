<!DOCTYPE html>
<!-- Template Name: Clip-One - Frontend | Build with Twitter Bootstrap 3 | Version: 1.5 | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<link rel="shortcut icon" href="<?php echo base_url()."uploads/".get_data_toko('logo');?>"/>
		<title><?php echo get_data_toko('nama_toko');?></title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="<?php echo get_data_toko('about');?>" name="description" />
		<meta content="<?php echo get_data_toko('nama_toko');?>" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/fonts/style.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/css/main-responsive.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/css/theme_blue.css" type="text/css" id="skin_color">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/bootstrap-social-buttons/social-buttons-3.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/flex-slider/flexslider.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/revolution_slider/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/colorbox/example2/colorbox.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/front/assets/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.0.0.min.css">
		
		<script src="<?php echo base_url()?>template/front/assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

		
		<!-- start: HTML5SHIV FOR IE8 -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
		<!-- end: HTML5SHIV FOR IE8 -->
	</head>
	<!-- end: HEAD -->
	<body>
		<!-- start: HEADER -->
		<header class="colored-top-bar">
			<!-- start: SLIDING BAR (SB) -->
			<div id="slidingbar-area">
				<div id="slidingbar">
					<!-- start: SLIDING BAR FIRST COLUMN -->
					<div class="col-md-4 col-sm-4">
						<p align='center'>
							<a href="<?php echo get_data_adv_top('link');?>" target="_blank">
							<img src="<?php echo get_data_adv_top('link_img');?>" alt="" width='50%' border="0" />
							</a>
						</p>
					</div>
					<!-- end: SLIDING BAR FIRST COLUMN -->
					<!-- start: SLIDING BAR SECOND COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>Recent Works</h2>
						<div class="blog-photo-stream margin-bottom-30">
							<ul class="list-unstyled">
								<?php echo recent_produk();?>
							</ul>
						</div>
					</div>
					<!-- end: SLIDING BAR SECOND COLUMN -->
					<!-- start: SLIDING BAR THIRD COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>Contact Us</h2>
						<address class="margin-bottom-40">
							<?php echo get_data_toko('nama_toko');?><br>
							<i class="clip-location"></i> <?php echo get_data_toko('alamat');?><br>
							<i class="clip-phone"></i> <strong>Phone: </strong><?php echo get_data_toko('telp');?><br>
							<i class="fa fa-envelope"></i> <strong>Email: </strong><a href="mailto:<?php echo get_data_toko('email');?>"><?php echo get_data_toko('email');?></a>
						</address>
					</div>
					<!-- end: SLIDING BAR THIRD COLUMN -->
				</div>
				<!-- start: SLIDING BAR TOGGLE BUTTON -->
				<a href="#" class="sb_toggle"></a>
				<!-- end: SLIDING BAR TOGGLE BUTTON -->
			</div>
			<!-- end: SLIDING BAR -->
			<!-- start: TOP BAR -->
			<div class="clearfix " id="topbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<!-- start: TOP BAR CALL US -->
							<div class="callus">
								<i class="fa fa-phone"></i> <strong>Call Us: </strong><?php echo get_data_toko('telp');?> - 
								<i class="fa fa-envelope"></i> <strong>Mail: </strong><a href="mailto:<?php echo get_data_toko('email');?>"><?php echo get_data_toko('email');?></a>
							</div>
							<!-- end: TOP BAR CALL US -->
						</div>
						<div class="col-sm-6">
							<!-- start: TOP BAR SOCIAL ICONS -->
							<div class="social-icons">
								<ul>
									<li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
										<a target="_blank" href="http://www.twitter.com">Twitter</a>
									</li>
									<li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
										<a target="_blank" href="http://facebook.com">Facebook</a>
									</li>
									<li class="social-google tooltips" data-original-title="Google" data-placement="bottom">
										<a target="_blank" href="http://google.com">Google+</a>
									</li>
									<li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
										<a target="_blank" href="http://linkedin.com">LinkedIn</a>
									</li>
									<li class="social-youtube tooltips" data-original-title="YouTube" data-placement="bottom">
										<a target="_blank" href="http://youtube.com/">YouTube</a>
									</li>
								</ul>
							</div>
							<!-- end: TOP BAR SOCIAL ICONS -->
						</div>
					</div>
				</div>
			</div>
			<!-- end: TOP BAR -->
			<div role="navigation" class="navbar navbar-default navbar-fixed-top space-top">
				<!-- start: TOP NAVIGATION CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<!-- start: RESPONSIVE MENU TOGGLER -->
						<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- end: RESPONSIVE MENU TOGGLER -->
						<!-- start: LOGO -->
							<a class="navbar-brand" href="<?php echo base_url();?>">
								<img class='logo_cia' width='50px' src="<?php echo base_url()."uploads/".get_data_toko('logo');?>" alt="<?php echo get_data_toko('nama_toko');?>"> <?php echo get_data_toko('nama_toko');?></img>
							</a>
						<!-- end: LOGO -->
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="<?php echo base_url();?>">
									<i class="clip-home"></i>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>">
									<i class="clip-home"></i> TTRACK SHIPMENT
								</a>
							</li>
							
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">
									<i class="clip-list-2"></i> PRODUCT <i class="clip-chevron-down"></i>
								</a>
								<ul class="dropdown-menu">
									<?php
										$mainKategory		= $this->db->get_where('tbl_product_kategori', array('status_delete'=>0));
										foreach ($mainKategory->result() as $k){
											echo "<li>".anchor('category/index/'.$k->nama_kategori_seo, "<i class='clip-chevron-right'></i> ".$k->nama_kategori)."</li>";
											/*
											$subKategory	= $this->db->get_where('tabel_kategori', array('parent'=>$k->kategori_id, 'status_delete'=>0));
											if ($subKategory->num_rows() > 0){
												echo "<div class='col-sm-3'>
													<ul class='sub-menu'>
														<li>
															<span class='mega-menu-sub-title'>".$k->nama_kategori."</span>
															<ul class='sub-menu'>";
																foreach ($subKategory->result() as $s){
																	echo "<li>".anchor('category/'.$s->nama_kategori_seo, $s->nama_kategori)."</li>";
																}
															echo "</ul>
														</li>
													</ul>
												</div>";
											}else{
												echo "<li>".anchor('category/'.$k->nama_kategori_seo, $k->nama_kategori)."</li>";
											}
											*/
										}
									?>
								</ul>
							</li>
							<?php /*
							<li>
								<a href="<?php echo base_url();?>promo">
									<i class="clip-tag"></i> Promo
								</a>
							</li>
							*/ ?>
							<li>
								<a href="<?php echo base_url();?>contact">
									<i class="clip-phone"></i> CONTACT US
								</a>
							</li>

							
							<li class="menu-search">
								<!-- start: SEARCH BUTTON -->
								<a href="#" data-placement="bottom" data-toggle="popover">
									<i class="clip-search-3"></i>
								</a>
								<!-- end: SEARCH BUTTON -->
								<!-- start: SEARCH POPOVER -->
								<div class="popover bottom search-box">
									<div class="arrow"></div>
									<div class="popover-content">
										<!-- start: SEARCH FORM -->
										<?php
										/*
										<form class="" id="searchform" action="<?php echo base_url();?>product/search">
											<div class="input-group">
												<input type="text" name='keyword' class="form-control" placeholder="Search...">
												<span class="input-group-btn">
													<button class="btn btn-main-color btn-squared" type="button">
														<i class="clip-search-3"></i>
													</button>
												</span>
											</div>
										</form>
										*/
										?>
										
										<?php echo form_open('search');?>
											<div class="input-group">
												<input type="text" name="key" class="form-control" placeholder="Search product..." required />
												<span class="input-group-btn">
													<button class="btn btn-main-color btn-squared" type="submit">
														<i class="clip-search-3"></i>
													</button>
												</span>
											</div>
										<?php echo form_close();?>
										
										<!-- end: SEARCH FORM -->
									</div>
								</div>
								<!-- end: SEARCH POPOVER -->
							</li>
						</ul>
					</div>
				</div>
				<!-- end: TOP NAVIGATION CONTAINER -->
			</div>
		</header>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
			<?php echo $contents; ?>	<!--================================================================================================-->
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		
		<footer id="footer">
			<div class="container">
				<div class="row">
					<!--
					<div class="col-md-5">
						<div class="newsletter">
							<h4>Newsletter</h4>
							<form method="POST" action="#" id="newsletterForm">
								<div class="input-group">
									<input type="text" id="email" name="email" placeholder="Email Address" class="form-control">
									<span class="input-group-btn"><button type="submit" class="btn btn-default">Go!</button></span>
								</div>
							</form>
						</div>
					</div>
					-->
					
					<div class="col-md-9">
						<div class="contact-details">
							<h4>Contact Us</h4>
							<ul class="contact">
								<li>
									<p>
										<i class="fa fa-map-marker"></i><strong>Address: </strong><?php echo get_data_toko('alamat');?>
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-phone"></i><strong>Phone: </strong><?php echo get_data_toko('telp');?>
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-envelope"></i><strong>Email: </strong>
										<a href="mailto:<?php echo get_data_toko('email');?>"><?php echo get_data_toko('email');?></a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Follow Us</h4>
						<div class="social-icons">
							<ul>
								<li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
									<a target="_blank" href="http://www.twitter.com">Twitter</a>
								</li>
								<li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
									<a target="_blank" href="http://facebook.com">Facebook</a>
								</li>
								<li class="social-google tooltips" data-original-title="Google" data-placement="bottom">
									<a target="_blank" href="http://google.com">Google+</a>
								</li>
								<li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
									<a target="_blank" href="http://linkedin.com">LinkedIn</a>
								</li>
								<li class="social-youtube tooltips" data-original-title="YouTube" data-placement="bottom">
									<a target="_blank" href="http://youtube.com/">YouTube</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<?php
						/*
						<div class="col-md-1">
							<a class="logo" href="<?php echo base_url();?>">
								<img class='logo_cia' width='20px' src="<?php echo base_url()?>uploads/<?php echo get_data_toko('logo');?>" alt="PT. Cakra Indonesia Autopart">
							</a>
						</div>
						*/
						?>
						<div class="col-md-7">
							<p>
								&copy; Copyright 2018 by <?php echo get_data_toko('nama_toko');?>.
							</p>
						</div>
						<?php
						/*
						<div class="col-md-4">
							<nav id="sub-menu">
								<ul>
									<li>
										<a href="#">
											FAQ's
										</a>
									</li>
									<li>
										<a href="#">
											Sitemap
										</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>contact">
											Contact
										</a>
									</li>
								</ul>
							</nav>
						</div>
						*/
						?>
					</div>
				</div>
			</div>
		</footer>
		
		<a id="scroll-top" href="#"><i class="clip-chevron-up"></i></a>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		
		<!--<![endif]-->
		<script src="<?php echo base_url()?>template/front/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url()?>template/front/assets/plugins/flex-slider/jquery.flexslider.js"></script>
		
		<script src="<?php echo base_url()?>template/front/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/stellar.js/jquery.stellar.min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/js/index.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<script src="<?php echo base_url()?>template/front/assets/plugins/mixitup/src/jquery.mixitup.js"></script>
		
		<script src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyCA-b2qVuUU-WwppwYsZcqCPtgyzDtK8F0" type="text/javascript"></script>
		
		<!--
		<script src="<?php //echo base_url()?>template/front/assets/js/apiGmaps.js"></script>
		-->
		<script src="<?php echo base_url()?>template/front/assets/plugins/gmaps/gmaps.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				$('#Grid').mixitup();
				Index.init();
				$.stellar();
				
				map = new GMaps({
					div: '#map',
					lat: -6.283881,
					lng: 106.952639
				});
				
				map.addMarker({
					lat: -6.283881,
					lng: 106.952639,
					title: '<?php echo get_data_toko('nama_toko');?>',
					infoWindow: {
						content: '<p><?php echo get_data_toko('nama_toko');?></p>'
					}
				});
				
				/*
				map.addMarker({
					lat: -12.043333,
					lng: -77.03,
					title: 'Lima',
					details: {
						database_id: 42,
						author: 'HPNeo'
					},
					click: function(e) {
						if(console.log)
							console.log(e);
						alert('You clicked in this marker');
					}
				});
				*/
			});
		</script>
	</body>
</html>

<style>
	.floatwa {
		position:fixed;
		bottom:0px;
		right: 0px;
		opacity: transparent;
		width:100%;
		z-index:1000;
		padding:0px;
		margin:auto;
		text-align:center;
		float:none;
	}
	.tombolwa {
		border: 1px #56aa71 solid;
		background-color:#2f7e49;
		width:100%;
		padding:10px;
		text-align:center;
		margin:0;
		border-radius: 0px;
		margin:auto;
		text-align:center;
		float:none;
	}
	.floatwa a{
		color:white;
	}
	
</style>

<!-- Default Statcounter code for Sinar Surya Berliawan
http://sinarsuryaberliawan.com/ -->
<script type="text/javascript">
var sc_project=11785861; 
var sc_invisible=1; 
var sc_security="3a622d99"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11785861/0/3a622d99/1/" alt="Web
Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->

<?php /*
<div class="floatwa">
	<a href="https://api.whatsapp.com/send?phone=<?php echo get_data_toko('wa');?>&amp;text=Assalamualaikum%20admin,%0ASaya%20mau%20order%20" target="_blank">
		<div class="tombolwa"><i class="fa fa-comment-o"></i> WhatsApp</div>
	</a>
</div>
*/
?>
