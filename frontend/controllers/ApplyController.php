<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\Apply;
use frontend\models\SignupForm;;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class ApplyController extends CommentController
{
    /**
     * @inheritdoc
     */
    public $layout = 'kong';
    //职位申请第一步
    public function actionApply_info()
    {
        $model = new Apply();
        //文件上传
         if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'zhengjian');
           //var_dump($model->file);die;
            if ($model->file && $model->validate()) {                
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
                $filename = 'uploads/' . $model->file->baseName . '.' . $model->file->extension;
                //echo $filename;
            }
        }
        //入库
        $request = new Yii::$app->request;

        $cookie = Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
       // echo $user['id'];
        if($request->isPost){
            $data = $request->post();
            $cityru = $data['Apply']['city_now'].','.isset($data['Apply']['city_1']) ? $data['Apply']['city_1'] : ''.','.isset($data['Apply']['city_2']) ? $data['Apply']['city_2'] : ''.','.isset($data['Apply']['city_3']) ? $data['Apply']['city_3'] :'';
            //print_r($data);die;
            $connection = Yii::$app->db;
            $bloon1 = $connection->createCommand()->insert('apply', [
                'user_id' => $user['id'],
                'username' => $data['Apply']['username'],
                'number'    =>  rand(1000000000,999999999),
                'sex'   =>  $data['Apply']['sex'],
                'chu_time'   =>  $data['Apply']['chu_time'],
                'email'   =>  $data['Apply']['email'],
                'tall'   =>  $data['Apply']['tall'],
                'gong_time'   =>  $data['Apply']['gong_time'],
                'hangye_now'   =>  $data['Apply']['hangye_now'],
                'zhiye_now'   =>  $data['Apply']['zhiye_now'],
                'city_now'   =>  isset($cityru) ? $cityru : '',
                'money_qi'   =>  $data['Apply']['money_qi'],
                'hangye_qi'   =>  $data['Apply']['hangye_qi'],
                'zhiye_qi'   =>  $data['Apply']['zhiye_qi'],
                'city_qi'   =>  $data['Apply']['city_qi'],
                'work_time'   =>  $data['Apply']['work_time'],
                'money_now'   =>  $data['Apply']['money_now'],
                'zhengjian'   =>  isset($filename) ? $filename : '',
                'add_time'   =>  time(),
                'statues'   =>  0,
            ])->execute();
                $id = $connection->getLastInsertID();
                //echo $id;die;
            if($bloon1){
                $this->redirect(array('/apply/apply_resume','apply'=>$id));
            }

        }else{
            $connection = Yii::$app->db;

            $command = $connection->createCommand('SELECT * FROM region where parent_id = 0');
            $city = $command->queryAll();
           // print_r($city);die;
            return $this->render("apply_info",['model'=>$model,'user_id'=>$user['id'],'city'=>$city]);
        }


    	
    }
    //职位申请第二步
    public function actionApply_resume()
    {
        $model = new Apply();
        $apply_id = isset($_GET['apply']) ? $_GET['apply'] : '';
        //echo $apply_id;die;
    	return $this->render("apply_resume",['model'=>$model,'apply_id'=>$apply_id]);
    }
    //职位申请第三部
    public function actionApply_review()
    {
        $model = new Apply();
        $apply_id = isset($_GET['apply_id']) ? $_GET['apply_id']:'';
        $jiaoyu_id = isset($_GET['jiaoyu_id']) ? $_GET['jiaoyu_id']:'';
    	return $this->render("apply_review",['model'=>$model,'apply_id'=>$apply_id,'jiaoyu_id'=>$jiaoyu_id]);
    }



    public function actionCity()
    {
        $request = new Yii::$app->request;
        $city_id = $request->post();
        $connection = Yii::$app->db;

        $command = $connection->createCommand('SELECT * FROM region where parent_id = '.$city_id['city_id']);
        $city = $command->queryAll();
        //print_r($city);
        echo json_encode($city);
    }
    //教育背景入库
    public function actionJiaoyu()
    {
        $request = new Yii::$app->request;
        $data = $request->post();
        $data['status'] = 0;
        unset($data['_csrf-frontend']);
        $connection = Yii::$app->db;
        $bloon1 = $connection->createCommand()->insert('jiaoyu', $data)->execute();
        $jiaoyu_id = $connection->getLastInsertID();
        
            $this->redirect(array('/apply/apply_review','apply_id'=>$data['apply_id'],'jiaoyu_id'=>$jiaoyu_id));
       
    }
    public function actionSan()
    {
        $apply_id = isset($_GET['apply_id']) ? $_GET['apply_id']:'';
        $jiaoyu_id = isset($_GET['jiaoyu_id']) ? $_GET['jiaoyu_id']:'';
        $cookie = \Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
        $user_id = $user['id'];
        $connection = Yii::$app->db;
        $bloon1 =  $connection->createCommand()->update('apply', ['statues' => 1], "id = $apply_id and user_id = $user_id")->execute();
        $bloon2 = $connection->createCommand()->update('jiaoyu', ['status' => 1], "apply_id = $apply_id and user_id = $user_id and id = $jiaoyu_id")->execute();
      
            $this->redirect(array("/apply/member_resume"));
       


    }
    //我的简历
    public function actionMember_resume()
    {
        $cookie = \Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
        $connection = Yii::$app->db;
        $command = $connection->createCommand('select * from apply 
            inner join jiaoyu on jiaoyu.apply_id=apply.id 
            where apply.user_id = '.$user['id'].'');
      
        $data = $command->queryAll();
        $command = $connection->createCommand('select * from region where region_id in ('.$data[0]['city_now'].')');
        
       
        $city = $command->queryAll();
        //echo $city[0]['region_name'];die;
        //print_r($data);die;
        $aa = '';
        foreach ($city as $key => $val) {
            $aa.=$val['region_name'];
        }
       //print_r($aa);die;
        return $this->render('member_resume',['jianli'=>$data,'city_aa'=>$aa]);
    }
    //我的申请
    public function actionMember_apply()
    {
        $cookie = \Yii::$app->request->cookies;
        $user = $cookie->getValue('user');

        $connection = Yii::$app->db;
        $command = $connection->createCommand('select * from shenqing where user_id = '.$user['id']);
        $shenqing = $command->queryAll();
        $coun = count($shenqing);
        //echo $coun;die;
        //print_r($shenqing);
        return $this->render("member_apply",['shenqing'=>$shenqing,'coun'=>$coun]);
    }
    //已收藏职位
    public function actionMember_collect()
    {
        $cookie = \Yii::$app->request->cookies;
        $user = $cookie->getValue('user');
        $connection = Yii::$app->db;
        $command = $connection->createCommand('select * from zhishouchang where user_id = '.$user['id']);
        $shoucang_list = $command->queryAll();



        //待定
        return $this->render('member_collect',['shoucang_list'=>$shoucang_list]);
    }
    //账户设置
    public function actionMember_info()
    {
        return $this->render('member_info');
    }
    //下载简历
  public function actionApply_download(){
    //查数据
     $apply=new Apply;
     $apply_id=Yii::$app->request->get('apply_id');
     $data=$apply->findOne($apply_id);
     if($data['sex']==0){
       $data['sex']='男';
     }else{
       $data['sex']='女';
     }
    // print_r($data);die;
    // var_dump($data);die;
     //拼接文件 
     $filename='aa.html'; //文件名
      $str='<center>';
      $str.='<h1>我的简历</h1>';
      $str.='<table border="1" width="500">';
      $str.='<tr><td>姓名</td><td>'.$data['username'].'</td></tr>';
      $str.='<tr><td>邮箱</td><td>'.$data['email'].'</td></tr>';
      $str.='<tr><td>手机号</td><td>'.$data['tall'].'</td></tr>';
      $str.='<tr><td>出生日期</td><td>'.$data['chu_time'].'</td></tr>';
      $str.='<tr><td>性别</td><td>'.$data['sex'].'</td></tr>';
      $str.='<tr><td>现从事职业</td><td>'.$data['zhiye_now'].'</td></tr>';
      $str.='<tr><td>期望从事职业</td><td>'.$data['zhiye_qi'].'</td></tr>';
      $str.='<tr><td>现月薪</td><td>'.$data['money_now'].'</td></tr>';
      $str.='<tr><td>期望月薪</td><td>'.$data['money_qi'].'</td></tr>';
      $str.='<tr><td>教育背景</td><td>'.$data['jiaoyu'].'</td></tr>';
    //  $str.='<tr><td>工作经验</td><td>'.$data['apply_experience'].'</td></tr>';
      $str.='<tr><td>语言能力</td><td>'.$data['yuyan'].'</td></tr>';
      $str.='</table>';
      $str.='</center>';
     file_put_contents($filename,$str);      
     $date=date("Ymd-H:i:m");
     Header( "Content-type:  application/octet-stream "); 
     Header( "Accept-Ranges:  bytes "); 
     Header( "Accept-Length: " .filesize($filename));
     header( "Content-Disposition:  attachment;  filename= {$date}.doc"); 
     readfile($filename); 
  }


   
}