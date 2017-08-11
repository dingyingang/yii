<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\Login;

/**
 * Site controller
 */
class LoginController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout = 'kong';
    public function actionIndex()
    {
    	$model = new Login();
        $request = Yii::$app->request;
        if($request->isPost){
            $data = $request->post();
           // print_r($data);die;

            $command = Yii::$app->db->createCommand('SELECT * FROM login WHERE username="'.$data['Login']['username'].'" and password = "'.$data['Login']['password'].'"');
            $post = $command->queryOne();
            //print_r($post);die;
            if($post){
                $cookie = new \yii\web\Cookie();
                $cookie ->name = 'user';        //cookie的名称
                if(!isset($data['Login']['rememberMe'])){
                     $cookie ->expire = time() + 86400*7;     //存活的时间
                }
                $cookie ->httpOnly = true;        //无法通过js读取cookie
                $cookie ->value = $post;      //cookie的值
                \Yii::$app->response->getCookies()->add($cookie);

                $session = \Yii::$app->session;
                $session->set('smister_name' , $post);
                //print_r($post);
                 $this->redirect(array("/site/index"));
            }else{
              //  Yii::$app->getSession()->setFlash('success', '保存成功');die;
                return $this->render("index",['model'=>$model]);
            }
        }else{
            return $this->render("index",['model'=>$model]);
        }
    }
    public function actionReg()
    {

        $model = new Login();
        $request = Yii::$app->request;
        if($request->isPost){
            $data = $request->post();
          //print_r($data);die;
            $connection = Yii::$app->db;

            $connection->createCommand()->insert('login', [
                'username' => $data['Login']['username'],
                'password' => $data['Login']['password'],
                'email'    => $data['Login']['email'],
                'addtime'  => time()
            ])->execute();

            $this->redirect(array("/site/index"));
                //echo $id;
        
        }else{
            return $this->render("reg",['model'=>$model]);
        }

    	
    	
    }
    public function actionLogout()
    {
    	$cookie = Yii::$app->request->cookies->get('user');

        //移除一个Cookie对象
        \Yii::$app->response->getCookies()->remove($cookie);
        $session = \Yii::$app->session;

        //删除一个session
       $session->remove('smister_name');
        $this->redirect(array("/site/index"));
    }
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

}