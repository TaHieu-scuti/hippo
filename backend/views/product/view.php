<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
