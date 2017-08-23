<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Product;
$category = new Product;
$array1 = $category->getProuctByOne();
$array2 = $category->getProuctByTwo();
$array3 = $category->getProuctByThree();

?>

<div class="col-sm-3">
	<div class="right-widget">
		<div class="single-effect-2">
			<a href="#">
				<img src="<?= Url::base(); ?>../backend/uploads/MK4M2.jpg" alt="">
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
						<?php foreach ($array1 as $key => $product): ?>
							<li>
								<a href="<?= Url::to('/product/detail?id='.$product->id) ?>" class="thumbnail">
									<img src="<?= Url::base(); ?>../backend/uploads/<?= $product->public_image ? $product->public_image : 'default.png' ?>" alt="">
								</a>
								<div class="content">
									<a href="<?= Url::to('/product/detail?id='.$product->id) ?>"><?= $product->name ? $product->name : '' ?></a>
									<span class="amount"><?= $product->price ? number_format($product->price) : 0 ?> VND</span>
								</div>
							</li>
						<?php endforeach ?>						
					</ul>
				</div>
				<div id="latest" class="tab-pane fade" role="tabpanel">
					<ul class="product-list-widget">
						<?php foreach ($array2 as $key => $product): ?>
							<li>
								<a href="<?= Url::to('/product/detail?id='.$product->id) ?>" class="thumbnail">
									<img src="<?= Url::base(); ?>../backend/uploads/<?= $product->public_image ? $product->public_image : 'default.png' ?>" alt="">
								</a>
								<div class="content">
									<a href="<?= Url::to('/product/detail?id='.$product->id) ?>"><?= $product->name ? $product->name : '' ?></a>
									<span class="amount"><?= $product->price ? number_format($product->price) : 0 ?> VND</span>
								</div>
							</li>
						<?php endforeach ?>						
					</ul>
				</div>
				<div id="viewed" class="tab-pane fade in" role="tabpanel">
					<ul class="product-list-widget">
						<?php foreach ($array3 as $key => $product): ?>
							<li>
								<a href="<?= Url::to('/product/detail?id='.$product->id) ?>" class="thumbnail">
									<img src="<?= Url::base(); ?>../backend/uploads/<?= $product->public_image ? $product->public_image : 'default.png' ?>" alt="">
								</a>
								<div class="content">
									<a href="<?= Url::to('/product/detail?id='.$product->id) ?>"><?= $product->name ? $product->name : '' ?></a>
									<span class="amount"><?= $product->price ? number_format($product->price) : 0 ?> VND</span>
								</div>
							</li>
						<?php endforeach ?>	
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>