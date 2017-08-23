<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Company;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'company_id')->dropDownList(Company::getCompanies()) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'category_id')->dropDownList(Category::getCategory()) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'id' => 'title']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => '6','id' => 'description']) ?>

    <?php echo froala\froalaeditor\FroalaEditorWidget::widget([
        'model' => $model,
        'attribute' => 'content',
        'options'=>[// html attributes
            'id'=>'content'
        ],
        'clientOptions'=>[
            'toolbarInline'=> false,
            'theme' =>'royal',//optional: dark, red, gray, royal
            'language'=>'en_gb' // optional: ar, bs, cs, da, de, en_ca, en_gb, en_us ...
        ]
    ]);; ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_cnt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'public_image')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'status')->dropDownList([\Yii::$app->params['status']]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
   
</div>

