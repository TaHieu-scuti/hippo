<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php foreach ($categories as  $category): ?>
    <div class="product-item">
        <?php if (!empty($category->products)): ?>
            <div class="section-title-3">
                <h2 id="category_name_<?= $category->id ?>"><?= $category->name ?></h2>
            </div>
        <?php endif ?>            
        <div class="product-list-curosel-2 indicator-style">
            <?php foreach ($category->products as $key => $product): ?>
                <?php if (is_null($product->deleted_at) && (int)$product->status === 0): ?>
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
                            <a class="heading-title" href="#"><?= $product->name ?></a>
                            <span class="price">
                                <span class="amount"><?= number_format($product->price) ?> VND</span>
                            </span>
                            <button type="button" class="btn btn-danger" data-id="<?= $product->id ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm Vào giỏ Hàng</button>
                        </div>
                    </div>
                </div>
                <?php endif ?> 
            <?php endforeach ?>
        </div>
    </div>
<?php endforeach ?>
