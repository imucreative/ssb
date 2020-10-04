		<div class="main-container">
			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Data Not Found</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active">DATA NOT FOUND</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="wrapper">
				<div class="container">
				
					<div class="row">
						<!-- start: 404 -->
						<div class="col-md-9 page-error">
							<div class="error-number teal">
								404
							</div>
							<div class="error-details col-sm-6 col-sm-offset-3">
								<h3>Oops! Data Not Found</h3>
								<p>
									Unfortunately the page you were looking for could not be found.
									<br>
									It may be temporarily unavailable, moved or no longer exist.
									<br>
									Check the URL you entered for any mistakes and try again.
									<br>
									
								</p>
								
							</div>
						</div>
						<!-- end: 404 -->
						
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