<?
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<style type="text/css">
	.imgsty{
		border-radius: 10px 10px 20% 0;
	}
	.top{
		margin-top: 20px;
	}
</style>

<div class="top">

<div class="blog-list list-style">
	<div class="row">
<div class="col-6">
	<div class="blog-item">
		<div class="post-format">
			<a href="#">
				<img src="<?=$model->img?>" width="70%" class='imgsty'>
			</a>
		</div>
		<div class="post-info">
			
			<div class="main-info-post">
<h3><?=$model->name?><p id='narx'> 
Narxi : <?=$model->narx?>$</p></h3>
<p>
<?=$model->text?>
</p>
<i><?=$model->date?></i>
			</div>
		</div>
	</div>
</div>

<div class="col-6">
	
		<h2>Buyurtma berish</h2>

            <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($models, 'ism')->textInput(['class'=>'form-control baxo ']) ?>
    <?= $form->field($models, 'tel')->textInput(['class'=>'form-control baxo ','placeholder' => "+998 94 999 99 99"]) ?>

    <?= $form->field($models, 'tovar_id')->hiddenInput(['value'=>$model->id])->label(false) ?>
    <?= $form->field($models, 'user_id')->hiddenInput(['value'=>$model->user_id])->label(false) ?>

    <?= $form->field($models, 'soni')->textInput(['class'=>'form-control baxo ' ,'type' => 'number','min'=>1 ,'max'=>$model->soni , 'id' => 'son']) ?>

    <?= $form->field($models, 'sum')->hiddenInput(['id' => 'sum'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-success btn-lg w-100']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	</div>
	</div>
</div>
</div>

</div>