<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;


AppAsset::register($this);
?>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>General Online Shop</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="<?= Url::base(); ?>/theme/img/favicon/home-2.ico">

<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>

<!-- all css here -->
<!-- style css -->
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/bootstrap-select.min.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/animate.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/jquery.simpleLens.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/meanmenu.min.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/nivo-slider.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/owl.carousel.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/style.css">
<link rel="stylesheet" href="<?= Url::base(); ?>/theme/css/responsive.css">
<!-- modernizr css -->
<script src="<?= Url::base(); ?>/theme/js/modernizr-2.8.3.min.js"></script>