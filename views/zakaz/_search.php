<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZakazSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ism') ?>

    <?= $form->field($model, 'tel') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'tovar_id') ?>

    <?php // echo $form->field($model, 'soni') ?>

    <?php // echo $form->field($model, 'sum') ?>

    <?php // echo $form->field($model, 'date_z') ?>

    <?php // echo $form->field($model, 'date_y') ?>

    <?php // echo $form->field($model, 'activ') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
