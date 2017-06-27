<?php 
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {

	//发布全区预警
	public function test1(){
		$url = "http://tieba.baidu.com/p/4924752753";
$page = 1;
$str = file_get_contents($url);//第一页抓取
$pages = preg_match_all('/<span\sclass="red">(.*?)<\/span>/', $str, $pagenum);//抓取帖子总页数
$pageurl = $url."?pn=".$page; //当前页链接
$strs = file_get_contents($pageurl);//当前页抓取

$id = preg_match_all('/<a\sd[^>]*"\starget="_blank">(.*?)<\/a>/', $strs, $matches);//抓取楼层id列表
$louceng = preg_match_all('/post_no&quot;:(.*?),/', $strs, $loucengs);//抓取楼层数列表
$date = preg_match_all('/date&quot;:&quot;(.*?)&quot;,/', $strs, $times);//抓取楼层回复时间列表
$neirong = preg_match_all('/<cc>([\s\S]*?)<\\/cc>/', $strs, $content);//抓取楼层内容列表
$first = preg_match_all('/<a\sd[^>]*"\starget="_blank">(.*?)<\/a>/', $str, $matchess);//抓取第一页楼主id
$pages = preg_match_all('/<span\sclass="red">(.*?)<\/span>/', $str, $pagenum);//抓取总页数
$title = preg_match_all('/h1\s.+title="(.*?)"/', $str, $titles);//抓取帖子标题
$jieshao = preg_match_all('/<cc>([\s\S]*?)<\\/cc>/', $str, $introduce);//抓取一楼任务介绍
$line = count($loucengs[1]); 
echo $line;
for($i=0;$i<$line;$i++){
	echo $loucengs[1][$i];
}

	}

	//解除全区预警
	public function mainwarndel(){

	}

	//更改全区预警
	public function mainwarnedit(){
		
	}

	//发布
}
 ?>
