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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
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
            'description:ntext',
            'price',
            // 'product_cnt',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',
            [
                'attribute' => 'category_id',
                'value' => function($model) {
                    return $model->category != NULL ?  $model->category->name : '';

                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
