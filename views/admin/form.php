
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="main-panel">
<div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Base Form Control</div>
                                    </div>
                                    <div class="card-body">
                                          <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true,]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cate_id')->dropdownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(),'id','name'),['prompt'=>'Kategoryani Tanlang','class'=>'form-control form-control-sm'])->label(false) ?>

    <?= $form->field($model, 'narx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skidka')->textInput(['placeholder' => "Bor bo'lsa"]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'news')->dropDownList([ '0'=>'Oddiy', '1'=>'Yangi', ], ['class'=>'form-control form-control-sm']) ?>
    <?= $form->field($model, 'soni')->textInput(['type' => 'number','min'=>1]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>>