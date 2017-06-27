<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>*{margin:0;padding:0;}  </style>
  <link rel="stylesheet" type="text/css" href="/Public/css/pintuer.css" />
  <link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
  <script type="text/javascript" src="/Public/js/jquery.js"></script>
  <script type="text/javascript" src="/Public/js/pintuer.js"></script>
  <script type="text/javascript" src="/Public/js/respond.js"></script>
  
  <title><?php echo ($news["title"]); ?> - 资讯 - <?php echo ($title["value"]); ?></title>
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
<link rel="stylesheet" type="text/css" href="/Public/css/common.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/wcard.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/right.css" />
  <div class="container">
    <div class="line">

        <div class="left">
            <div class="news">
               <h1 class="title"><?php echo ($news["title"]); ?></h1>
               <div class="articalinfo">
               <span class="date"><?php echo ($news["date"]); ?></span>
               <br>
               <span class="from">来源：<a href="<?php echo ($news["url"]); ?>"><?php echo ($news["come"]); ?></a></span>
               </div>
               <div class="share">
               <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
               <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
               </div>
               <hr>
              <div class="artical">
               <?php echo ($news["text"]); ?>
              </div>
            </div>
            <div class="comment">
              <div class="compost">
              <form action="<?php echo U('Home/Index/comadd');?>" method="post" id="comForm" enctype="multipart/form-data">
              <div class="field">
              <textarea class="input" name="content" rows="5" cols="50" data-validate="required:必填" placeholder="一起来参与评论吧~" ></textarea>
              </div>
              <div class="form-group">
                <div class="label">
                  <label>选择身份</label>
                </div>
              <div class="comuser">
                <div class="button-group radio">
                  <label class="button active">
                    <input name="user" value="" checked="checked" type="radio"><span class="icon icon-check"></span> keven22
                  </label>
                  <label class="button">
                    <input name="user" value="tour" type="radio"><span class="icon icon-times"></span> 匿名
                  </label>
                </div>
              </div>
              <input name="pid" type="hidden" value="<?php echo ($news["id"]); ?>">
              <div class="combutton">
              <button id="comSubmit" class="button" type="submit">发布</button>
              </div>
              </div>
              </form>
              </div>
              <div class="comlist">
              <div class="label">
                  <label>评论列表</label>
                </div>
                <div class="list-link">
                <?php if(is_array($comlist)): foreach($comlist as $key=>$comment): ?><a class="active">
                  <div class="media media-x">
                  <strong><?php if($comment["user"] == 'tour'): ?>游客<?php else: ?> <?php echo ($comment["user"]); endif; ?></strong>
                  <?php echo ($comment["content"]); ?>
                  <span class="float-right"><?php echo ($comment["date"]); ?></span>

                  </div>
                  </a><?php endforeach; endif; ?>
                </div>


              </div>
            </div>
            </div>
        <div class="right">
        <div class="panel newslist-r">
        <div class="panel-head">其他资讯</div>
        <div class="list-link">
        <?php if(is_array($newslist)): foreach($newslist as $key=>$news): ?><a href="/index.php/Home/Index/p/id/<?php echo ($news["id"]); ?>" class="active"><?php echo ($news["title"]); ?></a><?php endforeach; endif; ?>
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