<?php if (!defined('THINK_PATH')) exit();?><div class="panel border-red">
	<div class="panel-head  border-red-light bg-red" style="text-align:center;">
        <h3><?php echo ($topNewsTitle["content"]); ?></h3>
	</div>
	<div class="panel-body">
		<p class="text-indent"><?php echo ($topNewsText["content"]); ?></p></div></div>

<div class="list-link" style="margin-top: 12px;">
<?php if(is_array($newslist)): foreach($newslist as $key=>$news): ?><a href="/Home/Index/news/id/<?php echo ($news["id"]); ?>" class="active"><?php echo ($news["title"]); ?></a><?php endforeach; endif; ?>
</div>