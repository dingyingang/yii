 <?php
    use yii\helpers\Url;
 ?>
 <div class="pictureplace"> 
   <div class="pictureplacecenter"> 
    <img src="job/images/commonbanner.jpg?v=634507909669730000" /> 
   </div> 
  </div> 
  <div class="contain joblist clearfix"> 
   <div class="containsidebar"> 
    <!--module:positioncategory begin--> 
    <div class="bs-module"> 
     <div class="positioncategory-smallfresh "> 
      <div class="zhiweifenlei bodertop"> 
       <div class="parttitleline"></div> 
       <div class="parttitle height0">
        <span class="fenleiico"></span>
        <div class="wordtitle lh0" title="招聘区域">
         招聘区域
        </div>
       </div> 
       <div class="fenleilist"> 
        <ul class="firstlist clearfix"> 
         <li><a href="social.html?p=3^2#jlt" constval="2" title="北京">北京</a></li> 
         <li><a href="social.html?p=3^1#jlt" constval="1" title="上海">上海</a></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!--module:positioncategory end--> 
    <div class="zhaopindongtai bodertop"> 
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
         <span>暂无内容</span> 
        </ul> 
       </div> 
      </div> 
     </div> 
     <!--module:newslist end--> 
    </div> 
   </div> 
   <div class="clearfix sousuocontain fl"> 
    <!--module:positionsearch begin--> 
    <div class="bs-module"> 
     <div class="positionsearch-smallfresh "> 
      <a name="jlt"></a> 
      <form name="searchForm" id="searchForm" action="social.html" method="GET"> 
       <div class="zhiweisousuo bodertop selectmod"> 
        <div class="parttitleline"></div> 
        <div class="parttitle">
         <span class="serchico"></span>
         <div class="wordtitle">
          职位搜索
         </div>
        </div> 
        <div class="serchcontain"> 
         <select class="dropdown" id="c" name="c" tableindex="1"><option value="-1">工作地点</option> <option value="1">全国</option> <option value="1100">北京市</option> <option value="1103">海淀区</option> <option value="3100">上海市</option> <option value="3102">徐汇区</option> <option value="8100">香港</option> </select> 
         <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
         <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
         <select class="dropdown jobAdClass" tabindex="2" name="jobAdClass-1" id="jobAdClass-1"> <option title="职位类型" value="1^-1">职位类型</option> <option title="北京" value="1^20">北京</option> <option title="--业务部" value="1^19">--业务部</option> <option title="----业务服务部" value="1^2">----业务服务部</option> <option title="----业务发展部" value="1^18">----业务发展部</option> <option title="--职能部" value="1^17">--职能部</option> <option title="----人力行政部" value="1^16">----人力行政部</option> <option title="----财务部" value="1^15">----财务部</option> <option title="----品牌公关部" value="1^14">----品牌公关部</option> <option title="----市场营销部" value="1^13">----市场营销部</option> <option title="----技术部" value="1^12">----技术部</option> <option title="----产品部" value="1^11">----产品部</option> <option title="----学术部" value="1^10">----学术部</option> <option title="----青少事业部" value="1^21">----青少事业部</option> <option title="上海" value="1^9">上海</option> <option title="--业务部" value="1^8">--业务部</option> <option title="----业务服务部" value="1^7">----业务服务部</option> <option title="----业务发展部" value="1^6">----业务发展部</option> <option title="--职能部" value="1^5">--职能部</option> <option title="----人力行政部" value="1^4">----人力行政部</option> </select> 
         <select class="dropdown" id="d" name="d" tableindex="3"><option value="">发布时间</option> <option value="3">三天内</option> <option value="7">一周内</option> <option value="30">一个月内</option> <option value="90">三个月内</option> <option value="180">半年内</option> </select> 
         <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
         <select class="dropdown" id="r" name="r" tableindex="4"><option value="-1">招聘类别</option> <option value="1">社会招聘</option> <option value="2">校园招聘</option> <option value="3">实习生招聘</option> </select> 
         <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
         <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
         <select class="dropdown jobAdClass" tabindex="5" name="jobAdClass-3" id="jobAdClass-3"> <option title="招聘区域" value="3^-1">招聘区域</option> <option title="北京" value="3^2">北京</option> <option title="上海" value="3^1">上海</option> </select> 
         <input type="text" class="serchinput" maxlength="50" id="k" name="k" tabindex="6" /> 
         <input type="hidden" name="p" value="" id="jobAdClassHidden" /> 
        </div> 
        <span class="serchbtn"><a href="javascript:void(0)" class="button  subButton">搜索</a></span> 
       </div> 
      </form> 
      <script type="text/javascript">
    var defaultText = "请输入关键字";
    function GetParam(key) {
        return (document.location.search.match(new RegExp("(?:^\\?|&)" + key + "=(.*?)(?=&|$)")) || ['', null])[1];
    }
    function InitSelect(key) {
        var recruit = GetParam(key);
        if (recruit == null) {
            recruit = -1;
        }

        if (key == 'p' && recruit != -1) {
            var jobAdClassWord = decodeURI(recruit);
            jobAdClassWord = myHTMLDeCode(jobAdClassWord);
            var para = jobAdClassWord.split(",");
            $.each(para, function (i, value) {
                $("select[name=jobAdClass-" + value.split("^")[0] + "]").val(value);
            });
        } else {
            $("select[name=" + key + "]").val(recruit);
        }
    }
    function InitKey(SearchKey) {
        var keyWord = GetParam(SearchKey);
        if (keyWord == null) {
            return;
        }
        keyWord = decodeURIComponent(keyWord);
        keyWord = myHTMLDeCode(keyWord);
        $("input[name=" + SearchKey + "]").val(keyWord);
        //$(".jobsearch").textSearch(keyWord);
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


    $(function () {
        InitSelect("r");
        InitSelect("p");
        InitSelect("c");
        InitSelect("d");
        InitKey("k");

        $("#searchForm").submit(function () {
            //alert("submit");
            //if ($("#k").val() == "请输入关键字")
            //    $("#k").val("");
            //$("#k").val(encodeURI($.trim($("#k").val())));
            return false;
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
        
        $(".subButton").click(function () {
            var jobAdClass = $(".jobAdClass");
            var ids = [];
            $.each(jobAdClass, function (i, value) {
                ids.push($(value).val());
            });
            pValue = ids.join(',');
            rValue = $("#r").val();
            cValue = $("#c").val();
            dValue = $("#d").val();
            kValue = $("input[name=k]").val();
            if (pValue == undefined)
                pValue = "";
            if (rValue == undefined)
                rValue = "";
            if (cValue == undefined)
                cValue = "";
            if (dValue == undefined)
                dValue = "";
            if (kValue == undefined || kValue == "请输入关键字")
                kValue = "";
            kValue = myHTMLEnCode(kValue);
            kValue = encodeURIComponent($.trim(kValue));
            var para = "r=" + rValue + "&"
                + "c=" + cValue + "&"
                + "d=" + dValue + "&"
                + "p=" + pValue + "&"
                + "k=" + kValue;
            
            window.location = "\social.html?" + para + "#jlt";
        });

    });
</script> 
     </div> 
    </div> 
    <!--module:positionsearch end--> 
    <!--module:positionlist begin--> 
     <div class="bs-module"> 
     <div class="positionlist-newtemplate "> 
      <div class="clearfix tablecontain"> 
       <table class="listtable"> 
        <thead> 
         <tr class="tabletitle"> 
          <th class="tableleft">&nbsp;&nbsp;职位名称</th> 
          <th class="tableleft" title="职位类型">职位类型</th> 
          <th class="tableleft">工作地点</th> 
          <th class="tableleft">发布时间</th> 
         </tr> 
        </thead> 
        <tbody>
  <?php foreach ($list as $key => $val) {?>
         <tr> 
          <td class="tableleft joblsttitle"> <a title="<?=$val['z_name']?>" jobadid="620025388" href="<?=Url::toRoute(['jobs/detail','id'=>$val['id']])?>"> <?=$val['z_name']?></a> </td>  
          <td class="tableleft joblsttitle" title="<?=$val['z_leixing']?>"><?=$val['z_leixing']?></td> 
          <td title="" class="tableleft joblsttitle"><?=$val['work_address']?> </td> 
          <td class="tableleft joblsttitle"> <?=$val['start_time']?> </td> 
         </tr> 
          <?php }?>
        </tbody>
       </table> 
  
       <div class="tablefooter"> 
    
        <div class="pager clearfix">
          <?php
            use yii\widgets\LinkPager;
            use yii\data\Pagination;

echo LinkPager::widget([
       'pagination' => $pages,
    ]);

          ?>
        </div> 
       </div> 
      </div> 
      <script type="text/javascript">

    //职位学历映射
    var jobAdEduMap = {
        //        "244858631" : "高职高专",
        //        "996726632" : "大学本科",
        //        "208199123" : "硕士研究生",
        //        "214287756": "博士研究生"

        "244858631": "高职高专",
        "996726632": "大学本科",
        "208199123": "硕士研究生",
        "214287756": "博士研究生"
    }

    //获取locationUrl判定是否需要获取额外添加的列
    var url = window.location.href;

    if (url.indexOf("cnnp.zhiye.com") > 0) {//域名
        //获取列表第一列职位广告ID
        var ids = [];
        var jobTitles = $(".joblsttitle a ");
        //循环获取HREF提取JobId
        for (var i = 0; i < jobTitles.length; i++) {
            //            var id = jobTitles[i].pathname.split("/")[2];
            //            //点击标签后该Url携带其他条件，再次过滤
            //            if (id.indexOf("?")) {
            //                id = id.split("?")[0];
            //            }
            var id = $(jobTitles[i]).attr("jobadid");
            ids.push(parseInt(id));
        }

        //判定列表中存在数据
        if (ids.length > 0) {
            $.ajax({
                url: "/Extensions/Widget/GetJobAdditional",
                data: {
                    jobAdIds: ids.toString(),
                    additionalKeys: "extA9000_102054_949224493" //extA900_100102_2063773255
                },
                type: "POST",
                dataType: 'json'
            }).done(function (resp) {
                //添加学历列
                $(".listtable thead .tabletitle th:eq(2)").before('<th class="tableleft">学历</th>');
                var htmlMap = [];
                for (var i = 0; i < ids.length; i++) {
                    var map = { jobadid: ids[i], eduName: '' };
                    for (var j = 0; j < resp.length; j++) {

                        if (ids[i] == parseInt(resp[j].JobAdId)) {
                            map.eduName = jobAdEduMap[resp[j].AdditionaList[0].AdditionaValue];
                        }
                    }
                    htmlMap.push(map);
                }
                for (var o = 0; o < htmlMap.length; o++) {
                    $(".joblsttitle a[jobadid='" + (htmlMap[o].jobadid || '') + "'] ").parent().parent().find("td:eq(2)").before('<td class="tableleft joblsttitle" title="' + htmlMap[o].eduName + '">' + htmlMap[o].eduName + '</td>');
                }
            });
        }
    }
</script> 
     </div> 
    </div> 
    <!--module:positionlist end-->
    <!--module:deliverystoredb begin--> 
    <div class="bs-module"> 
     <div class="deliverystoredb-default "> 
     </div> 
    </div> 
    <!--module:deliverystoredb end--> 
   </div> 
  </div> 