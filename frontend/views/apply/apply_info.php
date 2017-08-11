 <?php
   use yii\helpers\Url;
   use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

?>
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <style type="text/css">
        .code
        {
            clear: both;
            padding-left: 80px;
        }

            .code .code_add
            {
                text-decoration: none;
                margin-left: 0;
            }

            .code a.code_add:hover
            {
                text-decoration: underline;
            }

        .form_container .form_part ul.code_list
        {
            padding-left: 0;
        }

        .form_container li a.code_del
        {
            text-decoration: none;
            padding-left: 40px;
        }

            .form_container li a.code_del:hover
            {
                text-decoration: underline;
            }

        .code_type
        {
            width: 180px;
        }

        .code_dialog
        {
            padding: 30px 40px;
        }

        div.code_dialog_btn
        {
            margin-top: 0;
            height: 32px;
        }

        span.code_error_pop
        {
            margin-top: 5px;
            width: auto;
            height: 20px;
            visibility: hidden;
        }

        .code_dialog #btnClse
        {
            margin-left: 50px;
        }

        .code_dialog .dl_dialog_btn
        {
            padding-top: 20px;
            margin-top: 10px;
        }

        .code_type_outer
        {
            text-align: center;
        }

        .code_dialog a.dl_btn_grey1 span
        {
            padding: 0 16px 0 0;
        }

        .code_dialog a.dl_btn_grey1
        {
            padding-left: 16px;
        }

        .code_title
        {
            margin-bottom: 10px;
            color: #333;
        }
    </style> 
    <div class="dl_liucheng dl_top_table"> 
     <h3 class="applypos"> <span>申请职位：</span><span class="dl_positionname"><strong style="font-weight: bold;">PTD 助教总监</strong> </span> </h3> 
     <table align="center" class="dl_top_ico"> 
      <tbody>
       <tr> 
        <td align="center"> 
         <ul class="dl_picliu"> 
          <li class="basic" onclick="BSGlobal.navigate(0);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(0);"><span class="dl_grey3">1基本信息</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greyprofile" onclick="BSGlobal.navigate(1);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(1);"><span class="dl_grey2">2个人履历</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greysubmit" onclick="BSGlobal.navigate(4);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(4);"><span class="dl_grey2">3预览/提交</span></a></li> 
         </ul> </td> 
       </tr> 
      </tbody>
     </table> 
    </div> 
    <div> 
     <style type="text/css">
  *html .dl_myleftform .form_container{ width: 490px;overflow: hidden}
  *html .dl_myleftform .form_container .form_part .columntwo ul{ width: 360px;overflow: hidden;}
  *html .dl_myleftform .form_container ul li{ width: 360px;overflow: hidden}
  /* .dl_myleftform .form_container li label{width: 100px}*/
*html .dl_myleftform .form_container ul li span.preview_text{ width: 220px;overflow: hidden;}
*html .dl_myleftform .form_container ul li textarea.textarea{ width: 200px;}
*html .form_container li span.desc
{
    
	margin-right:-3px;
	position:relative;
}
   .redBorder,.form_container li textarea.redBorder,
    .form_part li input.redBorder{border: red 1px solid;}

</style> 
     <div class="dl_bacwrap dl_new_error_wrap"> 
      <div class="mainwrap"> 
       <br /> 
       <h3 class="dl_bigtit"> <span class="dl_postit">基本信息</span> <span class="dl_padl20"></span> </h3> 
       <br /> 
       <a name="个人信息"></a> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">个人信息</span> 
       </div> 
       <form method="post" id="2f52aafc-b9fa-4bdb-bb6b-c987c18e1775" name="2f52aafc-b9fa-4bdb-bb6b-c987c18e1775" class="formPart" enctype="multipart/form-data" action="<?=Url::toRoute(['apply/apply_info'])?>"> 
        <div class="clearfix"> 
         <div class="dl_myleftform"> 
          
         <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>">
          <input type="hidden" name="Apply[user_id]" id="Hidden5" value="<?=$user_id?>" /> 
         
          <div class="form_container" id="RecruitmentPortal.PersonProfile"> 
           <h2 class="form_title"> <strong>个人信息</strong> <span class="tab"></span> </h2> 
           <div class="form_part"> 
            <div class="form_part_container columnone"> 
             <ul> 

 

              <li><label class="current label_required">姓名：</label> <input class="{required:true,messages:&quot;请填写姓名&quot;} mul_input" name="Apply[username]" id="4c037148-140a-4c2b-b87a-b97609215d7011" value="" /> <span class="desc"></span> </li> 
              <li><label class="current label_required">性别：</label> 
               <div class="radio_list"> 
                <input type="radio" name="Apply[sex]" value="0" checked/> 
                <label class="radio_label">男</label> 
                <input type="radio" name="Apply[sex]" value="1" /> 
                <label class="radio_label">女</label> 
               </div> </li> 
              <li><label class="current label_required">出生日期：</label> 
                <?php
                  use yii\jui\DatePicker; 
                ?>
                <?= DatePicker::widget([
                'name' => 'Apply[chu_time]',
                'class'  =>'mul_input Wdate',
                'id'    =>"436ab7a4-67a1-4819-a238-d5d34eb0717611",
                'language' => 'zh-CN',
                'dateFormat' => 'php:Y-m-d',
                ])
                ?>

               <span class="desc"></span> </li> 
              <li><label class="current label_required">邮箱：</label> <input class="{required:true,messages:&quot;请填写邮箱&quot;} mul_input" name="Apply[email]" id="67a5c587-4f90-4ae7-819f-eb3dba9ea39911" value="" /> <span class="desc"></span> </li> 
              <li><label class="current label_required">手机号：</label> <input class="{required:true,messages:'请填写手机号'} mul_input " name="Apply[tall]" id="acb9b67f-9643-41fb-a7fe-5ff8d742ccdf11" value="" /> </li> 
             </ul> 
            </div> 
            <div class="clear"></div> 
           </div> 
           <div class="form_part"> 
            <div class="form_part_container columnone"> 
             <ul> 
              <li><label class="current label_required">工作年限：</label> 
                <select name="Apply[gong_time]" id="RecruitmentPortalPersonProfile_YearsOfWork" class="mul_select"> 
                  <option value="">请选择</option> 
                  <option value="在读学生">在读学生</option> 
                  <option value="应届毕业生">应届毕业生</option> 
                  <option value="1年">1年</option> 
                  <option value="2年">2年</option> 
                  <option value="3年">3年</option> 
                  <option value="4年">4年</option> 
                  <option value="5年">5年</option> 
                  <option value="6年">6年</option> 
                  <option value="7年">7年</option> 
                  <option value="8年">8年</option> 
                  <option value="9年">9年</option> 
                  <option value="10年及以上">10年及以上</option> 
                </select> 
              </li> 
              <li><label>证件照：</label> 



               <span><input type="file" name="Apply[zhengjian]"></span> <span class="desc uploaddesc">推荐1寸照片尺寸，70x100象素。支持jpg，jpeg, gif，bmp或png格式，大小不超过512k</span>
               <ul id="c71310e0-0bef-4173-9826-21a572d4943d11_info" class="uploadfilescontainer" style="margin-left:70px;"> 
               </ul> </li> 
             </ul> 
            </div> 
            <div class="clear"></div> 
           </div> 
          </div> 
         </div> 
        
        </div> 

       <a name="求职意向"></a> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">求职意向</span> 
       </div> 
        <div class="clearfix"> 
         <div class="dl_myleftform"> 

          <div class="form_container" id="RecruitmentPortal.Objective"> 
           <h2 class="form_title"> <strong>求职意向</strong> <span class="tab"></span> </h2> 
           <div class="form_part"> 
            <div class="form_part_container columnone"> 
             <ul> 
              <li><label>现从事行业：</label> 
                <input class="mul_input industry" name="Apply[hangye_now]" id="ef3f9faf-97c6-432b-9c6b-0b0b66c5c4271212_txt" value="" /> 
               </li> 
              <li><label>现从事职业：</label> 
                <input type="text" name="Apply[zhiye_now]" displayname="现从事职业" constname="JobCategory" value="" class="Ajson ConstDictSingleSelect" id="RecruitmentPortalObjective_CurrJobCategory_Id" /> 
              </li> 
              <li><label>现工作城市：</label> 
              <span id="citysi">

                <select name="Apply[city_now]" id="city1" class="mul_select"> 
                  <option value="">请选择</option> 
                  <?php
                    foreach ($city as $key => $val) {?>
                      <option value="<?=$val['region_id']?>"><?=$val['region_name']?></option> 
                    <?php }?>
                  
                </select>
              </span>
                </li> 
              <li><label>现月薪(税前)：</label>
               <select name="Apply[money_now]" id="RecruitmentPortalObjective_CurrSalary" class="mul_select"> 
                <option value="">请选择</option> 
                <option value="1000以下">1000以下</option> 
                <option value="1000～2000">1000～2000</option> 
                <option value="2001～4000">2001～4000</option> 
                <option value="4001～6000">4001～6000</option> 
                <option value="6001～8000">6001～8000</option> 
                <option value="8001～10000">8001～10000</option> 
                <option value="10001～15000">10001～15000</option> 
                <option value="15001～25000">15001～25000</option> 
                <option value="25000以上">25000以上</option> 
                <option value="面议">面议</option> 
              </select> </li> 
              <li><label class="current label_required">期望从事行业：</label> 
                <input class="mul_input industry" name="Apply[hangye_qi]" id="e5688d4a-bad3-48fb-842e-0ae7df7036d51212_txt" value="" /> 
              </li> 
              <li><label class="current">期望从事职业：</label> 
                <input type="text" name="Apply[zhiye_qi]" displayname="期望从事职业" constname="JobCategory" value="" class="Ajson ConstDictSingleSelect" id="RecruitmentPortalObjective_ExpectJobCategory_Id" /> 
              </li> 
              <li><label class="current label_required">期望工作城市：</label> 
              <span id="">

                <select name="Apply[city_qi]" id="" class="mul_select" > 
                  <option value="">请选择</option> 
                  <?php
                    foreach ($city as $key => $val) {?>
                      <option value="<?=$val['region_id']?>"><?=$val['region_name']?></option> 
                    <?php }?>
                  
                </select>
              </span>
                


              </li> 
              <li><label>期望月薪(税前)：</label> 
                <select name="Apply[money_qi]" id="RecruitmentPortalObjective_ExpectSalary" class="mul_select"> 
                 <option value="">请选择</option> 
                <option value="1000以下">1000以下</option> 
                <option value="1000～2000">1000～2000</option> 
                <option value="2001～4000">2001～4000</option> 
                <option value="4001～6000">4001～6000</option> 
                <option value="6001～8000">6001～8000</option> 
                <option value="8001～10000">8001～10000</option> 
                <option value="10001～15000">10001～15000</option> 
                <option value="15001～25000">15001～25000</option> 
                <option value="25000以上">25000以上</option> 
                <option value="面议">面议</option> 
                </select> </li> 
              <li><label>到岗时间：</label> 
                <select name="Apply[work_time]" id="RecruitmentPortalObjective_EntrantDate" class="mul_select"> 
                  <option value="">请选择</option> 
                  <option value="1">一周内</option> 
                  <option value="2">一个月内</option> 
                  <option value="3">三个月内</option> 
                  <option value="4">三个月以上</option> 
                  <option value="5">面议</option> 
                </select> </li> 
             </ul> 
            </div> 
            <div class="clear"></div> 
           </div> 
          </div> 
         </div> 
        </div> 
       
       <div class="dl_bd_btm"></div> 
       <div class="dl_subbtn dl_htline32"> 
        <span class="dl_btn_lev dl_ft14_grey dl_padr10"><a name="btnCancel" href="<?=Url::toRoute(['site/index'])?>"><b>取消</b></a></span> 
        <input type="submit" value="提交进行下一步">
       </div> 
       <div class="error_show" style="text-align:center;padding-top:10px;display:none">
        <span class="new_pop_error" style="width:auto;font-weight:bold">部分内容未填写完整，请完善。</span>
       </div> 
      </div> 
     </div> 
    </form> 

     <!--引用静态文件:dataInitFunc,HangYe,AreaJson,NewAreaJson--> 
     <script type="text/javascript"> function setAJson(data){ window.Ajson=data; } function setNewAJson(data){ window.NewAjson=data; } function setMJson(data){ window.Mjson=data; } </script> 
     <script type="text/javascript" src="http://const.tms.beisen.com/ConstData.svc/Const/hangye?callback=setMJson"></script>
     <script type="text/javascript" src="http://const.tms.beisen.com/ConstData.svc/Const/Areas?callback=setAJson"></script>
     <script type="text/javascript" src="http://const.tms.beisen.com/Api/Defination/AreaFormat?callback=setNewAJson"></script> 
    </div> 
    <!--简历内容 e--> 
   </div> 
   <div class="dl_footer"> 
    <p>&copy;2015&nbsp;北京大生知行科技有限公司51talk&nbsp;&nbsp;京ICP备05051632号 京公网安备110108002767号 &nbsp;&nbsp;帮助热线：4006506886</p> 
   </div> 
  </div>  
 
 
  
  

 </body>
</html>
<script src="job/jquery-1.8.3.js"></script>
<script> 
  $(function(){
     $(document).on("change",'#city1',function(){
        var this_index = $(this).index() + 1;
 
       $(this).nextAll().remove();
        var city_id = $(this).val();
        $.ajax({
          type:"post",
          url:"?r=apply/city",
          data:'city_id='+city_id,
          dataType:"json",
          success:function(data){
            var str = '<select name="Apply[city_'+this_index+']" id="city1" class="mul_select"> <option value="">请选择</option> ';
            var acca =0;
            $.each(data,function(k,v){

                  acca = k+k;
                       str+='<option value="'+v.region_id+'">'+v.region_name+'</option> ';                      
             
            });
            if(acca == 0){
              return false;
            }
            str +='</select>';
            $("#citysi").append(str);
           // alert(str)
          }
        });
     });
  })
</script>