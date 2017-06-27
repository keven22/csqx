<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="/csqx/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
body {
  background: #80BDCB;
}
#tabbar-div {
  background: #278296;
  padding-left: 10px;
  height: 21px;
  padding-top: 0px;
}
#tabbar-div p {
  margin: 1px 0 0 0;
}
.tab-front {
  background: #80BDCB;
  line-height: 20px;
  font-weight: bold;
  padding: 4px 15px 4px 18px;
  border-right: 2px solid #335b64;
  cursor: hand;
  cursor: pointer;
}
.tab-back {
  color: #F4FAFB;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
}
.tab-hover {
  color: #F4FAFB;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
  background: #2F9DB5;
}
#top-div
{
  padding: 3px 0 2px;
  background: #BBDDE5;
  margin: 5px;
  text-align: center;
}
#main-div {
  border: 1px solid #345C65;
  padding: 5px;
  margin: 5px;
  background: #FFF;
}
#menu-list {
  padding: 0;
  margin: 0;
}
#menu-list ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
  color: #335B64;
}
#menu-list li {
  padding-left: 16px;
  line-height: 16px;
  cursor: hand;
  cursor: pointer;
}
#main-div a:visited, #menu-list a:link, #menu-list a:hover {
  color: #335B64
  text-decoration: none;
}
#menu-list a:active {
  color: #EB8A3D;
}
.explode {
  background: url(./images/menu_minus.gif) no-repeat 0px 3px;
  font-weight: bold;
}
.collapse {
  background: url(./images/menu_plus.gif) no-repeat 0px 3px;
  font-weight: bold;
}
.menu-item {
  background: url(./images/menu_arrow.gif) no-repeat 0px 3px;
  font-weight: normal;
}
#help-title {
  font-size: 14px;
  color: #000080;
  margin: 5px 0;
  padding: 0px;
}
#help-content {
  margin: 0;
  padding: 0;
}
.tips {
  color: #CC0000;
}
.link {
  color: #000099;
}
  </style>
</head>
<body>
  <div id="tabbar-div">
  <p><span style="float:right; padding: 3px 5px;" ><a href="#"><img id="toggleImg" src="./images/menu_minus.gif" width="9" height="9" border="0" alt="闭合" /></a></span>

    <span class="tab-front" id="menu-tab">导航</span>
  </p>
  </div>
  <div id="main-div">
  <div id="menu-list">
  <ul>
    <li class="explode" key="02_cat_and_goods" name="menu">
    预警管理
      <ul>
        <li class="menu-item"><a href="<?php echo U('warn/warnlist');?>" target="main-frame">当前预警</a></li>
        <li class="menu-item"><a href="<?php echo U('warn/warnadd');?>" target="main-frame">发布预警</a></li>
        <li class="menu-item"><a href="<?php echo U('warn/warnsearch');?>" target="main-frame">预警查询</a></li>
      </ul>
    </li>

    <li class="explode" key="04_order" name="menu">
    资讯管理
      <ul>
        <li class="menu-item"><a href="<?php echo U('news/topedit');?>" target="main-frame">编辑头条</a></li>
        <li class="menu-item"><a href="#" target="main-frame">发布新闻</a></li>
        <li class="menu-item"><a href="#" target="main-frame">采集新闻</a></li>
        <li class="menu-item"><a href="#" target="main-frame">新闻列表</a></li>
      </ul>
    </li>
    <li class="explode" key="04_order" name="menu">
    天气信息
      <ul>
        <li class="menu-item"><a href="#" target="main-frame">实况数据</a></li>
        <li class="menu-item"><a href="#" target="main-frame">城市预报</a></li>
        <li class="menu-item"><a href="#" target="main-frame">数据编辑</a></li>
        <li class="menu-item"><a href="#" target="main-frame">微博采集</a></li>
      </ul>
    </li>
    <li class="explode" key="04_order" name="menu">
    社交媒体
      <ul>
        <li class="menu-item"><a href="#" target="main-frame">微博发布</a></li>
        <li class="menu-item"><a href="#" target="main-frame">微信发布</a></li>
      </ul>
    </li>
    <li class="explode" key="04_order" name="menu">
    页面管理
      <ul>
        <li class="menu-item"><a href="#" target="main-frame">专题页面管理</a></li>
        <li class="menu-item"><a href="#" target="main-frame">专题页面发布</a></li>
      </ul>
    </li>
    <li class="explode" key="04_order" name="menu">
    会员管理
      <ul>
        <li class="menu-item"><a href="#" target="main-frame">会员列表</a></li>
        <li class="menu-item"><a href="#" target="main-frame">管理员列表</a></li>
      </ul>
    </li>
    <li class="explode" key="04_order" name="menu">
    网站选项
      <ul>
        <li class="menu-item"><a href="#" target="main-frame">栏目管理</a></li>
        <li class="menu-item"><a href="#" target="main-frame">基本管理</a></li>
        <li class="menu-item"><a href="#" target="main-frame">运营数据</a></li>
      </ul>
    </li>

  </ul>
  </div>
  <div id="help-div" style="display:none">
  <h1 id="help-title"></h1>

  <div id="help-content"></div>
  </div>
  </div>
</body>
</html>