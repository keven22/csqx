<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class ContentModel extends RelationModel{
    public function topNews(){
    	$content = M('content');
    	$topNews = array();
        $title = $content->where("name='topNewsTitle'")->find();
        $text = $content->where("name='topNewsText'")->find();
        $topNews['title'] = $title['content'];
        $topNews['text'] = $text['content'];
		return $topNews;
    }
    public function saveTopNews(){
    	$content = M('content');
    	$title['id'] = 1;
    	$title['content'] = $_POST['title'];
    	$text['id'] = 2;
    	$text['content'] = $_POST['text'];
		$result = $content->data($title)->save();
		if($result !== false){
			echo '标题更新成功！';
		}else{
			echo '标题更新失败！';
		}
		$result = $content->data($text)->save();
		if($result !== false){
			echo '内容更新成功！';
		}else{
			echo '内容更新失败！';
		}
    }
}
