<?php
	namespace frontend\models;
	//use Yii;
	use yii\db\ActiveRecord;
	//use yii\web\UploadedFile;
	class Apply extends ActiveRecord{
		public $zhengjian;
		public $file;
		public function rules()
	    {
	        return [
	            [['zhengjian'], 'file'],
	        ];
	    }
		
	}
?>
	