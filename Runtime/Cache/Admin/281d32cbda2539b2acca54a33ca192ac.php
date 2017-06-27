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
  <span class="action-span"><a href="<?php echo U('admin/news/toplist');?>">历史头条</a></span>
  <span class="action-span1"><a href="#">资讯管理</a> </span><span id="search_id" class="action-span2"> > 编辑头条 </span>
  <div style="clear:both"></div>
  </h1>

  <div class="main-div">
    <form action="<?php echo U('admin/news/saveTop');?>" method="post" name="theForm" enctype="multipart/form-data">
    <table width="100%" id="general-table">
      <tr>
          <td class="label">标题：</td>
          <td>
            <input type="text" name="title" id="title" value="<?php echo ($topnews["title"]); ?>" />
          </td>
        </tr>
      <tr>
          <td class="label">内容：</td>
          <td>
            <textarea name='text' rows="6" cols="48"><?php echo ($topnews["text"]); ?></textarea>
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