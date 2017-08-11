   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <script type="text/javascript">

        $(document).ready(function () {

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
        <li> <a href="?r=apply/member_apply" class="apply">我的申请</a> </li> 
       <li> <a href="?r=apply/member_resume" class="profile">我的简历</a> </li> 
     
       <li class="selected settingchoose"> <span class="dl_menuchose">已收藏职位</span> </li> 
       <!--<li 
         >
        
       <a href="/Portal/Account/EditPwd" class="changepwd">修改密码</a>
        
    </li--> 
       <li> <a href="?r=apply/member_info" class="accountSettings">账户设置</a> </li> 
      </ul> 
     </div> 
     <div class="rightcontent"> 
      <h3 class="dl_bigtit"><span class="dl_postit">已收藏职位</span></h3> 
      <!--有数据时--> 
      <?php if(!empty($shoucang_list)){
        foreach ($shoucang_list as $key => $val) {
          ?>
         
       <div class="dl_listposition dl_mgtop10"> 
       <h4> <span class=" floatright dl_ft14_grey">未申请</span> <span class="position blue"><a href="detail.html?620025249">学术总监</a> </span> <span class="address">北京市</span> </h4> 
       <ul class="detail clearfix"> 
        <li>职位编号：A620025249</li> 
        <li>截止日期：- - -</li> 
        <li>职位状态：正常</li> 
        <li class="dl_textright"><a href="javascript:void(0)" newid="110020233" class="delete">删除</a> <a href="###" url="/Portal/Resume/ResumeItem?jId=620025249&amp;pId=1" isallowreapply="True" isapplied="False" class=" dl_mglft10 dl_ft12_grey apply">申请&gt;&gt;</a></li> 
       </ul> 
       <div class="dl_bd_btm dl_padt15"></div> 
      </div> 

      <?php  }
      }?>
      
      <!--e有数据结束--> 
      <!--s无数据--> 
      <div class="dl_more blue dl_ft14">
       <b><a href="index.html">查看更多职位&gt;&gt;</a></b>
      </div> 
      <input id="proId" type="hidden" /> 
     </div> 
    </div> 
    <!--简历内容 e--> 