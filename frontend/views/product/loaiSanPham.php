<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <?php foreach ($category->products as $key => $product): ?>
        <div class=" indicator-style category_product">
            <div class="single-product-inner">
                <div class="single-product">
                    <div class="product-thumbnail-wrapper">
                        <a href="#" class="border-none">
                            <div class="product-image">
                                <img alt="" src="<?= Url::base(); ?>../backend/web/uploads/<?= $product->public_image ?>" width="170px" height="200px">
                            </div>
                        </a>
                        <div class="product-button-list">
                            <div class="add-to-cart-list">
                                <a class="btn-product btn-cart" href="#">
                                    <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-button-group">
                                <a class="add-to-wishlist" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                <a class="add-to-compare" href="#"><i aria-hidden="true" class="fa fa-refresh"></i></a>
                                <a href="#" title="Quick view" data-toggle="modal" class="btn-quickview" data-target="#productModal"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details-content text-center">
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="heading-title" href="#" title="<?= $product->name ?>"><?= strlen($product->name) > 40 ? substr($product->name, 0, 40).'...' :  $product->name?></a>
                        <span class="price">
                            <span class="amount"><?= number_format($product->price) ?> VND</span>
                        </span>
                        <button type="button" class="btn btn-danger Addcart" data-id="<?= $product->id ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm Vào giỏ Hàng</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
