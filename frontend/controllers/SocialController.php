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
use frontend\models\Zhaoping;
use yii\data\Pagination;
/**
 * Site controller
 */
class SocialController extends CommentController
{
    public $layout = 'job';
    public function actionIndex()
    {
       $obj = new Zhaoping();
			$query = $obj->find();
		    $countQuery = clone $query;
		    $pages = new Pagination(['totalCount' => $countQuery->count(),'defaultPageSize' => 10]);
		    $list = $query->offset($pages->offset)->limit($pages->limit)->all();

		    return $this->render('index', [
		         'list' => $list,
		         'pages' => $pages,
		         'model'=>$obj,
		    ]);
    }
}