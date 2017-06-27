<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php $conn=mysql_connect("56f53eb12e168.sh.cdb.myqcloud.com:6090","cdb_outerroot","kaiwen22");mysql_select_db("csqx",$conn); if(!$conn){ die('连接数据库出错:'.mysql_error()); } function warn($city){ $sql = "SELECT * FROM `warn` WHERE `city`='$city' AND `now`='NOW'"; $query = mysql_query($sql); if($query){ while($row = mysql_fetch_array($query)){ $des = "des1".": '<br/> ".$row['type'].$row['leaves']."预警',"; } return $des; } else { echo "des:'<br/>当前无预警',";} } function warncolor($city){ $sql = "SELECT * FROM `warn` WHERE `city`='$city' AND `now`='NOW'"; $query = mysql_query($sql); while($row = mysql_fetch_array($query)){ $color=$row['color']; } if(!$color) { return "#9dc934";} else { return $color;} } ?>
<link rel="stylesheet" type="text/css" href="/Public/map/jquery-vector-map.css" />
<script type="text/javascript" src="/Public/map/jquery-1-6.js"></script>
<script type="text/javascript" src="/Public/map/jquery-vector-map.js"></script>
<script type="text/javascript" src="/Public/map/yuedong.js"></script>
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