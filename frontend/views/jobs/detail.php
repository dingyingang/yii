  <?php 
  use yii\helpers\Url;

  ?>
  <div class="contain zpcontain clearfix"> 
   <div class="clearfix zpdetail eheight"> 
    <!--module:positionsearch begin--> 
    <div class="bs-module"> 
     <div class="positionsearch-smallfresh "> 
      <a name="jlt"></a> 
      <div class="zhiweisousuo bodertop"> 
       <div class="parttitleline"></div> 
       <div class="parttitle"> 
        <span class="serchico"></span> 
        <div class="wordtitle">
         职位搜索
        </div> 
       </div> 
       <div class="serchcontain"> 
        <input type="hidden" name="p" value="" id="jobAdClassHidden" />
        <input type="hidden" name="p" value="" id="jobAdClassHidden" />
        <input type="hidden" name="p" value="" id="jobAdClassHidden" />
        <input type="hidden" name="p" value="" id="jobAdClassHidden" />
        <input type="hidden" name="p" value="" id="jobAdClassHidden" />
        <input type="hidden" name="p" value="" id="jobAdClassHidden" />
        <table class="jobserch"> 
         <tbody>
          <tr class="serchjob"> 
           <td class="listtitle">工作地点：</td> 
           <td> 
            <ul class="workplace"> 
             <span class="selectall"><span class="shuxian"></span><a href="/search?r=&amp;p=&amp;c=-1&amp;d=&amp;k=#jlt" class="chooseon" title="全部">全部</a></span> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=1&amp;d=&amp;k=#jlt" title="全国">全国</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=1100&amp;d=&amp;k=#jlt" title="北京市">北京市</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=1103&amp;d=&amp;k=#jlt" title="海淀区">海淀区</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=3100&amp;d=&amp;k=#jlt" title="上海市">上海市</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=3102&amp;d=&amp;k=#jlt" title="徐汇区">徐汇区</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=8100&amp;d=&amp;k=#jlt" title="香港">香港</a> </li> 
            </ul> </td> 
          </tr> 
          <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
          <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
          <tr class="serchjob"> 
           <td class="listtitle" title="职位类型">职位类型：</td> 
           <td> 
            <ul class="workplace"> 
             <span class="selectall"><span class="shuxian"></span><a href="/search?r=&amp;p=1^-1&amp;c=&amp;d=&amp;k=#jlt" class="chooseon" title="全部">全部</a></span> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=1^20&amp;c=&amp;d=&amp;k=#jlt" title="北京">北京</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=1^9&amp;c=&amp;d=&amp;k=#jlt" title="上海">上海</a> </li> 
            </ul> </td> 
          </tr> 
          <tr class="serchjob"> 
           <td class="listtitle">发布时间：</td> 
           <td> 
            <ul class="workplace"> 
             <span class="selectall"><span class="shuxian"></span><a href="/search?r=&amp;p=&amp;c=&amp;d=-1&amp;k=#jlt" class="chooseon">全部</a></span> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=&amp;d=3&amp;k=#jlt" title="三天内">三天内</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=&amp;d=7&amp;k=#jlt" title="一周内">一周内</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=&amp;d=30&amp;k=#jlt" title="一个月内">一个月内</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=&amp;d=90&amp;k=#jlt" title="三个月内">三个月内</a> </li> 
             <li> <span class="shuxian"></span> <a href="/search?r=&amp;p=&amp;c=&amp;d=180&amp;k=#jlt" title="半年内">半年内</a> </li> 
            </ul> </td> 
          </tr> 
          <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
          <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
          <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
          <tr class="serchjob"> 
           <td class="listtitle"></td> 
           <td> <input type="text" class="serchinput" maxlength="50" id="k" name="k" /><span class="serchbtn"><a href="javascript:void(0)" id="searchlink">搜索</a></span></td> 
          </tr> 
          <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
         </tbody>
        </table> 
       </div> 
      </div> 
      <script type="text/javascript">
    function GetParam(key) {
        return (document.location.search.match(new RegExp("(?:^\\?|&)" + key + "=(.*?)(?=&|$)")) || ['', null])[1];
    }

    function myHTMLEnCode(str) {
        var s = "";
        if (str.length == 0) return "";
        s = str.replace(/&/g, "&");
        s = s.replace(/</g, "<");
        s = s.replace(/>/g, ">");
        s = s.replace(/ /g, "&nbsp;");
        s = s.replace(/\'/g, "&#39;");
        
        s = s.replace(/\n/g, "<br>");
        return s;
    }

    function myHTMLDeCode(str) {
        var s = "";
        if (str.length == 0) return "";
        s = str.replace(/&/g, "&");
        s = s.replace(/</g, "<");
        s = s.replace(/>/g, ">");
        s = s.replace(/&nbsp;/g, " ");
        s = s.replace(/&#39;/g, "\'");
        s = s.replace(/"/g, "\"");
        s = s.replace(/<br>/g, "\n");
        return s;
    }

    var defaultText = "请输入关键字";

    $(document).ready(function () {
        $("input[name='keyword']").click(function () {
            $(this).val("");
        });

        var keyWord = GetParam("k");

        if (keyWord != null) {
            keyWord = decodeURIComponent(keyWord);
            keyWord = myHTMLDeCode(keyWord);

            $("input[name='k']").val(keyWord);
        }

        $("#searchlink").click(function () {
            var r = GetParam("r");
            r = (r == null ? -1 : r);
            var p = GetParam("p");
            p = (p == null ? "" : p);
            var c = GetParam("c");
            c = (c == null ? "" : c);
            var d = GetParam("d");
            d = (d == null ? "" : d);
            var k = $("input[name='k']").val();

            if (k == defaultText)
                k = "";

            k = myHTMLEnCode(k);
            k = encodeURIComponent($.trim(k));
            location.href = "/search" + "?r=" + r + "&p=" + p + "&c=" + c + "&d=" + d + "&k=" + k + '#jlt';
        });

        var keyStr = $("#k").val();
        if (!keyStr || keyStr == "") {
            $("#k").css("color", "#d2cece");
            $("#k").val(defaultText);
        }

        $("#k").focus(function () {
            var v = $(this).val();
            if (v == defaultText) {
                $(this).val("");
                $(this).css("color", "");
            }
        });

        $("#k").blur(function () {
            var v = $(this).val();
            if (!v || v == "") {
                $(this).val(defaultText);
                $(this).css("color", "#d2cece");
            }
        });

    });
</script> 
     </div> 
    </div> 
    <!--module:positionsearch end--> 
    <div class="zhaopindongtai nomargin bodertop nosame"> 
     <!--module:newslist begin--> 
     <div class="bs-module"> 
      <div class="newslist-newsimple "> 
       <div class="parttitleline"></div> 
       <div class="parttitle">
        <span class="dongtaiico"></span>
        <div class="wordtitle">
         招聘动态
        </div>
       </div> 
       <a href="news.html" class="morelinks">更多&gt;&gt;</a> 
       <div class="dongtailinks"> 
        <ul> 
         <li><a href="news_detail.html?110000085" title="51Talk最嗨实习岗来啦~快来一起嗨" target="_blank">51Talk最嗨实习岗来...</a></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
     <!--module:newslist end--> 
    </div> 
   </div> 
   <div class="zhiweixiangqing fr"> 
    <!--module:positiondetail begin--> 
    <div class="bs-module"> 
     <div class="positiondetail-simple "> 
      <script type="text/javascript">
   
</script> 
      <div class="xiangqingtitle"> 
       <span>业务培训总监/区域培训总监 /销售运 营总监 </span> 
      </div> 
      <div class="xiangqingcontain"> 
       <div class="xiangqingline"></div> 
       <ul class="xiangqinglist clearfix"> 
        <li class="ntitle td-HasRecruitCategories">招聘类别：</li> 
        <li class="nvalue"> <?=$gongsi_list[' leibie']?> </li> 
        <li class="ntitle td-HasKind">工作性质：</li> 
        <li class="nvalue"> <?=$gongsi_list['xingzhi']?> </li> 
        <li class="ntitle td-HasSalaries">薪资范围：</li> 
        <li class="nvalue"> <?=$gongsi_list['xzfanwei']?> </li> 
        <li class="ntitle td-HasHeadCount">招聘人数：</li> 
        <li class="nvalue"> <?=$gongsi_list['people_sum']?> </li> 
       </ul> 
       <ul class="xiangqinglist clearfix"> 
        <li class="ntitle td-HasPostDate">发布时间：</li> 
        <li class="nvalue"> <?=$gongsi_list['start_time']?> </li> 
        <li class="ntitle td-HasEndTime">截止时间：</li> 
        <li class="nvalue"> <?=$gongsi_list['end_time']?> </li> 
        <br /> 
        <div class="xiangqingtext"> 
         <p>工作地点:</p> 
         <p> <?=$gongsi_list['work_address']?></p> 
         <br /> 
         <p>工作职责:</p> 
         <p> <?php foreach ($gongsi_list['zhize'] as $key => $val) {
          $vv = $key+1;
            echo $vv.'、'.$val.'<br />';
         }?></p> 
         <br /> 
         <p>任职资格：</p> 
           <p> <?php foreach ($gongsi_list['zige'] as $key => $val) {
          $nn = $key+1;
            echo $nn.'、'.$val.'<br />';
         }?></p> 
        </div> 
        <div class="xiangqingfooter clearfix"> 
         <div class="footerbtn fl">
          <a href="<?=Url::toRoute(['jobs/shenqing','gs_id'=>$gongsi_list['gs_id'],'end_time'=>$gongsi_list['end_time'],'zhaoping_id'=>$gongsi_list['id'],'zhi_bianhao'=>$gongsi_list['zhi_bianhao']])?>" id="apply" url="/Portal/Resume/ResumeItem?jid=620025388&amp;r=%2Fzpdetail%2F620025388">现在申请</a>
         </div> 
         <a href="<?=Url::toRoute(['jobs/fanhui'])?>" class="returnlist">返回职位列表</a> 
        </div> 
        <div class="fenxiang clearfix"> 
         <a href="<?=Url::toRoute(['jobs/shoucang','zhaoping_id'=>$gongsi_list['id']])?>" id="collect">收藏</a> 
         <div style="padding-top: 10px"> 
          <div class="shareto" style="float: left; margin-left: 20px; margin-bottom: 20px">
           分享到：
          </div> 
          <div style="float: left" class="jiathis_style"> 
           <a class="jiathis_button_email"></a> 
           <a class="jiathis_button_tqq"></a> 
           <a class="jiathis_button_qzone"></a> 
           <a class="jiathis_button_xiaoyou"></a> 
           <a class="jiathis_button_tsina"></a> 
           <a class="jiathis_button_renren"></a> 
          </div> 
         </div> 
         <script type="text/javascript">
                var jiathis_config = {
                    uid: '1527941',
                    summary: '#招聘#职位详情和申请方式请看：' + window.location.href + ' 。欢迎围观，感谢转发！',
                    url: window.location.href,
                    title: '招聘职位：业务培训总监/区域培训总监 /销售运 营总监',
                              hideMore: true
                          }
            </script> 
         <script type="text/javascript" src="js/jia.js" charset="utf-8"></script> 
        </div> 
       </ul>
      </div> 