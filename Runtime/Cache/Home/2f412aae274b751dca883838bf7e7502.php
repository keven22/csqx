<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>*{margin:0;padding:0;}  </style>
  <link rel="stylesheet" type="text/css" href="/csqx/Public/css/pintuer.css" />
  <link rel="stylesheet" type="text/css" href="/csqx/Public/css/index.css" />
  <title><?php echo ($title["value"]); ?></title>
</head>
<body>
  
<div class="top-box">
  <div class="top">
    <span class="fl">今天是<?php $weekarray=array("日","一","二","三","四","五","六"); echo date("n月j日"); echo "星期".$weekarray[date("w")];?></span>
    <a href="javascript:setHomepage()" target="_self" title="设为首页" class="fl">设为首页</a>
      <a href="/m" target="_blank" class="fl">手机版网站</a>
    <a href="" target="_blank" class="fl">收藏网页</a>

    <a href="/w123" class="en fr">气象导航</a>
    <div class="clear"></div>
  </div>
</div>

<div class="header-box">
  <div class="header">
    <div class="w_logo fl"><a href="/"><img src="<?php echo ($logo["value"]); ?>"></a></div>
    <div class="warn-box fr">
    
<div class="warn clearfix">
		 <div class="clear"></div>
	</div>
<div class="inforesult"><img src="http://www.weather.com.cn/m2/i/guangdong/zhyj/<?php echo ($warn["content"]); ?>.gif" width="50" height="43"></div>
	
    </div>
    <div class="w_weather"></div>
    <div class="clear"></div>
  </div>
  <div class="topnav">
    <a href="/">首页</a>|
      <a href="/forecast/" id="510">天气</a>|
      <a href="/info/" id="32">资料</a>|
      <a href="/typhoon/" id="10">台风</a>|
      <a href="/earthquake/" id="34">地震</a>|
      <a href="/disaster/">减灾</a>|
      <a href="/environ/" style="padding-right:0">环境</a>
  </div>
  
</div>
<link rel="stylesheet" type="text/css" href="/csqx/Public/css/common.css" />
<link rel="stylesheet" type="text/css" href="/csqx/Public/css/wcard.css" />
<link rel="stylesheet" type="text/css" href="/csqx/Public/css/right.css" />
  <div class="con today clearfix" style="margin-top: 12px;">
    <div class="line">
      <div class="xs12">
        <div class="xs5">
              <div class="panel">
                  <div class="panel-head"><h4> 市县预警</h4></div>
                   <div class="panel-body">
                   <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php $conn=mysql_connect("56f53eb12e168.sh.cdb.myqcloud.com:6090","cdb_outerroot","kaiwen22");mysql_select_db("csqx",$conn); if(!$conn){ die('连接数据库出错:'.mysql_error()); } function warn($city){ $sql = "SELECT * FROM `warn` WHERE `city`='$city' AND `now`='NOW'"; $query = mysql_query($sql); if($query){ while($row = mysql_fetch_array($query)){ $des = "des1".": '<br/> ".$row['type'].$row['leaves']."预警',"; } return $des; } else { echo "des:'<br/>当前无预警',";} } function warncolor($city){ $sql = "SELECT * FROM `warn` WHERE `city`='$city' AND `now`='NOW'"; $query = mysql_query($sql); while($row = mysql_fetch_array($query)){ $color=$row['color']; } if(!$color) { return "#9dc934";} else { return $color;} } ?>
<link rel="stylesheet" type="text/css" href="/csqx/Public/map/jquery-vector-map.css" />
<script type="text/javascript" src="/csqx/Public/map/jquery-1-6.js"></script>
<script type="text/javascript" src="/csqx/Public/map/jquery-vector-map.js"></script>
<script type="text/javascript" src="/csqx/Public/map/yuedong.js"></script>
    <script type="text/javascript">
        $(function () {
            //数据可以动态生成，格式自己定义，cha对应china-zh.js中省份的简称      
      var yuedongStatus = [{ cha: 'SHANTOU', name: '汕头', <?php echo warn("汕头").""; ?> flag:'st'},
               { cha: 'CHENGHAI', name: '澄海', <?php echo warn("澄海").""; ?> flag:'ch'},
               { cha: 'CHAOYANG', name: '潮阳', <?php echo warn("潮阳").""; ?> flag:'cy'},
               { cha: 'NANAO', name: '南澳', <?php echo warn("南澳").""; ?> flag:'na'},
               { cha: 'CHAOZHOU', name: '潮州', <?php echo warn("潮州").""; ?> flag:'cz'},
               { cha: 'RAOPING', name: '饶平', <?php echo warn("饶平").""; ?> flag:'rp'},
               { cha: 'JIEYANG', name: '揭阳', <?php echo warn("揭阳").""; ?> flag:'jy'},
               { cha: 'PUNING', name: '普宁', <?php echo warn("普宁").""; ?> flag:'pn'},
                             { cha: 'HUILAI', name: '惠来', <?php echo warn("惠来").""; ?> flag:'hl'},
                             { cha: 'JIEXI', name: '揭西', <?php echo warn("揭西").""; ?> flag:'jx'},
                             { cha: 'SHANWEI', name: '汕尾', <?php echo warn("汕尾").""; ?> flag:'sw'},
                             { cha: 'LUFENG', name: '陆丰', <?php echo warn("陆丰").""; ?> flag:'lf'},
                             { cha: 'HAIFENG', name: '海丰', <?php echo warn("海丰").""; ?> flag:'hf'},
                             { cha: 'MEIXIAN', name: '梅县', <?php echo warn("梅县").""; ?> flag:'mx'},
                             { cha: 'MEIZHOU', name: '梅州', <?php echo warn("梅州").""; ?> flag:'mz'},
                             { cha: 'XINGNING', name: '兴宁', <?php echo warn("兴宁").""; ?> flag:'xn'},
                             { cha: 'PINGYUAN', name: '平远', <?php echo warn("平远").""; ?> flag:'py'},
                             { cha: 'JIAOLING', name: '蕉岭',<?php echo warn("蕉岭").""; ?> flag:'jl'},
                             { cha: 'DABU', name: '大埔', <?php echo warn("大埔").""; ?> flag:'db'},
                             { cha: 'FENGSHUN', name: '丰顺', <?php echo warn("丰顺").""; ?> flag:'fs'},
                             { cha: 'WUHUA', name: '五华', <?php echo warn("五华").""; ?> flag:'wh'}
                          ];
      
   $('#container1').vectorMap({ map: 'yuedong',
                color: "#B4B4B4", //地图颜色
                onLabelShow: function (event, label, code) { 
                    $.each(yuedongStatus, function (i, items) {
                        if (code == items.cha) {
                            label.html(items.name + items.des1 +"<br/>"+ items.des1);
                        }
                    });
                }
                
            })
      
            $.each(yuedongStatus, function (i, items) { 
                if (items.flag.indexOf('st') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("汕头").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('ch') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("澄海").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('cy') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("潮阳").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('na') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("南澳").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('cz') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("潮州").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('rp') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("饶平").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('jy') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("揭阳").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('pn') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("普宁").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('hl') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("惠来").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('jx') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("揭西").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('sw') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("汕尾").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('lf') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("陆丰").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('hf') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("海丰").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('mx') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("梅县").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('mz') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("梅州").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('xn') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("兴宁").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
        if (items.flag.indexOf('py') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("平远").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
                if (items.flag.indexOf('jl') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("蕉岭").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
                if (items.flag.indexOf('db') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("大埔").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
                if (items.flag.indexOf('fs') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("丰顺").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
                if (items.flag.indexOf('wh') != -1) { //动态设定颜色，此处用了自定义简单的判断
                    var josnStr = "{" + items.cha + ":'<?php echo warncolor("五华").""; ?>'}";
                    $('#container1').vectorMap('set', 'colors', eval('(' + josnStr + ')'));
                }
            });
            
        });
      
    </script>
</head>
<body>
  <div id="container1" style="width: 420px; height: 445px;">
    </div>
</body>
</html>

                   </div>
                </div>
              </div>
              <div class="xs6" style="padding-left: 10px;">
              <div class="panel border-red">
	<div class="panel-head  border-red-light bg-red" style="text-align:center;">
        <h3><?php echo ($topNewsTitle["content"]); ?></h3>
	</div>
	<div class="panel-body">
		<p class="text-indent"><?php echo ($topNewsText["content"]); ?></p></div></div>

<div class="list-link" style="margin-top: 12px;">
<?php if(is_array($newslist)): foreach($newslist as $key=>$news): ?><a href="/csqx/index.php/Home/Index/p/id/<?php echo ($news["id"]); ?>" class="active"><?php echo ($news["title"]); ?></a><?php endforeach; endif; ?>
</div>
              </div>
            </div>
            <script>W.use('/js/publichead.js');</script>
    </div>
</div>
           <div class="footer">
            <div class="block">
            <div class="Lcontent">
            <dl style="width:280px;margin-left: 50px; margin-right:22px;">
              <dt><h3>网站相关</h3></dt>
              <dd>
              <p><a href="/">关于我们</a><a href="/">联系我们</a><a href="/">加入我们</a></p>
              <p><a href="/">更新日志</a><a href="/">网站地图</a><a href="/">广告合作</a></p>
              </dd>
            </dl>
            <dl style="width:200px;">
            <dt><h3>用户中心</h3></dt>
            <dd>
            <p><a href="/">投诉建议</a><a href="/">网站志愿者</a></p>
            <p><a href="/">用户交流</a><a href="/">手机版</a></p>
            </dd>
            </dl>
            <div class="clear"></div>
            </div>
            <div class="friendLink">
            <h3>相关网站</h3>
            <p>
              <a href="http://www.st12121.net/" target="_blank">汕头台网</a>
              <a href="http://www.gdczqx.com/" target="_blank">潮州台网</a>
              <a href="http://www.jyqx.cn/" target="_blank">揭阳台网</a>
              <a href="http://www.swqx.com.cn/" target="_blank">汕尾台网</a>
              <a href="http://www.mzqx.net/" target="_blank">梅州台网</a>
            </p>
            <p>
              <a href="http://www.tqyb.com.cn/" target="_blank">广州台网</a>
              <a href="http://www.szmb.gov.cn/" target="_blank">深圳台网</a>
              <a href="http://www.hyqxj.cn/hygzw/" target="_blank">河源台网</a>
              <a href="http://www.xmweather.cn/" target="_blank">厦门台网</a>
              <a href="http://www.zzqxw.gov.cn/" target="_blank">漳州台网</a>
            </p>
            <p>
              <a href="http://www.gdmo.cn/weather-gdmo/" target="_blank">广东省气象台</a>
              <a href="http://www.gd121.cn/" target="_blank">广东应急气象网</a>
              <a href="http://gd.weather.com.cn/" target="_blank">广东天气网</a>
              <a href="http://www.grmc.gov.cn/" target="_blank">广东省气象局</a>
            </p>
            </div>
            <div class="clear"></div>
            </div>
            <div class="aboutUs"> Copyright©<a href="http://www.xiaok.site" target="_blank">keven工作室</a> All Rights Reserved (2012-2017) 本站点由keven工作室运营，实况和降雨预报由中国气象局和彩云天气联合提供</div>
        </div>
</body>
</html>