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
  <span class="action-span"><a href="warnlist.html">预警列表</a></span>
  <span class="action-span1"><a href="#">预警管理</a> </span>
  <span id="search_id" class="action-span2"> > 发布预警</span>
  <div style="clear:both"></div>
  </h1>
  <h2>发布全域预警</h2>
  <div class="main-div">
    <form action="<?php echo U('admin/warn/addAllWarn');?>" method="post" name="theForm" enctype="multipart/form-data">
    <table width="100%" id="general-table">
        <tr>
          <td class="label">预警类型：</td>
          <td>
            <select name="type">
            <?php if(is_array($type)): foreach($type as $key=>$type): ?><option value="<?php echo ($type["value"]); ?>"><?php echo ($type["value"]); ?></option><?php endforeach; endif; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="label">预警级别：</td>
          <td>
            <select name="leaves">
            <?php if(is_array($leave)): foreach($leave as $key=>$leave): ?><option value="<?php echo ($leave["value"]); ?>"><?php echo ($leave["value"]); ?></option><?php endforeach; endif; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="label">预警颜色：</td>
          <td>
            <select name="color">
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
            <textarea name='text' rows="6" cols="48"></textarea>
          </td>
        </tr>
        </table>
        <div class="button-div">
          <input type="submit" value=" 确定 " />
          <input type="reset" value=" 重置 " />
        </div>
      <!-- <input type="hidden" name="act" value="insert" />
      <input type="hidden" name="old_cat_name" value="" />
      <input type="hidden" name="cat_id" value="" /> -->
    </form>
  </div>
  <h2>发布市县预警</h2>
    <div class="main-div">
      <form action="<?php echo U('admin/warn/addWarn');?>" method="post" name="theForm" enctype="multipart/form-data">
      <table width="100%" id="general-table">
          <tr>
            <td class="label">预警市县：</td>
            <td>
            <?php if(is_array($city)): foreach($city as $key=>$city): ?><label><input name="city[]" type="checkbox" value="<?php echo ($city["zh"]); ?>" /><?php echo ($city["zh"]); ?></label><?php endforeach; endif; ?>
            </td>
          </tr>
          
          <tr>
            <td class="label">预警类型：</td>
            <td>
              <select name="type">
              <?php if(is_array($type2)): foreach($type2 as $key=>$type2): ?><option value="<?php echo ($type2["value"]); ?>"><?php echo ($type2["value"]); ?></option><?php endforeach; endif; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td class="label">预警级别：</td>
            <td>
              <select name="leaves">
              <?php if(is_array($leave2)): foreach($leave2 as $key=>$leave2): ?><option value="<?php echo ($leave2["value"]); ?>"><?php echo ($leave2["value"]); ?></option><?php endforeach; endif; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td class="label">预警颜色：</td>
            <td>
              <select name="color">
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
              <textarea name='text' rows="6" cols="48"></textarea>
            </td>
          </tr>
          </table>
          <div class="button-div">
            <input type="submit" value=" 确定 " />
            <input type="reset" value=" 重置 " />
          </div>
        <!-- <input type="hidden" name="act" value="insert" />
        <input type="hidden" name="old_cat_name" value="" />
        <input type="hidden" name="cat_id" value="" /> -->
      </form>
    </div>
  <div id="footer">
  共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
  版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>