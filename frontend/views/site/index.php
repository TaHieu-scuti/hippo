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
                                    <img alt="" id="img_<?= $product->id ?>" src="<?= Url::base(); ?>../backend/web/uploads/<?= $product->public_image ?>" width="170px" height="200px">
                                </div>
                            </a>
                            <div class="product-button-list">
                                <?php if (!Yii::$app->user->getIsGuest()): ?>
                                    <div class="add-to-cart-list">
                                        <a class="btn-product btn-cart " href="javascript:void(0)">
                                            <i aria-hidden="true" class="fa fa-shopping-cart Addcart" data-id="<?= $product->id ?>"></i>
                                        </a>
                                    </div>
                                <?php endif ?>                                
                                <div class="product-button-group">
                                    <a class="add-to-compare" href="<?= Url::to('/product/detail?id='.$product->id ) ?>"><i class="fa fa-info" aria-hidden="true" title="Thông tin chi tiết sản phẩm"></i></a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-content="<?= $product->description ?>" data-id="<?= $product->id ?>" class="btn-quickview view_product" data-target="#productModal"><i class="fa fa-search" aria-hidden="true"></i></a>
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
                            <a class="heading-title" id="title_<?= $product->id ?>" href="#"><?= strlen($product->name) > 40 ? substr($product->name, 0, 40).'...' :  $product->name?></a>
                            <span class="price">
                                <span id="price_<?= $product->id ?>" class="amount"><?= number_format($product->price) ?> VND</span>
                            </span>
                            <?php if (!Yii::$app->user->getIsGuest()): ?>
                                <button type="button" class="btn btn-danger Addcart" data-id="<?= $product->id ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm Vào giỏ Hàng</button>
                            <?php else :?>
                                <a href="<?= Url::to('/product/detail?id='.$product->id ) ?>" title="" class="btn btn-danger">Xem chi tiết</a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php endif ?> 
            <?php endforeach ?>
        </div>
    </div>
<?php endforeach ?>


