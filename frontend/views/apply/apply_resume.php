 <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <?php
     use yii\helpers\Url;
    ?>
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
          <li class="bluebasic" onclick="BSGlobal.navigate(0);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(0);"><span class="dl_grey2">1基本信息</span></a></li> 
          <li class="bluearrow"></li> 
          <li class="profile" onclick="BSGlobal.navigate(1);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(1);"><span class="dl_grey3">2个人履历</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greysubmit" onclick="BSGlobal.navigate(4);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(4);"><span class="dl_grey2">3预览/提交</span></a></li> 
         </ul> </td> 
       </tr> 
      </tbody>
     </table> 
    </div> 
    <div> 
     <style type="text/css">
    .redBorder,.form_container li textarea.redBorder,
    .form_part li input.redBorder{border: red 1px solid;}
    .eduinfo .form_container span.preview_text {
        width:450px;
    }
    .eduinfo .form_container span.start_date {
        width:80px;
    }
    .eduinfo .form_container span.end_date {
        width:70px;
    }
</style> 
     <div class="dl_bacwrap dl_new_error_wrap"> 
      <div class="mainwrap"> 
       <h3 class="dl_bigtit"> <span class="dl_postit">个人履历</span> <span class="dl_padl20">请在执行下一步前将必填项填写完毕并保存</span> </h3> 
       <br /> 
       <div class="dl_educationwrap mainContainer"> 
        <a name="教育背景"></a> 
        <div class="dl_greyline_bg"> 
         <span class="dl_menutit "><span style="color:red;">*</span>教育背景</span> 
         <span class="dl_padl20 errmsg new_pop_error" id="errorMsg_7" style="display: none;"></span> 
        </div> 
        <div class="dl_basicborder" style="display: block;"> 
         <form method="post" id="emptyFrom_7" name="emptyFrom_7" enctype="multipart/form-data" action="<?=Url::toRoute(['apply/jiaoyu'])?>" style="display: block;"> 
          <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>">
       
          <div class="eduhistory_drmmbnew pos_realitive"> 
           <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;">
            <span class="floatright"><a name="delItem" href="javascript:void(0)">删除</a> <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a></span>
           </div> 
           <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
            <div class="form_container" id="RecruitmentPortal.Education"> 
             <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li><label class="current">学校名称：</label> <input type="text" name="school_name" id="308aced9-d820-4c82-9a5d-4d0637ad2c387101171011" value="" /> <span class="desc">请从大学以来的教育经历开始填写.</span></li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li> <label class="current"> 时间：</label> 
                  <select class="sel_date_year" name="StartDate_Year">
                     <?php for ($i=2000; $i <= 2017; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                    <?php }?>
                  </select> 
                  <span class="txt">年</span> 
                  <select class="sel_date_month" name="StartDate_Month">
                     <?php for ($i=1; $i < 13; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                   <?php }?> 
                  </select> 
                  <span class="txt">月</span> <span class="txt">&nbsp;&nbsp;至</span> 
                  <select class="sel_date_year" name="EndDate_Year">
                     <?php for ($i=2000; $i <= 2017; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                    <?php }?>
                  </select> <span class="txt">年</span> 
                  <select class="sel_date_month" name="EndDate_Month">
                     <?php for ($i=1; $i < 13; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                   <?php }?> 
                  </select> <span class="txt">月&nbsp;&nbsp;</span>
                  <input type="checkbox" class="selNowDate" name="EndDate_ToNow" value="1"/>
                  <span class="txt">&nbsp;&nbsp;至今</span> </li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li><label class="current label_required">专业名称：</label> 
                  <input class="{required:true,messages:'请填写专业名称'} mul_input " name="MajorName" id="59a196d7-8511-4bbb-99ca-226533573e2c7101171011" value="" /> 
                </li> 
                <li><label class="current label_required">学历：</label> 
                  <select name="Education_EducationLevel" id="EducationLevel" class="mul_select"> 
                    <option value="">请选择</option> 
                    <option value="高中及以下">高中及以下</option> 
                    <option value="中技（中专/技校/职高）">中技（中专/技校/职高）</option> 
                    <option value="大专">大专</option> 
                    <option value="本科">本科</option> 
                    <option value="硕士研究生">硕士研究生</option> 
                    <option value="MBA">MBA</option> 
                    <option value="博士研究生">博士研究生</option> 
                  </select> </li> 
                <li><label class="current label_required">学位：</label> 
                  <select name="Education_Degree" id="Degree" class="mul_select"> 
                    <option value="">请选择</option> 
                    <option value="无">无</option> 
                    <option value="学士">学士</option> 
                    <option value="双学士">双学士</option> 
                    <option value="硕士">硕士</option> 
                    <option value="MBA">MBA</option> 
                    <option value="博士">博士</option> 
                  </select> </li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_borderdashed"></div> 
      
        </div> 
        <input type="hidden" class="viewName" value="0" /> 
        <div class="dl_mgtop10"> 
         <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
        </div> 
       </div> 
       <div class="dl_educationwrap mainContainer"> 
        <a name="工作经验"></a> 
        <div class="dl_greyline_bg"> 
         <span class="dl_menutit "><span style="color:red;">*</span>工作经验</span> 
         <span class="dl_padl20 errmsg new_pop_error" id="errorMsg_6" style="display: none;"></span> 
        </div> 
        <div class="dl_basicborder" style="display: block;"> 
        
        
          <div class="eduhistory_drmmbnew pos_realitive"> 
           <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;">
            <span class="floatright"><a name="delItem" href="javascript:void(0)">删除</a> <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a></span>
           </div> 

           <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
        
        
            <div class="form_container" id="RecruitmentPortal.Experience"> 
             <h2 class="form_title"> <strong>工作经验</strong> <span class="tab"></span> </h2> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li><label class="current label_required">单位名称：</label> <input class="{required:true,messages:'请填写单位名称'} mul_input " name="gCompanyName" id="60601b31-bd84-40c5-bc95-c119924339726101161011" value="" /> </li> 
                <li><label class="current label_required">职位名称：</label> <input class="{required:true,messages:'请填写职位名称'} mul_input " name="gJobTitle" id="ddfb579e-9ab6-4591-8556-1163fb1dc9916101161011" value="" /> </li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li> <label class="current"> 工作时间：</label> 
                  <select class="sel_date_year" name="gStartDate_Year">
                    <?php for ($i=2000; $i <= 2017; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                    <?php }?>
                  </select> 
                  <span class="txt">年</span> 
                  <select class="sel_date_month" name="gStartDate_Month">
                    <?php for ($i=1; $i < 13; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                   <?php }?> 
                  </select> 
                  <span class="txt">月</span> 
                  <span class="txt">&nbsp;&nbsp;至</span>
 
                  <select class="sel_date_year" name="gEndDate_Year">
                     <?php for ($i=2000; $i < 2017; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                    <?php }?>
                  </select> 
                  <span class="txt">年</span> 
                  <select class="sel_date_month" name="gEndDate_Month">
                      <?php for ($i=1; $i < 13; $i++) { ?>
                      <option value="<?=$i?>"><?=$i?></option>
                   <?php }?> 
                  </select> 
                  <span class="txt">月&nbsp;&nbsp;</span> 
                  <input type="checkbox" class="selNowDate" name="gEndDate_ToNow" value="1"/> 
                  <span class="txt">&nbsp;&nbsp;至今</span> </li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li><label class="current label_required">工作职责：</label> <textarea class="textarea mul_textarea" rows="6" name="gJobDuty" cols="60"></textarea> </li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_borderdashed"></div> 
        
        </div> 
        <input type="hidden" class="viewName" value="0" /> 
        <div class="dl_mgtop10"> 
         <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
        </div> 
       </div> 
       <div class="dl_educationwrap mainContainer"> 
        <a name="语言能力"></a> 
        <div class="dl_greyline_bg"> 
         <span class="dl_menutit ">语言能力</span> 
         <span class="dl_padl20 errmsg new_pop_error" id="errorMsg_4" style="display: none;"></span> 
        </div>
        <div class="dl_basicborder" style="display: block;"> 
       
          <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>">

             <?php 
      $cookie = \Yii::$app->request->cookies;
      //返回一个\yii\web\Cookie对象
       $user = $cookie->getValue('user')
      ?>
      <input type="hidden" name="user_id" value="<?=$user['id']?>">
      <input type="hidden" name="apply_id" value="<?=$apply_id?>">
          <div class="eduhistory_drmmbnew pos_realitive"> 
           <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;">
            <span class="floatright"><a name="delItem" href="javascript:void(0)">删除</a> <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a></span>
           </div> 
           <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           
           
            <div class="form_container" id="RecruitmentPortal.Lang"> 
             <h2 class="form_title"> <strong>语言能力</strong> <span class="tab"></span> </h2> 
             <div class="form_part"> 
              <div class="form_part_container columnone"> 
               <ul> 
                <li><label>语言类型：</label> 
                  <select name="yLanguageType" id="RecruitmentPortalLang_LanguageType" class="dropdownlist mul_select"> 
                    <option value="">请选择</option> 
                    <option value="英语" title="英语">英语</option> 
                    <option value="日语" title="日语">日语</option> 
                    <option value="韩语" title="韩语">韩语</option> 
                    <option value="法语" title="法语">法语</option> 
                    <option value="德语" title="德语">德语</option> 
                    <option value="西班牙语" title="西班牙语">西班牙语</option> 
                    <option value="意大利语" title="意大利语">意大利语</option> 
                    <option value="阿拉伯语" title="阿拉伯语">阿拉伯语</option> 
                    <option value="俄语" title="俄语">俄语</option> 
                    <option value="其他" title="其他">其他</option> 
                  </select> </li> 
                <li><label>掌握程度：</label> 
                  <select name="yLanguageLevel" id="RecruitmentPortalLang_LanguageLevel" class="dropdownlist mul_select"> 
                    <option value="">请选择</option> 
                    <option value="入门" title="入门">入门</option> 
                    <option value="熟练" title="熟练">熟练</option> 
                    <option value="精通" title="精通">精通</option> 
                    <option value="母语" title="母语">母语</option> 
                  </select> </li> 
                <li><label>听说：</label> 
                  <select name="yListeningSpeakingAbility" id="RecruitmentPortalLang_ListeningSpeakingAbility" class="dropdownlist mul_select"> 
                    <option value="">请选择</option> 
                    <option value="入门" title="入门">入门</option> 
                    <option value="熟练" title="熟练">熟练</option> 
                    <option value="精通" title="精通">精通</option> 
                    <option value="母语" title="母语">母语</option> 
                  </select> </li> 
                <li><label>读写：</label> 
                  <select name="yReadingWritingAbility" id="RecruitmentPortalLang_ReadingWritingAbility" class="dropdownlist mul_select"> 
                    <option value="">请选择</option> 
                    <option value="入门" title="入门">入门</option> 
                    <option value="熟练" title="熟练">熟练</option> 
                    <option value="精通" title="精通">精通</option> 
                    <option value="母语" title="母语">母语</option> 
                  </select> </li> 
               </ul> 
              </div> 
              <div class="clear"></div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_borderdashed"></div> 
         </form> 
        </div> 
        <input type="hidden" class="viewName" value="0" /> 
        <div class="dl_mgtop10"> 
         <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
        </div> 
       </div> 
       <div class="dl_bd_btm"></div> 
       <div class="dl_cen_txt dl_htline32 dl_padt15"> 
        <span class="dl_btn_lev dl_ft14_grey dl_padr10"><a name="btnPre" href="#this"><b>上一步</b></a></span> 
        <a name="btnNext" href="#this" class="dl_btn_grey1"> <span>保存并下一步</span> </a> 
       </div> 
       <div class="error_show" style="text-align: center; padding-top: 10px; display: none">
        <span class="new_pop_error" style="width: auto; font-weight: bold">部分内容未填写完整，请完善。</span>
       </div> 
      </div> 
     </div> 
     <script src="job/jquery-1.8.3.js"></script>
     <script>
        $(function(){
            // $(".dl_add_ico").click(function(){
            //   $(".dl_basicborder").style="display:block";
            //    $("#emptyFrom_7").style="display:block";
            // });
        $(".dl_btn_grey1").click(function(){
           $("#emptyFrom_7").submit();
         
        });
      })
     </script>