<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
//$this->params['breadcrumbs'][] = $this->title;
?>

    

    <div class="main-panel">
<div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title"><?=$model->username?></div>
                  </div>
                  <div class="card-body">
                    <table class="table table table-hover">
                      <thead>
                        <tr>
                          <th>Login</th>
                          <th>Parol</th>
                          <th>Rasm</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>
                                <?=$model->username?>
                            </td>
                            <td>
                                <?=$model->password?>
                            </td>
                            <td>
                                <img src="<?=$model->img?>" width='250px'>
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


