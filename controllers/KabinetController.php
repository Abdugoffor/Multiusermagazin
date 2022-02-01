<?php

namespace app\controllers;

use Yii;
use app\models\Tovar;
use app\models\Zakaz;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class KabinetController extends \yii\web\Controller
{
    public $layout='admin';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
               // 'only' => ['index','reg','about','contact','logout'],
                'rules' => [
                    [
                        //'actions' => ['index','reg','log'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    
                    
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
    	$id=\Yii::$app->user->identity->id;
    	$model= Tovar::find()->where(['user_id'=>$id])->orderBy('id DESC')->all();
        $zakaz=Zakaz::find()->where(['user_id'=>$id])->andwhere(['activ'=>0])->all();
        $savdo=Zakaz::find()->where(['user_id'=>$id])->andwhere(['activ'=>1])->all();
        return $this->render('index',['zakazs'=>$zakaz,'savdos'=>$savdo,'models'=>$model]);
    }
    public function actionAdd()
    {
    	$model = new Tovar();

            if ($model->load(\Yii::$app->request->post())) {
        $model->user_id=\Yii::$app->user->identity->id;
        $model->date=date("Y-m-d H:i:s");
         $model->img=UploadedFile::getInstance($model,'img');
         $filePath = 'upload/'.$model->img->baseName.".".$model->img->extension;
         $filePap ='upload/'.$model->img->baseName.".".$model->img->extension;
        $model->img->saveAs($filePap);
        $model->img = $filePath;
        if (empty($model->skidka)) {
            $model->skidka=0;
        }
        $model->save();
        
        return $this->redirect(['kabinet/index']);
            }
        

    	return $this->render('form',['model'=>$model]);
    }
    public function actionLogout()
    {
        \Yii::$app->user->logout();

        return $this->redirect(['site/index']);
    }
    public function actionZakaz()
    {
        $id=\Yii::$app->user->identity->id;

        $models = Zakaz::find()->where(['user_id' => $id])->orderBy("id DESC")->all();
        return $this->render('zakaz',['models' => $models]);
    }
    public function actionDelete($id)
    {
        $model=Zakaz::findOne($id);
        $model->delete();
        return $this->redirect(\Yii::$app->request->referrer);
    }
    public function actionYubor()
    {
        $id=\Yii::$app->user->identity->id;

        $models = Zakaz::find()->where(['user_id' => $id])->andwhere(['activ'=>1])->orderBy("date_y DESC")->all();
        return $this->render('yubor',['models' => $models]);
    }

    public function actionActiv($id,$a)
    {
        $model = Zakaz::findOne($id);

        $model->activ=$a;
        $model->date_y=date("Y-m-d H:i:s");

        $model->save();

        return $this->redirect(\Yii::$app->request->referrer);
    }

    public function actionDelet($id)
    {
    	$model=Tovar::findOne($id);
    	$model->delete();
    	return $this->redirect(\Yii::$app->request->referrer);
    }

    public function actionView($id)
    {
    	$model=Zakaz::findOne($id);

        return $this->render('view',['model'=>$model]);

    }
    public function actionViews($id)
    {
        $model=Tovar::findOne($id);

        return $this->render('views',['model'=>$model]);

    }

    public function actionEdit($id)
    {
    	$model=Tovar::findOne($id);

    	if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
        $model->user_id=\Yii::$app->user->identity->id;
        $model->date=date("Y-m-d H:i:s");
         $model->img=UploadedFile::getInstance($model,'img');
         $filePath = 'upload/'.$model->img->baseName.".".$model->img->extension;
         $filePap ='upload/'.$model->img->baseName.".".$model->img->extension;
        $model->img->saveAs($filePap);
        $model->img = $filePath;
        $model->save();
        
                return $this->redirect(['kabinet/index']);
            }
        } else {
            $model->loadDefaultValues();
        }

    	return $this->render('form',['model'=>$model]);
    }

}
