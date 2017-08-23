<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('@app/views/layouts/_header_html.php', []) ?>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $this->render('@app/views/layouts/header.php', []) ?>
<section class="main-content-eight">
    <!-- Product Sell Area Start -->
    <div class="product-sell-area section-padding">
        <div class="container">
            <div class="row">
                <?= $this->render('@app/views/layouts/nav.php', []) ?>
                <div class="col-md-9">
                    <?= $content ?>
                </div>                
            </div>
        </div>
    </div>
</section>
<?= $this->render('@app/views/layouts/footer.php', []) ?>
<?= $this->render('@app/views/layouts/footer_script.php', []) ?>
<?php $this->endBody() ?>
</body>

<script>
    $('.Addcart').click(function(){
        var id = $(this).data('id');
        var num = 1;
        var number = $('#number').val();
        if (parseInt(number) > 0 ) {
            num = number
        }
        $.ajax({
            type: 'post',
            url: '/cart/add-cart',
            dataType: 'json',
            data: {
                id : id,
                number: num
            },
            success: function(data) {
                toastr.success('Bạn đã thêm giỏ hàng thành công');
            },
            error: function(data) {
                toastr.error('Đã sảy ra lỗi khi thêm vào giỏ hàng');
            }
        })
    });

    
</script>
</html>
<?php $this->endPage() ?>
