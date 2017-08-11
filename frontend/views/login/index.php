<?php
   use yii\helpers\Url;
   use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>
 <body> 
  
   <div class="dl_content dl_gray_bg"> 

  
 
    <style type="text/css"> .bs_pop_alert { margin-left: 12px } </style> 
    <div class="dl_content"> 
     <div class="map"> 
      <div class="dl_lit-wrap clearfix"> 
       <div class="dl_loginleft1"> 
        <h3 class="tit">请登录</h3> 
       
          <?php $form=ActiveForm::begin([
              'action'=>['login/index'],
          ])?>
         <ul class="dl_error_wrap"> 
            
    

    
    
    




          <li> <?= $form->field($model, 'username')->label('用户名')?></li> 
          <li> <?= $form->field($model, 'password')->passwordInput()->label("密码") ?></li> 
          <li>
         
        <?= $form->field($model, 'verifyCode')->textInput(['class'=>'dl_textinp'])->label('验证码') ?>
            <?=Captcha::widget(['name'=>'captchaimg','captchaAction'=>'site/captcha',
    'imageOptions'=>['id'=>'captchaimg', 'title'=>'换一个', 'alt'=>'换一个', 'style'=>'cursor:pointer;margin-left:25px;'],'template'=>'{image}']);?>
    
    
         
          </li> 
         </ul> 
         <span class="tishi" style="display:none">请输入正确的用户名和密码</span> 
         <div class="next"> 
         <?= $form->field($model, 'rememberMe')->checkbox()->label("记住我") ?>
          
        
          <em>|    </em>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" url="/Portal/Account/GetPwd?returnUrl=%2FPortal%2FApply%2FIndex" class="forgetPwd">忘记密码</a> 
         </div> 
         <div class="dl_padl40 dl_mgtop10"> 
          <?= Html::submitButton('注册', ['class' => 'btn btn-primary']) ?>
         </div>
         <?php ActiveForm::end() ?> 
     



       </div> 
       <div class="dl_loginright1"> 
        <div class="dl_register">
         <span class="noaccount">没有自己的账号？</span>
         <a href="<?=Url::toRoute(['login/reg']);?>" url="" class="register">立刻注册</a>
        </div> 
        <h3 class="dl_otherchoice">使用其他账号登录：</h3> 
        <div class="dl_logos"> 
         <a class="dl_sinalogo dl_grey1 sina" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=sina_connect_v2&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">微博</a> 
         <a class="dl_qqlogo dl_grey1 qq" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=qzone_login&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">QQ</a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
  
    <!--简历内容 e--> 
   </div> 
 
  </div>  
