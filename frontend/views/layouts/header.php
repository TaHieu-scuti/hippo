<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\models\LoginForm;
use common\models\Category;
$model = new LoginForm;

?>

<header class="header-area header-2 header-8">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 hidden-xs">
					<div class="header-top-left">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 hidden-xs">
					<div class="header-top-right">
						<ul class="list-inline user-menu pull-right">
							<li class="menu-item wish-list ">
								<a href="wishlist.html">
									<i class="fa fa-heart"></i> Wishlist (0)
								</a>
							</li>
							<?php if (Yii::$app->user->isGuest) :?>
								<li class="menu-item log-in">
									<a href="javascript:void(0)">
									   <i class="fa fa-user"></i> Login
									</a>
									<div class="login-down">
										<?php $form = ActiveForm::begin(['action' => '/site/login','id' => 'login-form']); ?>
											<div class="form-wrapper-body">
												

									                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

									                <?= $form->field($model, 'password')->passwordInput() ?>

									                <?= $form->field($model, 'rememberMe')->checkbox() ?>

									                <div style="color:#999;margin:1em 0">
									                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
									                </div>

									            
											</div>
											<div class="form-wrapper-footer">
												<div class="form-group">
								                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
								                </div>
												<p>
													<span>New Customer ?</span>
													<span>
														<a href="<?= Url::to(['/site/signup']) ?>" class="register">Sign up</a>
													</span>
												</p>
											</div>
										<?php ActiveForm::end(); ?>
									</div>
								</li>
							<?php else :?>
								<li class="dropdown menu-item log-in">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		                                <?= Html::encode(Yii::$app->user->identity->username) ?>
		                                <i class="fa fa-caret-down" aria-hidden="true"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="<?= Url::to(['my/index']) ?>">My Page</a></li>
										<li role="separator" class="divider"></li>
										<li>
											<?= Html::beginForm(['/site/logout'], 'post') ?>
											<a href="#" title="">
												<?= Html::submitButton(
									                'Logout',
									                ['class' => 'btn btn-link logout']
									            ) ?>
											</a>								            
								            <?= Html::endForm()?>							            	
							            </li>
									</ul>
								</li>
								<li class="menu-item cart-list ">
									<a href="<?= Url::to('/cart/list-cart') ?>">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng <font class="badge" style="color:red"><?= isset(Yii::$app->session['cart']) ? count(Yii::$app->session['cart']) : 0 ?></font>
									</a>
								</li>
							<?php endif ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-8">
					<div class="header-logo">
						<a href="<?= Url::to('/') ?>">
							<img src="<?= Url::base(); ?>/theme/img/logo/logo.png" alt="" />
						</a>
					</div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-4">
					<div class="hidden-right-header">
						<ul>
							<li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
							<li><a href="my-account.html"><i class="fa fa-user"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="main-menu">
						<nav>
							<ul>
								<li class="expand">
									<a href="<?= Url::to('/') ?>">
										<span class="menu-label">Trang Chủ</span>
									</a>
								</li>
								<?php if (!Yii::$app->user->getIsGuest()): ?>
									<li>
										<a href="<?= Url::to('/cart/list-cart') ?>">
											<span class="menu-label">Giỏ Hàng</span>
										</a>
									</li>
								<?php endif ?>								
								<li>
									<a href="<?= Url::to('/site/contact') ?>">
										<span class="menu-label">Liên Hệ</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- Mobile Menu Start -->
				<div class="mobile-menu-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul>
											<li><a href="index.html">Home</a>
												<ul>
													<li><a href="index.html">Home Version 1</a></li>
													<li><a href="index-2.html">Home Version 2</a></li>
													<li><a href="index-3.html">Home Version 3</a></li>
												</ul>
											</li>
											<li><a href="#">Products</a></li>
											<li><a href="#">Page</a>
												<ul>
													<li><a href="#">Categories 01</a>
														<ul>
															<li><a href="contact.html">Contact</a></li>
															<li><a href="price.html">Picing table</a></li>
															<li><a href="team-member.html">Team member</a></li>
														</ul>
													</li>
													<li><a href="#">Categories 02</a>
														<ul>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu End -->
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="home-2-header-bottom">
				<div class="row clearfix">
					<div class="col-sm-3 hidden-xs">
						<div class="header-cate-color">
							<div class="left-category-menu">
								<nav class="category-menu">
									<ul>
										<li>
											<a href="#" class="category-label">
												<h2>Thể Loại máy tính</h2>
											</a>
											<ul class="category-items">
												<?php foreach (Category::getAllCategory() as $key => $category): ?>
													<a href="<?= Url::to('/product/category?id='.$category->id) ?>" data-id="<?= $category->id ?>" class="categoriesId">
													<li class="menu-item electronic-item">
														<?= $category->name ?>
													</li>
													</a>
												<?php endforeach ?>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-10">
						<!-- <div class="search-by-category">
							<div class="search-container">
								<select class="selectpicker" data-live-search="true">
									<?php foreach (Category::getAllCategory() as $key => $category): ?>
										<option data-tokens="<?= $category->name ?>"><a href="<?= Url::to('/product/category?id='.$category->id) ?>" data-id="<?= $category->id ?>" class="categoriesId"><?= $category->name ?></a></option>
								  	<?php endforeach ?>
								</select>
							</div>
							<div class="search-inner">
								<input type="text" placeholder="Search here..." />
								<button type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div> -->
					</div>
					<div class="hidden-lg hidden-md hidden-sm col-xs-2">
						<div class="mobile-cart-inner pull-right">
							<a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
							<span class="num-of-item">02</span>
						</div>
					</div>
<!-- 					<div class="col-sm-3 hidden-xs">
						<div class="shopping-cart-info clearfix">
							<div class="shopping-cart">
								<div class="shopping-cart-control">
									<a href="#">
										<i class="fa fa-shopping-cart"></i>
										<span class="cart-size-value">
											2 Items -
											<span class="amount">$154.25</span>
										</span>
									</a>
									<div class="shopping-cart-down">
										<div class="shopping-down-body">
											<ul class="cart-list">
												<li class="media first">
													<a href="#" class="pull-left">
														<img src="<?= Url::base(); ?>/theme/img/shop/s-1.jpg" alt="" />
													</a>
													<div class="cart-item-wrapper">
														<a href="#">Collarless playsuit white shirt spearmint</a>
														<span class="quantity"><span class="amount">$44.25</span> × 1</span>
														<a title="Remove this item" class="remove" href="#"><i class="fa fa-times-circle"></i></a>
													</div>
												</li>
												<li class="media">
													<a href="#" class="pull-left">
														<img src="<?= Url::base(); ?>/theme/img/shop/s-2.jpg" alt="" />
													</a>
													<div class="cart-item-wrapper">
														<a href="#">Collarless playsuit white shirt spearmint</a>
														<span class="quantity"><span class="amount">$44.25</span> × 1</span>
														<a title="Remove this item" class="remove" href="#"><i class="fa fa-times-circle"></i></a>
													</div>
												</li>
											</ul>
											<p class="total">
												<span>Subtotal:</span>
												<span class="amount">$154.25</span>
											</p>
										</div>
										<div class="shopping-down-footer">
											<p class="buttons">
												<a href="#" class="btn-default btn-shopping-cart">view cart</a>
												<a href="#" class="btn-default btn-shopping-cart">Checkout</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<div class="slider-area-8">
			<!-- Slider Start -->
			<div class="slider-container">
				<!-- Slider Image -->
				<div id="mainSlider" class="nivoSlider slider-image">
					<img src="<?= Url::base(); ?>/theme/img/slider/mac2.png" alt="main slider" title="#htmlcaption1"/>
					<img src="<?= Url::base(); ?>/theme/img/slider/game.jpg" alt="main slider" title="#htmlcaption2"/>
					<img src="<?= Url::base(); ?>/theme/img/slider/mac3.png" alt="main slider" title="#htmlcaption3"/>
				</div>
			</div>
			<!-- Slider End-->
		</div>
	</div>
</header>