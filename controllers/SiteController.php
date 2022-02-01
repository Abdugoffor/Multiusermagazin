<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Tovar;
use app\models\Zakaz;
use yii\web\UploadedFile;


class SiteController extends Controller
{
  public $layout='shablon';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','reg','about','contact','logout'],
                'rules' => [
                    [
                        'actions' => ['index','reg','log','about'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index','about','contact','logout',],
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $models=Tovar::find()->orderBy("id DESC")->all();

        return $this->render('index',['models'=>$models]);
    }
    public function actionCategory($id)
    {
        $models=Tovar::find()->where(['cate_id' => $id])->orderBy("id DESC")->all();

        return $this->render('index',['models'=>$models]);
    }
    public function actionPage($id)
    {
        $models = new Zakaz();

        $Tovar=Tovar::findOne($id);
        
        if ($models->load(Yii::$app->request->post() )){ 
            $models->date_z = date("Y-m-d H:i:s");
            
            $models->sum = $models->soni * $Tovar->narx;
            $models->activ = 0;
            
            $Tovar->soni = $Tovar->soni-$models->soni;
            //$models->save();
            $Tovar-> save();
            if ($models->save()) {
             
            \Yii::$app->session->setFlash('success',"
               <div class='row'>
                   <div class='col-12'>
                        <center>
                        <h6 >Buyurtmangiz qabul qilindi tezorada aloqaga chiqamiz !</h6>
                        <i>Buyurtma : ".
                        $Tovar->name.' '.$models->soni.' ta <br>'.
                        "To'lov : ".
                        $models->sum." $</i>
                        </center>
                   </div>
               </div>
              ");
                return $this->redirect(['site/index']);
            }else{
                \Yii::$app->session->setFlash('error',"Qaytadan urinib ko'ring");
                return $this->render('page',['y'=>$yang,'model'=>$model,]);
              }
        }
        return $this->render('page',['model'=>$Tovar,'models'=>$models]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionReg()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goBack();
        }
        $model= new User();
        if ($model->load(Yii::$app->request->post())) {
            
         $model->img=UploadedFile::getInstance($model,'img');
         $filePath = 'upload/'.$model->img->baseName.".".$model->img->extension;
         $filePap ='upload/'.$model->img->baseName.".".$model->img->extension;
        $model->img->saveAs($filePap);
        $model->img = $filePath;
        //$model->save();
        if ($model->save()) {
         
        \Yii::$app->session->setFlash("Tabriklaymiz ro'thatdan o'tdingiz");

            return $this->goHome();   
        }
    }
        return $this->render('reg',['model'=>$model]);

    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
