<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Tovar */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tovars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tovar-view">

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
            'attribute'=>'user_id',
            'value' =>  function($d)
            {
                return $d->user->username;
            },
            'label' => "Sotuvchi",
            ],
            'name',
            'text:ntext',
            //'cate_id',
            [
            'attribute'=>'cate_id',
            'label' => "Bo'lim",
            'value' => function($d)
            {
                return $d->cate->name;
            }
            ],
            'narx',
            'skidka',
            //'img',
            [
            'format' =>'raw',
            'attribute'=>'img',
            'label' => "Rasm",
            'value' => function($d)
            {
                return "<img src='".$d->img."' width='100px'>";
            }
            ],

            //'news',
            [
            'format' =>'raw',
            'attribute'=>'news',
            'value' => function($d)
            {
                if ($d->news==1) {
                    return "<a href='".Url::to(['tovar/new','id'=>$d->id, 'a'=>0])." ' class='btn btn-info'>News</a>";
                }
                if ($d->news==0) {
                    return "<a href='".Url::to(['tovar/new','id'=>$d->id, 'a'=>1])." ' class='btn btn-info'>Oddiy</a>";
                }
                
            }
            ],
            'date',
        ],
    ]) ?>

</div>
