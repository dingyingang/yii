   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <style type="text/css">
        .dl_dialog_wrap span.new_pop_error {
            background: none;
            padding-left: 0px;
            color: #F17F7F;
            font-size: 12px;
            width: 260px;
        }

        .wish_container {
            width: 400px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: 10px;
        }

            .wish_container span.wish_err {
                margin-left: 130px;
            }

        .tit {
            width: 100px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            padding-top: 10px;
        }

        .wish_container tr td select {
            width: 150px;
        }

        .wish_ct {
            max-height: 130px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .dl_listposition .detail li {
            width: 144px;
        }

            .dl_listposition .detail li.testResult {
                width: 250px;
            }

            .dl_listposition .detail li a {
                padding-right: 5px;
            }

            .dl_listposition .detail li span {
                padding-right: 5px;
            }
    </style> 
    <script type="text/javascript">

        $(document).ready(function(){
        
            var promptView = new UserPrompt({
                targetSelector: 'a.accountSettings'
                , promptText: '在账户设置中，可以改用户名和密码啦！'
            });
            promptView.show();
        })
    </script> 
    <div class="dl_bigwrap dl_gray_bg clearfix"> 
     <div class="leftmenu"> 
      <div class="dl_greyline_bg"> 
       <span class="dl_menutit">个人中心</span> 
      </div> 
      <ul class="dl_menulist clearfix"> 

       <li class="selected settingchoose"> <span class="dl_menuchose">我的申请</span> </li> 
       <li> <a href="?r=apply/member_resume" class="profile">我的简历</a> </li> 
       <li> <a href="?r=apply/member_collect" class="shoucang">已收藏职位</a> </li>
       <!--<li 
         >
        
       <a href="/Portal/Account/EditPwd" class="changepwd">修改密码</a>
        
    </li--> 
        <li> <a href="?r=apply/member_info" class="accountSettings">账户设置</a> </li> 
      </ul> 
     </div> 
     <div class="rightcontent"> 
      <h3 class="dl_bigtit"><span class="dl_postit">我的申请</span> <?php if($coun == 3){
        echo '<span class="dl_mglft10">你最多只能申请<span>3</span>个社招职位</span>';
      }else{
        $kk = 3-$coun;
        echo '<span class="dl_mglft10">你还可以申请<span>'.$kk.'</span>个社招职位</span>';
      }
      ?></h3> 
      <li class="result"> </li> 



  <?php foreach ($shenqing as $key => $val) {?>
 
      <div class="dl_mgtop20"> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">已完成申请</span> 
       </div> 
      </div> 
      <div class="dl_listposition dl_mgtop10"> 
       <h4> <span class="position blue"><a href="detail.html?620025245"><?=$val['apply_zhiye_qi']?></a> </span> <span class="address"><?=$val['address']?></span> </h4> 
       <ul class="detail clearfix"> 
        <li>职位编号：<?=$val['zhi_num']?></li> 
        <li>截止日期：<?=$val['end_time']?></li> 
        <li>职位状态：<?php if(strtotime($val['end_time']) > time()) {
           echo '正常';
         }else{
           echo '过期';
         }
       
       
        ?></li> 
        <li class="testResult result" id="110783809" jobid="620016222" personid="622717076"> <a href="/Portal/Apply/ApplyDetail?jId=620025245&amp;applyId=110621433" target="_blank" class="dl_mglft10">查看申请</a> <a href="/Portal/Apply/ApplyDetail?jId=620025245&amp;applyId=110621433&amp;printing=true" target="_blank" class="dl_mglft10">打印&gt;&gt;</a> </li> 
       </ul> 
       <ul class="detail clearfix"> 
        <li>申请日期：<?=date("Y-m-d H:i:s",$val['shen_time'])?></li> 
        <li>申请状态：<?php if($val['status']==0){
          echo '处理中';
        }else if($val['status'] == 1){
          echo '恭喜您！申请通过';
        }else{
          echo '申请没有通过';
        }?></li> 
       </ul> 
      </div> 
<?php }?>

      <!-- 修改校招志愿 --> 
      <div class="tableNew" name="editform" style="display: none;"> 
       <div style="margin-bottom: 15px;">
        <span class="dl_postit">修改校招志愿</span>
       </div> 
       <div class="wish_ct"> 
        <table class="wish_container"> 
        </table> 
       </div> 
       <div class="wish_container">
        <span name="wishError" class="new_pop_error wish_err" style="display: none;"></span>
       </div> 
       <div class="wish_container">
        <span class="position dl_ft12_grey">注：请按照从第一志愿开始的顺序修改志愿，例：若只有两个志愿，那只能选择一个为第一志愿，一个为第二志愿</span>
       </div> 
      </div> 
      <div class="dl_bd_btm dl_padt15"></div> 
      <div class="dl_more blue dl_ft14">
       <b><a href="?r=site/index">查看更多职位&gt;&gt;</a></b>
      </div> 
      <input id="proId" type="hidden" /> 
     </div> 
    </div> 
    <!--简历内容 e--> 
   </div> 