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
class ContactController extends CommentController
{
    public $layout = 'job';
    public function actionIndex()
    {
        return $this->render("index");
    }
}