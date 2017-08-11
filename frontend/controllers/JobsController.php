<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

use frontend\models\Zhaoping;;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class JobsController extends CommentController
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
    public function actionDetail()
    {
    	$request = new Yii::$app->request;
    	$id = $request->get();
    	$id = $id['id'];
    	$connection = Yii::$app->db;
    	$command = $connection->createCommand('SELECT * FROM Zhaoping where id = '.$id);
		$data = $command->queryOne();
		$data['zhize'] = explode('，', $data['zhize']);
		$data['zige'] = explode('，', $data['zige']);
		
		return $this->render("detail",['gongsi_list'=>$data]);

    }
    public function actionFanhui()
    {
    	return $this->goBack($_SERVER['HTTP_REFERER']);
    }
    public function actionShenqing()
    {
       
        $gs_id = $_GET['gs_id'];
        $end_time = $_GET['end_time'];
        $zhaoping_id = $_GET['zhaoping_id'];
        $zhi_bianhao = $_GET['zhi_bianhao'];
        $connection = Yii::$app->db;
        $cookie = Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
        $user_id = $user['id'];
        $command = $connection->createCommand("SELECT * FROM apply WHERE user_id=$user_id and statues = 1");
        $user_list = $command->queryOne();

        $command = $connection->createCommand('select * from region where region_id in ('.$user_list['city_now'].')');
        
       
        $city = $command->queryAll();
        //echo $city[0]['region_name'];die;
        //print_r($data);die;
        $aa = '';
        foreach ($city as $key => $val) {
            $aa.=$val['region_name'];
        }



        $aa = $connection->createCommand()->insert('shenqing', [
        'apply_name' => $user_list['username'],
        'apply_sex' => $user_list['sex'],
        'apply_id' => $user_list['id'],
        'apply_zhiye_qi' => $user_list['zhiye_qi'],
        'apply_chu_time' => $user_list['chu_time'],
        'gongsi_id' => $gs_id,
        'user_id'   =>  $user_id,
        'status'    =>  0,
        'shen_time' =>time(),
        'end_time'  =>$end_time,
        'zhi_num'   =>  $zhi_bianhao,
        'address'   =>  $aa,
        'zhaoping_id'=>$zhaoping_id,
        ])->execute();
        if($aa){
            $this->redirect(array('apply/member_apply'));
        }

    }
    public function actionShoucang()
    {
        $zhaoping_id = isset($_GET['zhaoping_id']) ? $_GET['zhaoping_id'] : '';
        $cookie = Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
        $user_id = $user['id'];
        $connection = Yii::$app->db;
        $command = $connection->createCommand("SELECT * FROM zhaoping WHERE id=$user_id");
        $data = $command->queryOne();

        $aa = $connection->createCommand()->insert('zhishouchang', [
        'z_name' => $data['z_name'],
        'zhaoping_id' => $data['id'],
        'user_id' => $user_id,
        'shou_time' =>time(),
        'end_time'  =>$data['end_time'],
        'zhi_num'   =>  $data['zhi_bianhao'],
        'work_address'   =>  $data['work_address'],
        ])->execute();
        if($aa){
            return $this->goBack();
        }
        
    }
}