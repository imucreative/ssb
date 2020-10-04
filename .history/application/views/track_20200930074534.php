		<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Category</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active"><?php echo $category;?></li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class="wrapper portfolio-page">
				<div class="container">
					
					<div class="controls">
						<h3><?php echo $category;?></h3>
						<!--
						<ul class="nav nav-pills">
							<li class="filter active" data-filter="all">
								<a href="#">
									Show All</a>
							</li>
							<li class="filter" data-filter="category_1">
								<a href="#">
									Category 1</a>
							</li>
							<li class="filter" data-filter="category_2">
								<a href="#">
									Category 2</a>
							</li>
							<li class="filter" data-filter="category_3">
								<a href="#">
									Category 3</a>
							</li>
							<li class="filter" data-filter="category_3 category_1">
								<a href="#">
									Category 1 &amp; 3</a>
							</li>
						</ul>
						-->
					</div>
					<hr/>
					
					
					<!-- GRID -->
					<ul id="Grid" class="list-unstyled">
						<?php
							foreach ($product as $p){
						?>
								<li class="col-md-3 col-xs-12 mix category_1" data-cat="1">
									<div class="portfolio-item img-thumbnail">
										<a class="thumb-info" href="<?php echo base_url();?>product/<?php echo $p->nama_product_seo;?>">
											<img src="<?php echo base_url().'uploads/produk/'. $p->image;?>" class="img-responsive" alt="<?php echo $p->nama_product;?>" />
											<span class="thumb-info-title"> <span class="thumb-info-inner"><?php echo $p->nama_product;?></span></span>
											<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
										</a>
									</div>
								</li>
						<?php
							}
						?>
						
						<?php
						/*
						<li class="col-md-3 col-xs-12 mix category_2" data-cat="2">
							<div class="portfolio-item img-thumbnail">
								<a class="thumb-info" href="#">
									<img src="<?php echo base_url();?>uploads/produk/suspension_electronic.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title"> <span class="thumb-info-inner">Suspension Electronic</span> <span class="thumb-info-type">Brand</span> </span>
									<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
								</a>
							</div>
						</li>
						<li class="col-md-3 col-xs-12 mix category_3" data-cat="3">
							<div class="portfolio-item img-thumbnail">
								<a class="thumb-info" href="#">
									<img src="<?php echo base_url();?>uploads/produk/suspension_strut.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title"> <span class="thumb-info-inner">Suspension Strut</span> <span class="thumb-info-type">Logo</span> </span>
									<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
								</a>
							</div>
						</li>
						*/
						
						?>
						
						<li class="gap"></li>
						
						<!-- "gap" elements fill in the gaps in justified grid -->
					</ul>
					<center>
						<?php
							echo $this->pagination->create_links();
						?>
					</center>
					<hr/>
				</div>
			</section>
		</div>