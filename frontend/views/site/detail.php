<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
/*urc="<?= Url::base(); ?>/theme/img/product/7.jpg">*/
$this->title = 'Detail';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="col-md-6" style=" height: 300px">
		<img src="<?= Url::base(); ?>/theme/img/product/7.jpg" width="250px" height="300px">
	</div>
	<div class="col-md-6 " style=" height: 300px">
		<div class="product-details-content">
			<h1>Binh Nuoc</h1>
            <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>

            </div>
            <a class="heading-title" href="#">Floral gold collar chunky &ndash; s5</a>
            <span class="price">
                <span class="amount">$18-20</span>
                -
                <span class="amount">$19.20</span>
            </span>
            
           	<input type="number" value="1" min="1" max="max-product()" class="price form-control" >
           	
           	<h5>Material: Wood</h5> 
			<h5>Local 	: Japanese</h5>
           	
      		
           	<input type="button" name="" value="Add cost">
           	<input type="button" name="" value=" set">
           	
       </div>	
     </div>	
	</div>
	<div class="row">
		<div  >
			<div class="col-md-1">
				<img src="<?= Url::base(); ?>../theme/img/logo/default.png" height="50px" width="50px" class="img-circle" >
			</div>
			<div class="col-md-11">
				<textarea class="form-control"></textarea>
			</div>
		</div>
		<div>
			<div class="facebook">
				<a href="#">
					<img src="">
				</a>
			</div>
			<div class="google">
					<a href="#">
						<img src="" alt="">
					</a>
			</div>
			<div class="youtube">
				<a href="">
					<img src="" alt="">
				</a>
			</div>
		</div>
		
	</div>


</div>