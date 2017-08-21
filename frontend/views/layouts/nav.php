<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;


?>

<div class="col-sm-3">
	<div class="right-widget">
		<div class="single-effect-2">
			<a href="#">
				<img src="<?= Url::base(); ?>/theme/img/widget/5.png" alt="">
				<span class="s s1"></span>
				<span class="s s2"></span>
				<span class="s s3"></span>
				<span class="s s4"></span>
				<span class="s s5"></span>
				<span class="s s6"></span>
				<span class="s s7"></span>
				<span class="s s8"></span>
				<span class="s s9"></span>
				<span class="s s10"></span>
				<span class="s s11"></span>
				<span class="s s12"></span>
				<span class="s s13"></span>
				<span class="s s14"></span>
				<span class="s s15"></span>
			</a>
		</div>
		<div class="single-effect-2">
			<a href="#">
				<img src="<?= Url::base(); ?>/theme/img/widget/6.png" alt="">
				<span class="s s1"></span>
				<span class="s s2"></span>
				<span class="s s3"></span>
				<span class="s s4"></span>
				<span class="s s5"></span>
				<span class="s s6"></span>
				<span class="s s7"></span>
				<span class="s s8"></span>
				<span class="s s9"></span>
				<span class="s s10"></span>
				<span class="s s11"></span>
				<span class="s s12"></span>
				<span class="s s13"></span>
				<span class="s s14"></span>
				<span class="s s15"></span>
			</a>
		</div>
		<div class="widget-tab first-widget-tab">
			<div class="widget-tab-menu">
				<!--  Nav tabs -->
				<ul role="tablist" class="tab-nav-menu">
					<li class="first-item active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="new" href="#new" aria-expanded="false">New</a></li>
					<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="latest" href="#latest" aria-expanded="true">Latest</a></li>
					<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="viewed" href="#viewed">viewed</a></li>
				</ul>
			</div>
			<div class="widget-tab-content tab-content">
				<div id="new" class="tab-pane fade in active" role="tabpanel">
					<ul class="product-list-widget">
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/4.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Loafer Cara D.skirt collarless</a>
								<span class="amount">$125.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/5.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Minimal black ribbed bandeau</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<span class="amount">$310.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/6.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Jil sander vasari white shirt</a>
								<span class="amount">$120.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/7.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Cashmere Saint Laurent &ndash; s4</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<span class="amount">$18.20</span>
								-
								<span class="amount">$19.20</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/8.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Oversized sweatshirt</a>
								<del class="amount">$12.00</del>
								-
								<span class="amount">$10.00</span>
							</div>
						</li>
					</ul>
				</div>
				<div id="latest" class="tab-pane fade" role="tabpanel">
					<ul class="product-list-widget">
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/1.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Nullam sodales porttitor sapien</a>
								<span class="amount">$234.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/2.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Etiam convallis enim a libero accumsan</a>
								<span class="amount">$123.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/3.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam simple &ndash; s15</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<span class="amount">$400.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/9.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam sample &ndash; s2</a>
								<span class="amount">$22.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/10.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam sample &ndash; s3</a>
								<span class="amount">$42.00</span>
							</div>
						</li>
					</ul>
				</div>
				<div id="viewed" class="tab-pane fade in" role="tabpanel">
					<ul class="product-list-widget">
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/14.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Sander varari white shirt</a>
								<span class="amount">$155.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/8.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Oversized sweatshirt</a>
								<span class="price">
									<del class="amount">$12.00</del>
									-
									<span class="amount">$10.00</span>
								</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/1.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Nullam sodales porttitor sapien</a>
								<span class="amount">$234.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/15.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam sample &ndash; s2</a>
								<span class="amount">$22.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/10.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam sample &ndash; s3</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<span class="amount">$42.00</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="single-effect-2">
			<a href="#">
				<img src="<?= Url::base(); ?>/theme/img/widget/1.jpg" alt="">
				<span class="s s1"></span>
				<span class="s s2"></span>
				<span class="s s3"></span>
				<span class="s s4"></span>
				<span class="s s5"></span>
				<span class="s s6"></span>
				<span class="s s7"></span>
				<span class="s s8"></span>
				<span class="s s9"></span>
				<span class="s s10"></span>
				<span class="s s11"></span>
				<span class="s s12"></span>
				<span class="s s13"></span>
				<span class="s s14"></span>
				<span class="s s15"></span>
			</a>
		</div>
		<div class="single-effect-2">
			<a href="#">
				<img src="<?= Url::base(); ?>/theme/img/widget/7.jpg" alt="">
				<span class="s s1"></span>
				<span class="s s2"></span>
				<span class="s s3"></span>
				<span class="s s4"></span>
				<span class="s s5"></span>
				<span class="s s6"></span>
				<span class="s s7"></span>
				<span class="s s8"></span>
				<span class="s s9"></span>
				<span class="s s10"></span>
				<span class="s s11"></span>
				<span class="s s12"></span>
				<span class="s s13"></span>
				<span class="s s14"></span>
				<span class="s s15"></span>
			</a>
		</div>
		<div class="widget-tab first-widget-tab">
			<div class="widget-tab-menu">
				<!--  Nav tabs -->
				<ul role="tablist" class="tab-nav-menu">
					<li class="first-item active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="games" href="#games" aria-expanded="false">games</a></li>
					<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="apps" href="#apps" aria-expanded="false">apps</a></li>
					<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="softwares" href="#softwares" aria-expanded="true">softwares</a></li>
				</ul>
			</div>
			<div class="widget-tab-content tab-content">
				<div id="games" class="tab-pane fade in active" role="tabpanel">
					<ul class="product-list-widget">
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/1.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Nullam sodales porttitor sapien</a>
								<span class="amount">$234.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/2.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Etiam convallis enim a libero accumsan</a>
								<span class="amount">$123.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/3.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam simple &ndash; s15</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<span class="amount">$400.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/9.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Fusce aliquam sample &ndash; s2</a>
								<span class="amount">$22.00</span>
							</div>
						</li>
					</ul>
				</div>
				<div id="apps" class="tab-pane fade" role="tabpanel">
					<ul class="product-list-widget">
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/4.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Loafer Cara D.skirt collarless</a>
								<span class="amount">$123.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/5.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Minimal black ribbed bandeau</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="amount">$310.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/6.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Jil sander vasari white shirt</a>
								<span class="amount">$120.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/7.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Cashmere Saint Laurent &ndash; s4</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<span class="amount">$18.20</span>
								<span class="amount">$19.20</span>
							</div>
						</li>
					</ul>
				</div>
				<div id="softwares" class="tab-pane" role="tabpanel">
					<ul class="product-list-widget">
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/14.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Sander varari white shirt</a>
								<span class="amount">$155.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/8.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Oversized sweatshirt</a>
								<span class="price">
									<del class="amount">$12.00</del>
									-
									<span class="amount">$10.00</span>
								</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/1.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Nullam sodales porttitor sapien</a>
								<span class="amount">$234.00</span>
							</div>
						</li>
						<li>
							<a href="#" class="thumbnail">
								<img src="<?= Url::base(); ?>/theme/img/product/widget/15.jpg" alt="">
							</a>
							<div class="content">
								<a href="#">Navy blue center part leather &ndash; s1</a>
								<div class="ratting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<span class="amount">$233.00</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>