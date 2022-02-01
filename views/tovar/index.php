<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TovarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tovarlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
<h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="tovar-index">

    
    <p>
        <?= Html::a('Create Tovar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'user_id',
            [
            'attribute'=>'user_id',
            'value' => 'user.username',
            'label' => "Sotuvchi",
            ],
            'name',
            'text:ntext',
            
            [
            'attribute'=>'cate_id',
            'label' => "Bo'lim",
            'value' => 'cate.name',
            ],
            'narx',
            'soni',
            [
            'attribute'=>'skidka',
            'value' =>function($d)
            {
                if (empty($d->skidka)) {
                    return "Yo'q";
                }else{
                    return $d->skidka;
                }
            }
            ],
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
            
            //'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
