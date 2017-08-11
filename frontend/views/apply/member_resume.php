  <?php
  use yii\helpers\Url;
  ?>
   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <script type="text/javascript">

        $(document).ready(function () {

            var promptview = new UserPrompt({
                targetSelector: 'a.accountsettings'
                , promptText: '在账户设置中，可以改用户名和密码啦！'
            });
            promptview.show();
        })
    </script> 
    <div class="dl_bigwrap dl_heightagain clearfix dl_grey_bc"> 
     <div class="leftmenu"> 
      <div class="dl_greyline_bg"> 
       <span class="dl_menutit">个人中心</span> 
      </div> 
      <ul class="dl_menulist clearfix"> 
       <ul class="dl_menulist clearfix"> 
         <li> <a href="?r=apply/member_apply" class="apply">我的申请</a> </li> 
       <li class="selected settingchoose"> <span class="dl_menuchose">我的简历</span> </li> 
       <li> <a href="?r=apply/member_collect" class="shoucang">已收藏职位</a> </li>
        <!--<li 
         >
        
       <a href="/Portal/Account/EditPwd" class="changepwd">修改密码</a>
        
    </li--> 
        <li> <a href="?r=apply/member_info" class="accountSettings">账户设置</a> </li> 
       </ul> 
      </ul> 
     </div> 
     <div class="rightcontent dl_height1 dl_new_error_wrap"> 
      <h3 class="dl_bigtit"><span class="dl_postit">我的简历</span></h3> 
      <div class="dl_importprofile"> 
       <a class="import dl_import" href="<?=Url::toRoute(['apply/apply_download','apply_id'=>$jianli[0]['id']])?>">导入简历</a> 
       <a id="previewBtn" class="look" target="preview" href="/Portal/Resume/PreviewResume?applyform=e725c9e8-01eb-42ca-8321-eee7569f5301" style="">预览简历</a> 
       <span id="previewBtnDisable" class="look" style="color:#666;display:none;">预览简历</span> 
      </div> 
      <style type="text/css">
    *html .dl_myleftform .form_container {
        width: 490px;
        overflow: hidden;
    }

        *html .dl_myleftform .form_container .form_part .columntwo ul {
            width: 360px;
            overflow: hidden;
        }

        *html .dl_myleftform .form_container ul li {
            width: 360px;
            overflow: hidden;
        }
            /* .dl_myleftform .form_container li label{width: 100px}*/
            *html .dl_myleftform .form_container ul li span.preview_text {
                width: 220px;
                overflow: hidden;
            }

    .form_container li textarea {
        border: 1px solid #c1d5df;
        float: left;
        height: 100px;
        margin-right: 5px;
        padding: 3px;
        width: 300px;
    }
</style> 
      <div class="dl_basicinfo"> 
       <div class="dl_greyline_bg">
        <span class="dl_menutit ">个人信息</span>
       </div> 
       <div class="dl_basicborder mainContainer "> 
        <form method="post" id="cd7c7714-b39a-43a0-9c7e-f7382f04f5cd" name="cd7c7714-b39a-43a0-9c7e-f7382f04f5cd" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="clearfix"> 
          <div id="resumeitems" name="singleedit" class="dl_myleftform" style="display:none;;"> 
        
         
           <div class="form_container" id="RecruitmentPortal.PersonProfile"> 
            <h2 class="form_title"> <strong>个人信息</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label class="current label_required">姓名：</label> <input class="{required:true,messages:&quot;请填写姓名&quot;} mul_input" name="RecruitmentPortalPersonProfile_Name" id="4c037148-140a-4c2b-b87a-b97609215d7011" value="<?=$jianli[0]['username']?>" /> <span class="desc"></span> </li> 
               <li><label class="current label_required">邮箱：</label> <input class="{required:true,messages:&quot;请填写邮箱&quot;} mul_input" name="RecruitmentPortalPersonProfile_email" id="67a5c587-4f90-4ae7-819f-eb3dba9ea39911" value="416148489@qq.com" /> <span class="desc"></span> </li> 
               <li><label class="current label_required">手机号：</label> <input class="{required:true,messages:'请填写手机号'} mul_input " name="RecruitmentPortalPersonProfile_Mobile" id="acb9b67f-9643-41fb-a7fe-5ff8d742ccdf11" value="13851435593" /> </li> 
               <li><label>出生日期：</label> <input class="mul_input Wdate" name="RecruitmentPortalPersonProfile_Birthday" id="436ab7a4-67a1-4819-a238-d5d34eb0717611" value="2003/12/15" /> <span class="desc"></span> </li> 
               <li><label>性别：</label> 
                <div class="radio_list"> 
                 <input type="radio" name="RecruitmentPortalPersonProfile_gender" value="0" checked="checked" /> 
                 <label class="radio_label">男</label> 
                 <input type="radio" name="RecruitmentPortalPersonProfile_gender" value="1" /> 
                 <label class="radio_label">女</label> 
                </div> </li> 
               <li><label>现居住地：</label> <input type="text" readonly="true" displayname="现居住地" constname="Areas" value="" class="Ajson ConstDictSingleSelect" id="RecruitmentPortalPersonProfile_ResidenceState_Id" /> <input type="hidden" name="RecruitmentPortalPersonProfile_ResidenceState" id="RecruitmentPortalPersonProfile_ResidenceState" class=" ResidenceState" /> <span class="desc">例：浙江省杭州市</span> </li> 
               <li><label>户口所在地：</label> <input type="text" readonly="true" displayname="户口所在地" constname="Areas" value="" class="Ajson ConstDictSingleSelect" id="RecruitmentPortalPersonProfile_RPR_Id" /> <input type="hidden" value="" name="RecruitmentPortalPersonProfile_RPR" id="RecruitmentPortalPersonProfile_RPR" class="ResidenceState" /> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columntwo"> 
              <ul> 
               <li><label>最高学历：</label> <select name="RecruitmentPortalPersonProfile_EducationLevel" id="RecruitmentPortalPersonProfile_EducationLevel" class="mul_select"> <option value="">请选择</option> <option value="3">高中及以下</option> <option value="4">中技（中专/技校/职高）</option> <option value="5">大专</option> <option value="1">本科</option> <option value="2">硕士研究生</option> <option value="6">MBA</option> <option value="7">博士研究生</option> </select> </li> 
               <li><label>学习形式：</label> <select name="RecruitmentPortalPersonProfile_EducationStudyMode" id="RecruitmentPortalPersonProfile_EducationStudyMode" class="mul_select"> <option value="">请选择</option> <option value="1">全国普通高等院校全日制</option> <option value="2">成人高等教育</option> <option value="3">专升本 </option> <option value="4">自学考试 </option> <option value="5">其它</option> </select> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>民族：</label> <select name="RecruitmentPortalPersonProfile_Nation" id="RecruitmentPortalPersonProfile_Nation" class="mul_select"> <option value="">请选择</option> <option value="1">汉族</option> <option value="2">回族</option> <option value="3">畲族</option> <option value="4">塔塔尔族</option> <option value="5">阿昌族</option> <option value="6">哈萨克族</option> <option value="7">土家族</option> <option value="8">景颇族</option> <option value="9">哈尼族</option> <option value="10">土族</option> <option value="11">白族</option> <option value="12">维吾尔族</option> <option value="13">保安族</option> <option value="14">赫哲族</option> <option value="15">乌孜别克族</option> <option value="16">基诺族</option> <option value="17">布依族</option> <option value="18">拉祜族</option> <option value="19">锡伯族</option> <option value="20">黎族</option> <option value="21">东乡族</option> <option value="22">蒙古族</option> <option value="23">仫佬族</option> <option value="24">达斡尔族</option> <option value="25">藏族</option> <option value="26">毛南族</option> <option value="27">裕固族</option> <option value="28">俄罗斯族</option> <option value="29">德昂族</option> <option value="30">僳僳族</option> <option value="31">瑶族</option> <option value="32">朝鲜族</option> <option value="33">布朗族</option> <option value="34">满族</option> <option value="35">彝族</option> <option value="36">门巴族</option> <option value="37">侗族</option> <option value="38">苗族</option> <option value="39">佤族</option> <option value="40">羌族</option> <option value="41">独龙族</option> <option value="42">怒族</option> <option value="43">珞巴族</option> <option value="44">普米族</option> <option value="45">傣族</option> <option value="46">纳西族</option> <option value="47">高山族</option> <option value="48">壮族</option> <option value="49">额伦春族</option> <option value="50">塔吉克族</option> <option value="51">京族</option> <option value="52">仡佬族</option> <option value="53">鄂温克族</option> <option value="54">撒拉族</option> <option value="55">柯尔克孜族</option> <option value="56">水族</option> <option value="57">其它</option> </select> </li> 
               <li><label>证件照：</label> <input type="hidden" name="RecruitmentPortalPersonProfile_IDPhoto" id="c71310e0-0bef-4173-9826-21a572d4943d11" value="" /> <span><a class="uploadfile" id="c71310e0-0bef-4173-9826-21a572d4943d11_btn">上传</a></span> <span class="desc uploaddesc">推荐1寸照片尺寸，70x100象素。支持jpg，jpeg, gif，bmp或png格式，大小不超过512k</span>
                <ul id="c71310e0-0bef-4173-9826-21a572d4943d11_info" class="uploadfilescontainer" style="margin-left:70px;"> 
                </ul> </li> 
               <li><label>自我评价：</label> <textarea class="textarea mul_textarea" name="RecruitmentPortalPersonProfile_evaluation" id="628bbf58-340a-42d3-bb4d-9e892582841211"></textarea> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div name="singleview" class="dl_myleftform" style=""> 
           <div class="form_container" id="RecruitmentPortal.PersonProfile"> 
            <h2 class="form_title"> <strong>个人信息</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>姓名：</label> <span class="preview_text"><?=$jianli[0]['username']?></span> </li> 
               <li><label>邮箱：</label> <span class="preview_text"><?=$jianli[0]['email']?></span> </li> 
               <li><label>手机号：</label> <span class="preview_text"><?=$jianli[0]['tall']?></span> </li> 
               <li><label>出生日期：</label> <span class="preview_text"><?=$jianli[0]['chu_time']?></span> </li> 
               <li><label>性别：</label> <span name="RecruitmentPortalPersonProfile_gender_span" class="preview_text"> <?=$jianli[0]['sex'] == 0 ? '男' : '女'?></span> </li> 
               <li><label>现居住地：</label> <span class="preview_text"><?=$city_aa?></span> </li> 
               <li><label>户口所在地：</label> <span class="preview_text"><?=$city_aa?></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columntwo"> 
              <ul> 
               <li><label>最高学历：</label> <span class="preview_text"><?=$jianli[0]['Education_EducationLevel']?></span></li> 
              
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>证件照：</label> <a href="about.html"></a> <span class="preview_text"><img src="<?=$jianli[0]['zhengjian']?>" width="150" alt=""></span></li> 

              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_myrightfile"> 
           <div style="width: 118px; margin-left: 12px"> 
            <a name="btnSingleSave" href="#this" class="dl_btn_grey3" style="display:none;"> <span>保存</span> </a> 
            <a name="btnSingleCancel" href="#this" class="dl_btn_grey3" style="display:none;float: right;"> <span>取消</span> </a> 
            <a name="btnSingleEdit" href="javascript:void(0)" class="dl_mglft10" style="float: right; padding-bottom: 10px;">编辑</a> 
           </div> 
           <img id="idPhoto" style="width: 120px; height: 140px; padding-top: 10px; display: none;" src="images/upfile.jpg" /> 
           <br /> 
           <a class="blue" id="idPhotoUploadBtn" href="javascript:void(0)" style="display:none;">上传照片</a> 
           <ul id="idPhotoerrinfo" class="warninfo" style="color: #f17f7f; font-size: 12px;"> 
           </ul> 
           <ul id="idPhotowarninfo" class="warninfo" style="display:none;"> 
           </ul> 
          </div> 
         </div> 
        </form> 
        <input type="hidden" class="viewName" value="201307040448453721" /> 
       </div> 
      </div> 
      <style type="text/css">
    *html .dl_myleftform .form_container {
        width: 490px;
        overflow: hidden;
    }

        *html .dl_myleftform .form_container .form_part .columntwo ul {
            width: 360px;
            overflow: hidden;
        }

        *html .dl_myleftform .form_container ul li {
            width: 360px;
            overflow: hidden;
        }
            /* .dl_myleftform .form_container li label{width: 100px}*/
            *html .dl_myleftform .form_container ul li span.preview_text {
                width: 220px;
                overflow: hidden;
            }

    .form_container li textarea {
        border: 1px solid #c1d5df;
        float: left;
        height: 100px;
        margin-right: 5px;
        padding: 3px;
        width: 300px;
    }
</style> 
      <div class="dl_basicinfo"> 
       <div class="dl_greyline_bg">
        <span class="dl_menutit ">求职意向</span>
       </div> 
       <div class="dl_basicborder mainContainer "> 
        <form method="post" id="fdfa1ef1-0a89-4bf9-8500-674c5e233e3f" name="fdfa1ef1-0a89-4bf9-8500-674c5e233e3f" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="clearfix"> 
          <div id="resumeitems" name="singleedit" class="dl_myleftform" style="display:none;;"> 
           <input type="hidden" name="oId" id="Hidden1" value="f09d29a6-3c52-4237-bcd5-ecaddf83c9de" /> 
           <input type="hidden" name="jId" id="Hidden4" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden5" value="1" /> 
           <input name="_objectDataID" type="hidden" value="OGJjNjNiM2UtZDYzZC00MTZiLThjMWYtOTkwNzIyODJlZTNmJGYwOWQyOWE2LTNjNTItNDIzNy1iY2Q1LWVjYWRkZjgzYzlkZQ==" />
           <input name="_metaObjID" type="hidden" value="OGJjNjNiM2UtZDYzZC00MTZiLThjMWYtOTkwNzIyODJlZTNm" />
           <input name="_viewName" type="hidden" value="T2JqZWN0aXZlVmlldw==" />
           <input name="_version" type="hidden" value="MjAxMzA3MDQwNDQ4NDU2MDkx" />
           <input name="_formIndex" type="hidden" value="11" />
           <div class="form_container" id="RecruitmentPortal.Objective"> 
            <h2 class="form_title"> <strong>求职意向</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>现从事职业：</label> <input type="text" readonly="true" displayname="现从事职业" constname="JobCategory" value="" class="Ajson ConstDictSingleSelect" id="RecruitmentPortalObjective_CurrJobCategory_Id" /> <input type="hidden" value="" name="RecruitmentPortalObjective_CurrJobCategory" id="RecruitmentPortalObjective_CurrJobCategory" class="ResidenceState" /> </li> 
               <li><label>求职状态：</label> <select name="RecruitmentPortalObjective_WorkState" id="RecruitmentPortalObjective_WorkState" class="mul_select"> <option value="">请选择</option> <option value="1">正在主动找工作</option> <option value="2">可以考虑更好的工作机会</option> <option value="3">目前不想找工作</option> </select> </li> 
               <li><label>期望从事职业：</label> <input type="text" readonly="true" displayname="期望从事职业" constname="JobCategory" value="美术&middot;设计&middot;创意类" class="Ajson ConstDictSingleSelect" id="RecruitmentPortalObjective_ExpectJobCategory_Id" /> <input type="hidden" value="158" name="RecruitmentPortalObjective_ExpectJobCategory" id="RecruitmentPortalObjective_ExpectJobCategory" class="ResidenceState" /> </li> 
               <li><label>现月薪(税前)：</label> <select name="RecruitmentPortalObjective_CurrSalary" id="RecruitmentPortalObjective_CurrSalary" class="mul_select"> <option value="">请选择</option> <option value="1">1000以下</option> <option value="2">1000～2000</option> <option value="3">2001～4000</option> <option value="4">4001～6000</option> <option value="5">6001～8000</option> <option value="6">8001～10000</option> <option value="7">10001～15000</option> <option value="8">15001～25000</option> <option value="9">25000以上</option> <option value="10">面议</option> </select> </li> 
               <li><label>期望月薪(税前)：</label> <select name="RecruitmentPortalObjective_ExpectSalary" id="RecruitmentPortalObjective_ExpectSalary" class="mul_select"> <option value="">请选择</option> <option value="1">1000以下</option> <option value="2">1000～2000</option> <option value="3">2001～4000</option> <option value="4">4001～6000</option> <option value="5">6001～8000</option> <option value="6">8001～10000</option> <option value="7">10001～15000</option> <option value="8">15001～25000</option> <option value="9">25000以上</option> <option value="10">面议</option> </select> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div name="singleview" class="dl_myleftform" style=""> 
           <div class="form_container" id="RecruitmentPortal.Objective"> 
            <h2 class="form_title"> <strong>求职意向</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>现从事职业：</label> <span class="preview_text"><?=$jianli[0]['zhiye_now']?></span> </li> 
               <li><label>期望从事职业：</label> <span class="preview_text"><?=$jianli[0]['zhiye_qi']?></span> </li> 
               <li><label>现月薪(税前)：</label>  <span class="preview_text"><?=$jianli[0]['money_now']?></span> </li> 
               <li><label>期望月薪(税前)：</label>  <span class="preview_text"><?=$jianli[0]['money_qi']?></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
           </div> 
          </div> 
          <div class="dl_myrightfile"> 
           <div style="width: 118px; margin-left: 12px"> 
            <a name="btnSingleSave" href="#this" class="dl_btn_grey3" style="display:none;"> <span>保存</span> </a> 
            <a name="btnSingleCancel" href="#this" class="dl_btn_grey3" style="display:none;float: right;"> <span>取消</span> </a> 
            <a name="btnSingleEdit" href="javascript:void(0)" class="dl_mglft10" style="float: right; padding-bottom: 10px;">编辑</a> 
           </div> 
          </div> 
         </div> 
        </form> 
        <input type="hidden" class="viewName" value="201307040448456091" /> 
       </div> 
      </div> 
      <div class="dl_educationwrap mainContainer" style="padding: 0px 20px;"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">教育背景</span> 
       </div> 
       <div class="dl_basicborder" style="display: none;"> 
        <form method="post" id="emptyFrom_7" name="emptyFrom_7" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem" style="display: none;"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 660px;">
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a>
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="oId" value="" /> 
           <input type="hidden" name="jId" id="jId" value="-1" /> 
           <input type="hidden" name="mId" id="mId" value="7" /> 
           <div class="form_container" id="RecruitmentPortal.Education"> 
            <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学校名称：</label> <span class="preview_text"></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 时间：</label> <span class="preview_text start_date"> </span> <span class="preview_text end_date"> </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学历：</label> <span class="preview_text"><?=$jianli[0]['Education_EducationLevel']?></span></li> 
               <li><label>学位：</label> <span class="preview_text"><?=$jianli[0]['Education_Degree']?></span></li> 
               <li><label>专业名称：</label> <span class="preview_text"><?=$jianli[0]['MajorName']?></span> </li> 
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
       <div class="dl_basicborder"> 
        <form method="post" id="10655b54-ca89-4bd0-a9a9-b65600e0174a" name="10655b54-ca89-4bd0-a9a9-b65600e0174a" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 150px;"> 
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a> 
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="Hidden7" value="39cc3186-545a-4cc9-8b9e-74c80a398ad8" /> 
           <input type="hidden" name="jId" id="Hidden8" value="-1" /> 
           <input type="hidden" name="mId" id="Hidden9" value="7" /> 
           <div class="form_container" id="RecruitmentPortal.Education"> 
            <h2 class="form_title"> <strong>教育背景</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学校名称：</label> <span class="preview_text">中国人民大学</span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 时间：</label> <span class="preview_text start_date"> 1973年07月至</span> <span class="preview_text end_date"> 今 </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>学历：</label> <span class="preview_text"><?=$jianli[0]['Education_EducationLevel']?></span> </li> 
               <li><label>学位：</label> <span class="preview_text"><?=$jianli[0]['Education_Degree']?></span> </li> 
               <li><label>专业名称：</label> <span class="preview_text"><?=$jianli[0]['MajorName']?></span> </li> 
     
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
      
      <div class="dl_educationwrap mainContainer" style="padding: 0px 20px;"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">工作经验</span> 
       </div> 
       <div class="dl_basicborder" style="display: none;"> 
        <form method="post" id="emptyFrom_6" name="emptyFrom_6" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem" style="display: none;"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 660px;">
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a>
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="oId" value="" /> 
           <input type="hidden" name="jId" id="jId" value="-1" /> 
           <input type="hidden" name="mId" id="mId" value="6" /> 
           <div class="form_container" id="RecruitmentPortal.Experience"> 
            <h2 class="form_title"> <strong>工作经验</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>单位名称：</label> <span class="preview_text"><?=$jianli[0]['gCompanyName']?></span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li> <label> 工作时间：</label> <span class="preview_text start_date"><?=$jianli[0]['gStartDate_Year'].'-'.$jianli[0]['gStartDate_Month']?> </span> <span class="preview_text end_date"><?=$jianli[0]['gEndDate_Year'].'-'.$jianli[0]['gEndDate_Month']?> </span> </li> 
              </ul> 
             </div> 
             <div class="clear"></div> 
            </div> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>职位名称：</label> <span class="preview_text"><?=$jianli[0]['gJobTitle']?></span> </li> 
              
               <li><label>工作职责：</label> <span class="preview_text"><?=$jianli[0]['gJobDuty']?></span> </li> 
              
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
      
      <div class="dl_educationwrap mainContainer" style="padding: 0px 20px;"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">语言能力</span> 
       </div> 
       <div class="dl_basicborder" style="display: none;"> 
        <form method="post" id="emptyFrom_4" name="emptyFrom_4" enctype="multipart/form-data" action="/Portal/Resume/ResumeItem" style="display: none;"> 
         <div class="eduhistory_drmmbnew pos_realitive"> 
          <div class="dl_delupd blue deletelink_edrmmb pos_absolute dl_right0" style="width: 660px;">
           <a name="delItem" href="javascript:void(0)">删除</a> 
           <a name="editItem" href="javascript:void(0)" class="dl_mglft10">编辑</a>
          </div> 
          <div id="resumeitems" class="eduinfo rightcontent_edrmmb"> 
           <input type="hidden" name="oId" id="oId" value="" /> 
           <input type="hidden" name="jId" id="jId" value="-1" /> 
           <input type="hidden" name="mId" id="mId" value="4" /> 
           <input name="_metaObjID" type="hidden" value="NTkwNGU4NWQtNTllNi00ZmY0LWI3MmMtNzYyMjZlYzc3ZjBm" />
           <input name="_viewName" type="hidden" value="TGFuZ1ZpZXc=" />
           <input name="_version" type="hidden" value="MjAxMzA3MDQwNDQ4NDU3MTIx" />
           <input name="_formIndex" type="hidden" value="41011" />
           <div class="form_container" id="RecruitmentPortal.Lang"> 
            <h2 class="form_title"> <strong>语言能力</strong> <span class="tab"></span> </h2> 
            <div class="form_part"> 
             <div class="form_part_container columnone"> 
              <ul> 
               <li><label>语言类型：</label> <select name="RecruitmentPortalLang_LanguageType" id="RecruitmentPortalLang_LanguageType" class="dropdownlist mul_select"> <option value="">请选择</option> <option value="0" title="英语">英语</option> <option value="1" title="日语">日语</option> <option value="2" title="韩语">韩语</option> <option value="3" title="法语">法语</option> <option value="4" title="德语">德语</option> <option value="5" title="西班牙语">西班牙语</option> <option value="6" title="意大利语">意大利语</option> <option value="7" title="阿拉伯语">阿拉伯语</option> <option value="8" title="俄语">俄语</option> <option value="9" title="其他">其他</option> </select> </li> 
               <li><label>掌握程度：</label> <select name="RecruitmentPortalLang_LanguageLevel" id="RecruitmentPortalLang_LanguageLevel" class="dropdownlist mul_select"> <option value="">请选择</option> <option value="1" title="入门">入门</option> <option value="2" title="熟练">熟练</option> <option value="3" title="精通">精通</option> <option value="4" title="母语">母语</option> </select> </li> 
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
       <input type="hidden" class="viewName" value="201307040448457121" /> 
       <div class="dl_mgtop10"> 
        <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!--简历内容 e--> 
   </div> 