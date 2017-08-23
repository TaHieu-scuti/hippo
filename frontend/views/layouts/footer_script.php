<?php
use frontend\assets\AppAsset;
use yii\helpers\Url;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>


<!-- bootstrap js -->
<script src="<?= Url::base(); ?>/theme/js/bootstrap.min.js"></script>
<!-- bootstrap js -->
<script src="<?= Url::base(); ?>/theme/js/bootstrap-select.min.js"></script>
<!-- owl.carousel js -->
<script src="<?= Url::base(); ?>/theme/js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="<?= Url::base(); ?>/theme/js/jquery-ui.min.js"></script>
<!-- Img Zoom js -->
<script src="<?= Url::base(); ?>/theme/js/jquery.simpleLens.min.js"></script>
<!-- fancybox js -->
<script src="<?= Url::base(); ?>/theme/js/jquery.fancybox.pack.js"></script>
<!-- jquery countdown js -->
<script src="<?= Url::base(); ?>/theme/js/jquery.countdown.min.js"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="<?= Url::base(); ?>/theme/js/jquery.nivo.slider.pack.js"></script>
<!-- meanmenu js -->
<script src="<?= Url::base(); ?>/theme/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="<?= Url::base(); ?>/theme/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<!-- scrollUp JS -->
<script src="<?= Url::base(); ?>/theme/js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="<?= Url::base(); ?>/theme/js/plugins.js"></script>
<!-- main js -->
<script src="<?= Url::base(); ?>/theme/js/main.js"></script>