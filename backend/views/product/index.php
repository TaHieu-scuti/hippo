<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-striped table-hover'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'company_id',
                'value' => function($model) {
                    return $model->company != NULL ?  $model->company->name : '';

                },
            ],
            [
                'attribute' => 'public_image',
                'value' => function($model) {
                    $url = Url::base().'/uploads/'.$model->public_image;
                    $html = '';
                    $html .= '<img src="'.$url.'" with="50px" height="50px" alt="">';
                    return $html;
                },
                'format' =>'raw'
            ],
            [
                'attribute' => 'user_id',
                'value' => function($model) {
                    return $model->user != NULL ?  $model->user->name : '';

                },
            ],
            'name',
            'title',
            'price',
            [
                'attribute' => 'category_id',
                'value' => function($model) {
                    return $model->category != NULL ?  $model->category->name : '';

                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {detail} {delete} ',
                'contentOptions' => [
                    'style' => 'text-align: right',
                ],
                'buttons' => [
                    'view' => function ($url) {
                        return Html::a('<i class="fa fa-eye fa-lg"></i>', $url, [
                            'title' => Yii::t('yii', 'View'),
                            'data-pjax' => '0',
                            'class' => 'btn btn-primary btn-xs',
                        ]);
                    },
                    'update' => function ($url) {
                        return Html::a('<i class="fa fa-pencil fa-lg"></i>', $url, [
                            'title' => Yii::t('yii', 'Update'),
                            'data-pjax' => '0',
                            'class' => 'btn btn-info btn-xs',
                        ]);
                    },
                    'detail' => function ($url) {
                        return Html::a('<i class="fa fa-info fa-lg"></i>', $url, [
                            'title' => Yii::t('yii', 'Detail'),
                            'data-pjax' => '0',
                            'class' => 'btn btn-info btn-xs',
                        ]);
                    },
                    'delete' => function ($url) {
                        return Html::a('<i class="fa fa-times fa-lg"></i>', $url, [
                            'title' => Yii::t('yii', 'Delete'),
                            'data-confirm' => Yii::t('yii', '削除します。よろしいですか？'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                            'class' => 'btn btn-danger btn-xs',
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
