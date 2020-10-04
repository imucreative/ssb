<div class="main-container">
	<section class="page-top">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1>Detail Product</h1>
			</div>
			<div class="col-md-8 col-sm-8">
				<ul class="pull-right breadcrumb">
					<li><a href="<?php echo base_url();?>">HOME</a></li>
					<li><a href="<?php echo base_url()."category/index/".$category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori'];?></a></li>
					<li class="active"><?php echo $product['nama_product']?></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			<div class="portfolio-title">
				<div class="row">
					<div class="col-md-12 center">
						<h2 class="shorter"><?php echo $product['nama_product']?></h2>
					</div>
				</div>
			</div>
			<hr class="tall">
			<div class="row">
				<div class="col-md-6">
					<div class="flexslider" data-plugin-options='{"directionNav":true}'>
						<ul class="slides">
							<?php 
								foreach($product_img as $img){
							?>
									<li>
										<img title="<?php echo $img['nama_image'];?>" src="<?php echo base_url().'uploads/produk/'. $img['image']?>" />
									</li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-md-12">
								<ul class="pull-right">
									<li><i class="fa fa-calendar"></i><?php echo nama_hari($product['tgl_input']).", ".tgl_indo($product['tgl_input']);?></li>
									
									<li><i class="fa fa-tags"></i> <a href="<?php echo base_url()."category/index/".$category['nama_kategori_seo'];?>"><?php echo $category['nama_kategori']?></a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<h4>Description</h4>
					<p class="taller">
						<blockquote><?php echo $product['keterangan'];?></blockquote>
					</p>
					<a data-toggle="modal" class="btn btn-blue btn-squared" role="button" href="#myModal1">
						<i class="clip-cart"></i> Information
					</a>
					<a style="background-color:#2f7e49;padding:5px;color:#FFF;" class="btn btn-main-color btn-squared" href="https://api.whatsapp.com/send?phone=<?php echo get_data_toko('wa');?>&amp;text=<?php echo $product['nama_product'];?>%0A<?php echo base_url()."product/".$product['nama_product_seo'];?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=500,width=600');return false;">
						<i class="fa fa-comment-o"></i> WhatsApp
					</a>
					<a class="btn btn-bricky btn-squared" href="tel:<?php echo get_data_toko('hp');?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=500,width=600');return false;">
						<i class="fa fa-phone"></i> Call
					</a>
					<span data-appear-animation-delay="800" data-appear-animation="rotateInUpLeft" class="arrow hlb appear-animation rotateInUpLeft appear-animation-visible" style="animation-delay: 800ms;"></span>
					<ul class="portfolio-details list-unstyled">
						<?php
						/*
						<li>
							<p><strong>Price:</strong></p>
							<p><blockquote>Rp. <?php echo nominal($product['harga']);?></blockquote></p>
						</li>
						*/
						?>
						<li>
							<p><strong>Share</strong></p>
							<p>
							<?php
								$url_share ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							?>
								
								<a style="background-color:#3B5998;padding:10px;color:#FFF;" class="fa fa-facebook-square" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_share;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=500,width=600');return false;"> Facebook</a>

								<a style="background-color:#16A7F0;padding:10px;color:#FFF;" class="fa fa-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $product['nama_product'];?>&url=<?php echo $url_share;?>&via=KopkarHyundai" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=500,width=600');return false;" > Twitter</a>
								
								
							
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="wrapper padding50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="center">Some of Our Product</h1>
					<hr>
				</div>
				<?php
					foreach($product_sama as $prodSama){
				?>
					<div class="col-md-3">
						<div class="flexslider" data-plugin-options='{"directionNav":true, "controlNav": false}'>
							<ul class="slides">
								<?php 
									//foreach($product_sama_img as $img){
								?>
										<li>
											<a class="thumb-info" href="<?php echo base_url()."product/".$prodSama['nama_product_seo'];?>">
												<img class="img-responsive" title="<?php echo $prodSama['nama_product'];?>" src="<?php echo base_url().'uploads/produk/'. $prodSama['image']?>" />
												<span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
											</a>
										</li>
								<?php
									//}
								?>
							</ul>
						</div>
						<h4><a href="<?php echo base_url()."product/".$prodSama['nama_product_seo'];?>">
							<?php echo $prodSama['nama_product'];?>
						</a></h4>
						
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	
</div>
		
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="clip-cart"></i> Contact Person</h4>
			</div>
			<div class="modal-body">
				<p>
					<i class="clip-location"></i> <strong>Address.</strong> <?php echo get_data_toko('alamat');?>
				</p>
				<p>
					<i class="clip-phone"></i> <strong>Telp.</strong> <?php echo get_data_toko('telp');?>
				</p>
				<p>
					<i class="fa fa-comment-o"></i> <strong>WhatsApp.</strong> <?php echo get_data_toko('hp');?>
				</p>
				<p>
					<i class="fa fa-envelope"></i> <strong>Email.</strong> <a href="mailto:<?php echo get_data_toko('email');?>"><?php echo get_data_toko('email');?></a>
				</p>
			</div>
			<div class="modal-footer">
				<button aria-hidden="true" data-dismiss="modal" class="btn btn-default"><i class="fa fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>