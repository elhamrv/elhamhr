<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
//use Codeception\Test\Unit;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Employee;
use app\models\Unit;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
        return $this->render('index');
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
    
    public function actionShop()
    {
        return $this->render('shop');
    }
    
    public function actionEmp()
    {
        return $this->render('emp');
    }
    
    
    
    public function actionTest()
    {
        $unit= Unit::find()->all();
        $list= Employee::find()->all();
       
        return $this->render('test',['mylist'=>$list ,'unitList'=>$unit ]);
       
    }
    
    public function actionInput()
    {
       $model= new Employee();
       
       if(count($_POST)>0){
           if ($model->load(Yii::$app->request->post()) && $model->save()) {
               return $this->redirect(['view', 'id' => $model->emp_id]);
           }
           //print_r($_POST);
           //exit;
       }
        return $this->render('input',['model'=>$model,]);
    }
    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => Employee::findOne($id),
        ]);
    }
    
    public function actionTestview($id)
    {
        $model =new Employee();
        
        return $this->render('testview', [
            'model' => Employee::findOne($id),
        ]);
    }
    
    public function actionAjaxview()
    {
        $model = Employee::find()->all();
        
        $list = array();
        foreach($model as $Employee) {
        $emp = array();
        $emp["fn"] = $Employee->name;
        $emp["ln"] = $Employee->familly;
        $emp["un"] = $Employee->unit_id;
        $emp["em"] = $Employee->email;
            
        $list[] = $emp;
            
        
        //echo "hello world <br> ";
        
        //echo "<td><tr>.hello world . </td></tr>";
        }
        //\Yii::$app->response->format = Response::FORMAT_JSON;
        header("Content-Type", "application/json");
        $this->layout = false;
        echo (json_encode($list) );
        exit;
        
    }
    
    public function actionTestpost()
    {
        $model =new Employee();
        
        return $this->render('testpost',['model'=>$model,]);
    }
    
    public function actionReadpost()
    {
        //print_r($_POST);
        $model =new Employee();
        if(count($_POST)>0){
            if ($model->load($_POST) && $model->save()) {
                echo 'ok';
            }
            else
            echo 'failed';
        }
        exit;
    }
    
    public function actionNewview()
    {
        $model =new Employee();
        
        
        return $this->render('newview',['model'=>$model,]);
    }
    
    public function actionLastview()
    {
      
        return $this->render('lastview');
    }
    
    public function actionMal()
    {
        return $this->render('mal');
    }
}
