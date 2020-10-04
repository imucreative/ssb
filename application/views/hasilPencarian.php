		<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Search</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active">SEARCH</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class="wrapper portfolio-page">
				<div class="container">
					
					<div class="controls">
						<h3>Result <i><?php echo $keyword;?></i> : <?php echo $jumlah;?> Product</h3>
						<?php /*
						<ul class="nav nav-pills">
							<?php
								foreach ($category as $k){
							?>
									<li class="filter" data-filter="<?php echo $k['kategori_id'];?>">
										<a href="#"><?php echo $k['nama_kategori'];?></a>
									</li>
							<?php
								}
							?>
						</ul>
						*/
						?>
					</div>
					
					<hr/>
					<!-- GRID -->
					<ul id="Grid" class="list-unstyled">
						<?php
							foreach ($product as $p){
						?>
								<li class="col-md-4 col-xs-12 mix <?php echo $p['kategori_id'];?>" data-cat="<?php echo $p['kategori_id'];?>">
									<div class="portfolio-item img-thumbnail">
										<a class="thumb-info" href="<?php echo base_url();?>product/<?php echo $p['nama_product_seo'];?>">
											<img src="<?php echo base_url().'uploads/produk/'. $p['image'];?>" class="img-responsive" alt="<?php echo $p['nama_product'];?>" title="<?php echo $p['nama_product'];?>" />
											<span class="thumb-info-title"> <span class="thumb-info-inner"><?php echo $p['nama_product'];?></span></span>
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
					
					<div class="space12" align="center">
						<div class="btn-group">
							<?php
								//foreach ($links as $link) {
									//echo "<li>". $link."</li>";
								//}
							?>
							
							
							
								<?php
									echo $this->pagination->create_links();
								?>
							
						</div>
					</div>
					
					<hr/>
				</div>
			</section>
		</div>