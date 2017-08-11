<?php
	namespace frontend\models;
	//use Yii;
	use yii\db\ActiveRecord;
	class Login extends ActiveRecord{
		public $verifyCode;
		public $qrpwd;
		// // public $email;
		public $rememberMe;
		//public $addtime;
		public function rules()
		{
            return [

            	['username', 'trim'],
	            ['username', 'required'],
	            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '该用户已经存在'],
	            ['username', 'string', 'min' => 2, 'max' => 255],

	            ['email', 'trim'],
	            ['email', 'required'],
	            ['email', 'email'],
	            ['email', 'string', 'max' => 255],
	            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '该邮箱已经注册'],

	            ['password', 'required'],
	            ['password', 'string', 'min' => 6],
	            ['qrpwd', 'compare', 'compareAttribute'=>'password', 'message' => '两次密码不一致'],
	            ['verifyCode', 'required','message' => '验证码不能为空'],
	            ['verifyCode', 'captcha'],
	            //['rememberMe', 'boolean'],

            ];
		}
		
	}
?>
	