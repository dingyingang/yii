<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\SignupForm;;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class CommentController extends Controller
{
   public function __construct($id,$module,$config=[])
   {
   		$this->id = $id;

      $session = \Yii::$app->session;

      //读取一个Session
      $sess = $session->get('smister_name');

   		$this->module = $module;
   		$cookie = \Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
       
        if(!empty($user)){
        	$comm = $user;
        }
        if(!empty($comm) && !empty($sess)){
        	$sess = $comm;
        }
        if(!isset($sess) || empty($comm)){
          //echo '<script>alert("您没有登陆")</script>';
         //Header('Refresh: 3; URL=http://www.1507d.com/advanced/frontend/web/index.php?r=login/index');
          //Header('Location: http://www.1507d.com/advanced/frontend/web/index.php?r=login/index');
         echo '<script>alert("您没有登录");location.href="http://www.1507d.com/advanced/frontend/web/index.php?r=login/index";</script>';
        	//return $this->redirect(array('login/index'));
        }
   }
}