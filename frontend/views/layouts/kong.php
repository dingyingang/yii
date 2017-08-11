<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>登录</title> 

  <!--引用静态文件:requirejs--> 

  <link href="job/css/common.css" rel="stylesheet" type="text/css" />
  <link href="job/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="job/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="job/css/default.css" rel="stylesheet" type="text/css" />
 
  <script type="text/javascript" src="js/school-select-v2.js?v=6"></script>
  <link href="job/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:skin_new_css--> 
  <link href="job/css/main.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:new_dialog_js--> 
  <script type="text/javascript" src="js/dialog_js.js"></script> 
  <!--产品头部CSS和脚本--> 
  <script src="js/WdatePicker.js"></script> 
  
  <link href="job/css/front.css" rel="stylesheet" type="text/css" />  

    <?= Html::csrfMetaTags() ?>





    <title><?= Html::encode($this->title) ?></title>




    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?=$content?>

  <div class="dl_footer"> 
    <p>&copy;2015&nbsp;北京大生知行科技有限公司51talk&nbsp;&nbsp;京ICP备05051632号 京公网安备110108002767号 &nbsp;&nbsp;帮助热线：4006506886</p> 
   </div> 
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
