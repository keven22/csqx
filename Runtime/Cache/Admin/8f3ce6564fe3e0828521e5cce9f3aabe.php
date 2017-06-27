<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>预警列表 - 潮汕天气网</title>
  <meta name="robots" content="noindex, nofollow">
  <link href="/csqx/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
  <link href="/csqx/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>
  <span class="action-span"><a href="warnadd.html">发布预警</a></span>
  <span class="action-span1"><a href="#"> 预警管理</a></span>
  <span id="search_id" class="action-span2"> > 预警列表 </span>
  <div style="clear:both"></div>
  </h1>
  <h2> 全域预警 </h2>
  <form method="post" action="" name="alllistForm">
  <div class="list-div" id="listDiv">

  <table width="100%" cellspacing="1" cellpadding="2" id="list-table">
    <tr>
      <th width="10%">类型</th>
      <th width="15%">预警</th>
      <th width="10%">级别</th>
      <th width="15%">时间</th>
      <th width="30%">说明</th>
      <th width="20%">操作</th>
    </tr>
    <?php if(is_array($getAllWarn)): foreach($getAllWarn as $key=>$warn): ?><tr align="center" class="0" id="0_1" id = 'tr_1'>
      <td align="left" class="first-cell" style = 'padding-left="0"'>
              <img src="/csqx/Public/Admin/images/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" />
              <span><a href="#" ><?php echo ($warn["type"]); ?></a></span>
          </td>
      <td><?php echo ($warn["type"]); echo ($warn["leaves"]); ?>预警</td>
      <td><?php echo ($warn["leaves"]); ?></td>
      <td><?php echo ($warn["date"]); ?> <?php echo ($warn["time"]); ?></td>
      <td align="left"><?php echo ($warn["text"]); ?></td>
      <td align="center">
        <a href="<?php echo U('Warn/warnedit',array('id'=>$warn['id']));?>">编辑</a> |
        <a href="<?php echo U('admin/warn/passWarn',array('id'=>$warn[id]));?>" title="移除">撤销</a>
      </td>
    </tr><?php endforeach; endif; ?>
    </table>
  </div>
  </form>
  <h2> 县市预警 </h2>
    <form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">

    <table width="100%" cellspacing="1" cellpadding="2" id="list-table">
      <tr>
        <th width="10%">城市</th>
        <th width="10%">类型</th>
        <th width="15%">预警</th>
        <th width="5%">级别</th>
        <th width="15%">时间</th>
        <th width="25%">说明</th>
        <th width="20%">操作</th>
      </tr>
      <?php if(is_array($getWarn)): foreach($getWarn as $key=>$warn): ?><tr align="center" class="0" id="0_1" id = 'tr_1'>
        <td><?php echo ($warn["city"]); ?></td>
        <td align="left" class="first-cell" style = 'padding-left="0"'>
                <img src="/csqx/Public/Admin/images/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" />
                <span><a href="#" ><?php echo ($warn["type"]); ?></a></span>
            </td>
        <td><?php echo ($warn["type"]); echo ($warn["leaves"]); ?>预警</td>
        <td><?php echo ($warn["leaves"]); ?></td>
        <td><?php echo ($warn["date"]); ?> <?php echo ($warn["time"]); ?></td>
        <td align="left"><?php echo ($warn["text"]); ?></td>
        <td align="center">
          <a href="<?php echo U('Warn/warnedit',array('id'=>$warn['id']));?>">编辑</a> |
          <a href="<?php echo U('admin/warn/passWarn',array('id'=>$warn[id]));?>" title="移除">撤销</a>
        </td>
      </tr><?php endforeach; endif; ?>
      </table>
    </div>
    </form>
  <div id="footer">
  共执行 28 个查询，用时 0.148943 秒，Gzip 已禁用，内存占用 3.336 MB<br />
  版权所有 &copy; 2016-2017 Keven工作室，并保留所有权利。</div>
</body>
</html>