<?php
use yii\helpers\Url;
?>

<section class="newsletter-area newsletter-8">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-xs-12">
				<div class="newsletter-form">
					<div class="footer-top-widget">
						<h3 class="newsletter-title">Newsletter Sign up</h3>
						<span>We will only send good news</span>
					</div>
					<div class="newsletter-subscribe">
						<input type="text" placeholder="enter your email address"/>
						<button type="submit">
							<i aria-hidden="true" class="fa fa-paper-plane"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="follow-me">
					<div class="footer-top-widget">
						<h3 class="newsletter-title">Follow</h3>
					</div>
					<div class="social-icons">
						<ul>
							<li class="icon-facebook">
								<a title="Become our fan" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="icon-twitter">
								<a title="Follow us" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="icon-google">
								<a title="Get updates" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li class="icon-pin">
								<a title="See Us" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- News Letter Area End -->
<!-- Footer Area Start -->
<footer class="footer-area footer-area-eight">
	<div class="footer-top-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="single-footer-widget">
						<h3 class="footer-widget-title">CONTACT</h3>
						<div class="text-widget">
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>Ngõ 1 Bùi xương trạch, Thanh Xuân, Hà nội</span>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<span>0968 706 683</span>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<span>hieutq@scuti.asia</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-footer-widget">
						<h3 class="footer-widget-title">About Super Store</h3>
						<div class="text-widget color-hover">
							<ul>
								<li><a href="#">Meet the team</a></li>
								<li><a href="#">Blogs</a></li>
								<li><a href="#">Our Partner</a></li>
								<li><a href="#">Job & Careerson</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-footer-widget">
						<h3 class="footer-widget-title">Why Buy From Us</h3>
						<div class="text-widget color-hover">
							<ul>
								<li><a href="#">Shipping & returns</a></li>
								<li><a href="#">Secure Shopping</a></li>
								<li><a href="#">Free Shopping Program</a></li>
								<li><a href="#">Affiliates</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-footer-widget">
						<h3 class="footer-widget-title">Assistance</h3>
						<div class="text-widget">
							<ul>
								<li><a href="#">FAQS</a></li>
								<li><a href="#">Shipping Information</a></li>
								<li><a href="#">Need help? Just ask us</a></li>
								<li><a href="#">Cuctomer Support</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="col-sm-6">
				<p>Copyright <a target="_blank" href="http://bootexperts.com/">Ta Quang Hieu</a> developer</p>
			</div>
			<div class="col-sm-6">
				<div class="payment">
					<ul>
						<li>
							<a href="">
								<img src="<?= Url::base(); ?>/theme/img/payment/1.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?= Url::base(); ?>/theme/img/payment/2.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?= Url::base(); ?>/theme/img/payment/3.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?= Url::base(); ?>/theme/img/payment/4.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?= Url::base(); ?>/theme/img/payment/5.jpg" alt="" />
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<div id="quickview-wrapper" class="quickview-8">
	            <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" id="img_view" src="">
                            </div>
                        </div>
                        <div class="product-info">
                            <h1 id="title_view"></h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount" id="price_view"></span></span></p>
                            </div>
                            <a href="" class="see-all" id="see_all">Thông tin chi tiết</a>
                            <div class="quick-desc" id="content_view">
                                
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$('.view_product').click(function() {
		var id = $(this).data('id');
		var content = $(this).data('content');
		var img = $('#img_'+id).attr('src');
		var title = $('#title_'+id).text();
		var price = $('#price_'+id).text();
		$('#see_all').attr('href', '/product/detail?id='+id);
		$('#img_view').attr('src', img);
		$('#title_view').text(title);
		$('#price_view').text(price);
		$('#content_view').text(content);
	});
</script>