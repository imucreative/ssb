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
	<section class="wrapper">
		<div class="container">
			
			
			<div class="controls">
				<h3>Result <i><?php echo $keyword;?></i> : <?php echo $jumlah;?> Article</h3>
			</div>
			<hr/>
			
			
			
			<div class="row">
				<div class="col-md-9">
					<div class="blog-posts">
					
					<?php
						$no = 1;
						foreach ($promo as $b){
					?>
					
						<article>
							<div class="row">
								<div class="col-md-5">
									<div class="post-image">
										<div class="flexslider" data-plugin-options='{"directionNav":true}'>
											<ul class="slides">
											<?php
												$no = 1;
												$promo_img	= $this->Mod_promo->get_promo_image_by_promo_id($b['promo_id'])->result_array();
												foreach ($promo_img as $bi){
											?>
													<li>
													<img title="<?php echo $bi['nama_image'];?>" src="<?php echo base_url().'uploads/promo/'. $bi['image']?>" />
													</li>
											<?php
												}
											?>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="post-content">
										<h2>
											<a href="<?php echo base_url();?>promo/detail/<?php echo $b['judul_promo_seo'];?>">
												<?php echo $b['judul_promo'];?>
											</a>
										</h2>
										<p>
											<?php echo substr($b['deskripsi'], 0, 100);?> ...
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="post-meta">
										<span><i class="fa fa-calendar"></i> <?php echo nama_hari($b['tgl_input']).", ".tgl_indo($b['tgl_input']);?> </span>
										<span><i class="fa fa-user"></i> By <?php echo get_user_detail('nama_lengkap', $b['user_id']);?></span>
										<span><i class="fa fa-tag"></i>
											<?php
												$category = $this->Mod_kategori_promo->get_kategori_promo_by_kategori_promo_id($b['kategori_id'])->row_array();
											?>
											<a href="<?php echo base_url();?>promo/category/<?php echo $category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori'];?></a>
										</span>
										<a class="btn btn-xs btn-main-color pull-right" href="<?php echo base_url();?>promo/detail/<?php echo $b['judul_promo_seo'];?>">
											Read more...
										</a>
									</div>
								</div>
							</div>
						</article>
						
					<?php
						}
						
						echo $this->pagination->create_links();
					?>
						
					</div>
				</div>
						
						
				<div class="col-md-3">
					<aside class="sidebar">
					
						<?php echo form_open('promo/search');?>
							<div class="input-group">
								<input type="text" name="key" placeholder="Search..." class="form-control" required />
								<span class="input-group-btn">
									<button class="btn btn-main-color" type="submit">
										<i class="clip-search-3"></i>
									</button> 
								</span>
							</div>
						<?php echo form_close();?>
						
						<hr>
						
						<h4>Categories</h4>
						<ul class="nav nav-list blog-categories">
							<?php
								$no = 1;
								foreach ($promo_all_kategori as $bk){
									$jumlah	= $this->Mod_promo->get_promo_by_kategori_promo_id($bk['kategori_id'], 0)->num_rows();
							?>
									<li>
										<a href="<?php echo base_url();?>promo/category/<?php echo $bk['nama_kategori_seo'];?>"><?php echo $bk['nama_kategori'];?> (<font color='red'><?php echo $jumlah;?></font>)</a>
									</li>
							<?php
								}
							?>
						</ul>
						
						<div class="tabs">
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#newPosts"><i class="clip-new"></i> New</a>
								</li>
								<li>
									<a data-toggle="tab" href="#popularPosts"><i class="fa fa-star"></i> Popular</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="newPosts" class="tab-pane active">
									<ul class="post-list">
									
										<!--loooooping-->
										<?php
											foreach ($new as $n){
										?>
											<li>
												<div class="post-image">
													<div class="img-thumbnail">
														<?php
															$promo_img	= $this->Mod_promo->get_promo_image_by_promo_id($n['promo_id'])->row_array();
														?>
														<a href="<?php echo base_url();?>promo/detail/<?php echo $n['judul_promo_seo'];?>">
															<img width="50px" title="<?php echo $promo_img['nama_image'];?>" src="<?php echo base_url().'uploads/promo/'. $promo_img['image']?>" />
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="<?php echo base_url();?>promo/detail/<?php echo $n['judul_promo_seo'];?>">
														<?php echo $n['judul_promo'];?>
													</a>
													<div class="post-meta">
														<?php echo tgl_indo($n['tgl_input']);?>
													</div>
													<div class="post-meta">
														<?php
															$category = $this->Mod_kategori_promo->get_kategori_promo_by_kategori_promo_id($n['kategori_id'])->row_array();
														?>
														<a href="<?php echo base_url();?>promo/category/<?php echo $category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori'];?></a>
													</div>
												</div>
											</li>
										<?php
											}
										?>
										
									</ul>
								</div>
								
								
								<div id="popularPosts" class="tab-pane">
									<ul class="post-list">
										<!--loooooping-->
										<?php
											foreach ($popular as $p){
										?>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<?php
														$promo_img	= $this->Mod_promo->get_promo_image_by_promo_id($p['promo_id'])->row_array();
													?>
													<a href="<?php echo base_url();?>promo/detail/<?php echo $p['judul_promo_seo'];?>">
														<img width="50px" title="<?php echo $promo_img['nama_image'];?>" src="<?php echo base_url().'uploads/promo/'. $promo_img['image']?>" />
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="<?php echo base_url();?>promo/detail/<?php echo $p['judul_promo_seo'];?>">
													<?php echo $p['judul_promo'];?>
												</a>
												<div class="post-meta">
													<?php echo tgl_indo($p['tgl_input']);?>
												</div>
												<div class="post-meta">
													<?php
														$category = $this->Mod_kategori_promo->get_kategori_promo_by_kategori_promo_id($p['kategori_id'])->row_array();
													?>
													<a href="<?php echo base_url();?>promo/category/<?php echo $category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori'];?></a>
												</div>
											</div>
										</li>
										<?php
											}
										?>
										
									</ul>
								</div>
							</div>
						</div>
						
						<hr/>
						<p align='center'>
							<a href="<?php echo $adv_side->link;?>" target="_blank">
								<img src="<?php echo $adv_side->link_img;?>" alt="<?php echo $adv_side->nama_adv;?>" width='100%' border="0" />
							</a>
						</p>
					</aside>
				</div>
			</div>
			
			
			
			
			
		</div>
	</section>
	
</div>