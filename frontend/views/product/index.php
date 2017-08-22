<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'company_id',
            'user_id',
            'name',
            'title',
            // 'description:ntext',
            // 'price',
            // 'product_cnt',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',
            // 'category_id',
            // 'public_image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
