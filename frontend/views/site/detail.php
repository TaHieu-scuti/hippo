<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/*urc="<?= Url::base(); ?>/theme/img/product/7.jpg">*/
$this->title = 'Detail';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="modal-content">
	    <div class="modal-header" style="background: aliceblue; color:grey">
	    	<h3>Thông Tin Chi tiết sản phẩm</h3>
	    </div>
	    <div class="modal-body">
	        <div class="modal-product">
	            <div class="product-images">
	                <div class="main-image images">
	                    <img alt="" id="img_view" src="<?= Url::base(); ?>../backend/web/uploads/<?= $product->public_image ?>">
	                </div>
	            </div>
	            <div class="product-info">
	                <h1 id="title_view" style="color:blue"><?= $product->name ?></h1>
	                <div class="price-box">
	                    <p class="price"><span class="special-price"><span class="amount" id="price_view" style="color:red"><?= number_format($product->price) ?> VND</span></span></p>
	                </div>
	                <div class="price-box">
	                	Thuế VAT : <span style="color:red">Giá Trên chưa bao gồm thuế VAT</span>
	                </div>
	                <div class="price-box">
	                	Bảo Hành : <span>12 Tháng</span>
	                </div>
	                <div class="price-box">
	                	Thời gian vận chuyển : <span>7 ngày sau khi đặt hàng</span>
	                </div>
	                
	                <div class="quick-add-to-cart">
	                	<?php $form = ActiveForm::begin(); ?>
		                <div class="price-box">
							<?= 
								$form->field($model, 'status')
						        ->dropDownList(
						            [
						            	0 => ' Thanh Toán trực tiếp ',
						            	1 => ' hình thức Chuyển Khoản'
						            ]          // Flat array ('id'=>'label')    // options
						        )->label('Hình Thức Thanh Toán')
							?>
		                </div>
                        <div class="numbers-row">
                            <input type="number" id="french-hens" value="1">
                        </div>
                        <button class="single_add_to_cart_button" data-id="<?= $product->id ?>" type="button">Add to cart</button>
	                    <?php ActiveForm::end(); ?>
	                </div>
	                <div class="quick-desc" id="content_view">
	                    <?= $product->description ?>
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