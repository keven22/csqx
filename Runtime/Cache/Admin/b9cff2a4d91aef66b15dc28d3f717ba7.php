<?php if (!defined('THINK_PATH')) exit();?>    <link href="../View/Public/css/animate.css" rel="stylesheet">
    <link href="../View/Public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="../View/Public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <title>头条信息 - CSMA管理后台</title>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>头条信息</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">首页</a>
                        </li>
                        <li>
                            <a>信息发布</a>
                        </li>
                        <li>
                            <strong>头条信息</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

 <div class="row">
                    <div class="col-lg-12">

                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>头条信息发布</h5>
                                <button id="edit" class="btn btn-primary btn-xs m-l-sm" onclick="edit()" type="button">编辑</button>
                                <button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">保存</button>

                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    </div>
                            </div>
                            <div class="ibox-content" id="eg">
                            <div class="form-horizontal">
                             <div class="form-group">
                             <label class="col-sm-2 control-label">标题</label>
                              <div class="col-sm-10">
                              <input class="form-control" value="<?php echo ($topNewsTitle["content"]); ?>" />
                              </div>
                              </div>
                              <div class="clern hr-line-dashed"></div>
                           </div>
                                <div class="click2edit wrapper"><?php echo ($topNewsText["content"]); ?></div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
    </div>


    <!-- Mainly scripts -->
    <script src="../View/Public/js/jquery-2.1.1.min.js"></script>
    <script src="../View/Public/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="../View/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../View/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../View/Public/js/hplus.js?v=2.2.0"></script>
    <script src="../View/Public/js/plugins/pace/pace.min.js"></script>
    <script src="../View/Public/js/plugins/jquery-ui/jquery-ui.min.js"></script>
     <script src="../View/Public/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- EayPIE -->
    <script src="../View/Public/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../View/Public/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../View/Public/js/demo/sparkline-demo.js"></script>

    <!-- SUMMERNOTE -->
    <script src="../View/Public/js/plugins/summernote/summernote.min.js"></script>
    <script src="../View/Public/js/plugins/summernote/summernote-zh-CN.js"></script>
<script src="../View/Public/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../View/Public/js/demo/peity-demo.js"></script>
    <script src="../View/Public/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../View/Public/js/demo/sparkline-demo.js"></script>

   


   

    <script>
        $(document).ready(function () {

            $('.summernote').summernote({
                lang: 'zh-CN'
            });

        });
        var edit = function () {
            $("#eg").addClass("no-padding");
            $('.click2edit').summernote({
                lang: 'zh-CN',
                focus: true
            });
        };
        var save = function () {
            $("#eg").removeClass("no-padding");
            var aHTML = $('.click2edit').code(); 

            $('.click2edit').destroy();
            $.post("<?php echo U('Admin/Info/topadd');?>",
  {
    title:$(".form-control").val(),
    content:aHTML
  },
  function(data,status){
    alert("保存成功！");
  });

        };
    </script>
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

   

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->
</body>

</html>