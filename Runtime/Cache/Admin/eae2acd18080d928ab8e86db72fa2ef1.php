<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    
    <meta name="keywords" content="潮汕天气,天气预报,潮汕,广东天气,汕头天气,潮州天气,揭阳天气,">
    <meta name="description" content="潮汕天气网，汇聚各地台站气象信息，收集最权威的气象资料，解读最新的天气事件">

    <link href="../View/Public/js/plugins/gritter/jquery.gritter.css" />

    <link href="../View/Public/js/plugins/gritter/jquery.gritter.css" />
    <link href="../View/Public/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="../View/Public/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <!-- Morris -->
    <link href="../View/Public/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../View/Public/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../View/Public/css/animate.css" rel="stylesheet">
    <link href="../View/Public/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo ($logo["value"]); ?>" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Keven</strong>
                             </span> <span class="text-muted text-xs block">站长 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a href="profile.html">个人资料</a>
                                </li>
                                <li><a href="contacts.html">联系我们</a>
                                </li>
                                <li><a href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="login.html">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            H+
                        </div>

                    </li>
                    <li class="active">
                        <a href="/Admin/Index/Index"><i class="fa fa-th-large"></i> <span class="nav-label">控制台</span><span class="label label-danger pull-right">NEW!</span></a>
                    </li>
                   
                    <li>
                        <a href="index.html#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">信息发布</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_echarts.html">气象预警</a>
                            </li>
                            <li><a href="/Admin/Info/top.html">头条信息</a>
                            </li>
                            <li><a href="graph_morris.html">新闻资讯</a>
                            </li>
                            <li><a href="graph_rickshaw.html">天气预报</a>
                            </li>
                            <li><a href="graph_peity.html">台风发布</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">网站管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form_basic.html">城市列表</a>
                            </li>
                            <li><a href="form_validate.html">用户管理</a>
                            </li>
                            <li><a href="form_advanced.html">栏目管理</a>
                            </li>
                            <li><a href="form_wizard.html">运营数据</a>
                            </li>
                            <li><a href="form_wizard.html">网站设置</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html#"><i class="fa fa-desktop"></i> <span class="nav-label">其他</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contacts.html"></a>
                            </li>
                            <li><a href="profile.html">管理员</a>
                            </li>
                            <li><a href="projects.html">广告</a>
                            </li>
                            <li><a href="project_detail.html">keven工作室</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="index"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用CSMA</span>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>

            <script src="../View/Public/js/jquery-2.1.1.min.js"></script>
    <script src="../View/Public/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="../View/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../View/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../View/Public/js/plugins/flot/jquery.flot.js"></script>
    <script src="../View/Public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../View/Public/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../View/Public/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../View/Public/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    

    <!-- Custom and plugin javascript -->
    <script src="../View/Public/js/hplus.js?v=2.2.0"></script>
    <script src="../View/Public/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../View/Public/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../View/Public/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- EayPIE -->
    <script src="../View/Public/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../View/Public/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../View/Public/js/demo/sparkline-demo.js"></script>

    <script>
        $(document).ready(function () {
            WinMove();
            setTimeout(function () {
                $.gritter.add({
                    title: '您有2条未读信息',
                    text: '请前往<a href="mailbox.html" class="text-warning">收件箱</a>查看今日任务',
                    time: 10000
                });
            }, 2000);


            $('.chart').easyPieChart({
                barColor: '#f8ac59',
                //                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
                //                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data1 = [
                [0, 4], [1, 8], [2, 5], [3, 10], [4, 4], [5, 16], [6, 5], [7, 11], [8, 6], [9, 11], [10, 30], [11, 10], [12, 13], [13, 4], [14, 3], [15, 3], [16, 6]
            ];
            var data2 = [
                [0, 1], [1, 0], [2, 2], [3, 0], [4, 1], [5, 3], [6, 1], [7, 5], [8, 2], [9, 3], [10, 2], [11, 1], [12, 0], [13, 2], [14, 8], [15, 0], [16, 0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#464f88"],
                xaxis: {},
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            });
        });
        $(function () {
        $(".nav").find("li").each(function () {
            var a = $(this).find("a:first")[0];
            if ($(a).attr("href") === location.pathname) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });
    })
    </script>