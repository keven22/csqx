<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="robots" content="noindex, nofollow">
  <link href="/csqx/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
  <link href="/csqx/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>
  <span class="action-span"><a href="<?php echo U('admin/warn/warnlist');?>">预警列表</a></span>
  <span class="action-span1"><a href="#">预警管理</a> </span><span id="search_id" class="action-span2"> > 预警编辑 </span>
  <div style="clear:both"></div>
  </h1>

  <div class="main-div">
    <form action="<?php echo U('admin/warn/saveWarn');?>" method="post" name="theForm" enctype="multipart/form-data">
    <table width="100%" id="general-table">
      <tr>
          <td class="label">城市：</td>
          <td>
            <?php if(($warn["city"] == 'all')): ?><strong style="color: red">全域预警</strong>
            <?php else: ?> <strong><?php echo ($warn["city"]); ?></strong><?php endif; ?>
          </td>
        </tr>
      <tr>
          <td class="label">预警类型：</td>
          <td>
            <select name="type">
            <option value="<?php echo ($warn["type"]); ?>"><?php echo ($warn["type"]); ?></option>
            <?php if(is_array($type)): foreach($type as $key=>$type): ?><option value="<?php echo ($type["value"]); ?>"><?php echo ($type["value"]); ?></option><?php endforeach; endif; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="label">预警级别：</td>
          <td>
            <select name="leaves">
            <option value="<?php echo ($warn["leaves"]); ?>"><?php echo ($warn["leaves"]); ?></option>
            <?php if(is_array($leave)): foreach($leave as $key=>$leave): ?><option value="<?php echo ($leave["value"]); ?>"><?php echo ($leave["value"]); ?></option><?php endforeach; endif; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="label">预警颜色：</td>
          <td>
            <select name="color">
              <option value="<?php echo ($warn["color"]); ?>"><?php echo ($warn["color"]); ?></option>
              <option value="white">白色</option>
              <option value="blue">蓝色</option>
              <option value="yellow">黄色</option>
              <option value="orange">橙色</option>
              <option value="red">红色</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="label">预警概况：</td>
          <td>
            <textarea name='text' rows="6" cols="48"><?php echo ($warn["text"]); ?></textarea>
          </td>
        </tr>    
    </table>
        <div class="button-div">
          <input type="hidden" name="id" value="<?php echo ($warn["id"]); ?>" />
          <input type="submit" value=" 确定 " />
        </div>
      <!-- <input type="hidden" name="act" value="insert" />
      <input type="hidden" name="old_cat_name" value="" />-->
      <input type="hidden" name="lid" value="<?php echo ($catinfo["lid"]); ?>" /> 
    </form>
  </div>

  <div id="footer">
  共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
  版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>