<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?= $this->render('@app/views/partials/header.php', []) ?>
    <?php $this->head() ?>
</head>
<?= $this->beginBody() ?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <?= $this->render('@app/views/partials/header-top.php', []) ?>
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
              
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <div class="page-content-col">
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12 col-sm-12">
                                        <div class="portlet light portlet-fit bordered">
                                            <?= $content?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->

                    <div class="modal fade bs-modal-lg" id="portlet-config" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Phản hồi bài số 1</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="portlet box blue ">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-gift"></i>Thông tin</div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <form action="#" class="form-horizontal form-bordered">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Tiêu đề</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" placeholder="Tiêu đề phản hồi" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Người nhận</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control">
                                                                        <option value="">Tất cả quản lý</option>
                                                                        <option value="">Quản lý 1</option>
                                                                        <option value="">Quản lý 2</option>
                                                                    </select>
                                                                    <span class="help-block"> Chọn người xử lý phản hồi. </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Nội dung
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-9">
                                                                    <textarea class="wysihtml5 form-control" rows="6" name="editor1" data-error-container="#editor1_error"></textarea>
                                                                    <div id="editor1_error"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Gửi đi</button>
                                                                            <button type="button" class="btn default">Xoá</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng</button>
                                    <!-- <button type="button" class="btn green">Lưu thay đổi</button> -->
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright"> 2017 &copy; Jtrain Study By
                    <a target="_blank" href="http://mhsoft.vn">MHsoft</a>
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK NAV -->
        @include('admin.layouts.partials.quick-nav')

        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
            <script src="../assets/global/plugins/respond.min.js"></script>
            <script src="../assets/global/plugins/excanvas.min.js"></script>
            <script src="../assets/global/plugins/ie8.fix.min.js"></script>
        <![endif]--></body>

<?= $this->endBody() ?>
    <?= $this->render('@app/views/partials/script.php', []) ?>

</html>
<?php $this->endPage() ?>
