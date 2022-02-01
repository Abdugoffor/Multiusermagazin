<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Tovar */

$this->title = $model->ism;
?>
<style type="text/css">
  #zakaz{
    font-size: 14pt;
    background: red;
    border-radius: 5px;
    display: block;
    position: absolute;
  }
</style>
<div class="main-panel">
<div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title"><?=$model->ism?></div>
                  </div>
                  <div class="card-body">
                    <table class="table table table-hover">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Tel</th>
                          <th>Soni</th>
                          <th>To'lov</th>
                          <th>Zakaz Vaqt</th>
                          <th>Yuborilgan Vaqt</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <?=$model->tovar->name?>
                          </td>
                          <td>
                            <?=$model->tel?>
                          </td>
                          <td>
                            <?=$model->soni?>
                          </td>
                          <td>
                            <?=$model->sum?>
                          </td>
                          <td>
                            <?=$model->date_z?>
                          </td>
                          <td>
                            <?if ($model->date_y==0) {?>
                              <a class="btn btn-danger"><i class='la la-certificate'></i></a>
                            <?}else{echo $model->date_y;}?>
                          </td>
                        </tr>
                      </tbody>
                      </table>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
</div>
       
         