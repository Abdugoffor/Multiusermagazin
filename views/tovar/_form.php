<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tovar */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-6">
        
    
<div class="tovar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cate_id')->dropdownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),'id','name'),['prompt'=>'Kategoryani Tanlang'])->label(false) ?>

    <?= $form->field($model, 'narx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skidka')->textInput(['maxlength' => true,'placeholder' => "Bor bo'lsa"]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'news')->radioList([0=>'Odatiy', 1=>'Yangi maxsulot']) ?>

    <?= $form->field($model, 'soni')->textInput(['type' => 'number','value'=>1,'min'=>1]) ?>

    <?//= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
        </div>
    
    </div>