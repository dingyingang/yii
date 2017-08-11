<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>

    <div class="dl_content"> 
     <div class="map"> 
      <div class="dl_lit-wrap clearfix" style="width: 640px;"> 
       <div class="dl_loginleft1"> 
        <h3 class="tit">请登录</h3> 
<?php $form=ActiveForm::begin([
   'id' => 'login-form',    
  'options' => ['class' => 'form-horizontal'],
  'action'=>['login/reg'],
    'method'=>'post'
])?>
     <?= $form->field($model, 'username')->label("用户名") ?>
     <?= $form->field($model, 'password')->passwordInput()->label("密码") ?>
     <?= $form->field($model, 'qrpwd')->passwordInput()->label('确认密码') ?>
      <?= $form->field($model, 'email')->label('邮箱') ?>
    
    
<?= $form->field($model, 'verifyCode')->textInput(['class'=>'dl_textinp'])->label('验证码') ?>
            <?=Captcha::widget(['name'=>'captchaimg','captchaAction'=>'site/captcha',
    'imageOptions'=>['id'=>'captchaimg', 'title'=>'换一个', 'alt'=>'换一个', 'style'=>'cursor:pointer;margin-left:25px;'],'template'=>'{image}']);?>
    
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('注册', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>
       </div> 
       <div class="dl_loginright1"> 
        <div class="dl_register">
         <span class="noaccount">已经注册？</span>
         <a href="?r=login/index" class="register">立刻登录</a>
        </div> 
        <h3 class="dl_otherchoice">使用其他账号登录：</h3> 
        <div class="dl_logos"> 
         <a class="dl_sinalogo dl_grey1 sina" href="javascript:void(0)" url="/model/OAuth/OAuthIndex?snstype=sina_connect_v2&amp;returnurl=http%3a%2f%2f51talk.zhiye.com 

 

%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com 

 

&amp;portalid=104003">微博</a> 
         <a class="dl_qqlogo dl_grey1 qq" href="javascript:void(0)" url="/model/OAuth/OAuthIndex?snstype=qzone_login&amp;returnurl=http%3a%2f%2f51talk.zhiye.com 

 

%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com 

 

&amp;portalid=104003">QQ</a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
