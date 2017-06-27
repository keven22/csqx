<?php 
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller{
	//页面
	//头条
	public function topedit(){
		$top = D('content');
		$this->assign('topnews',$top->topNews());
        $this->display();
	}
	//发布新的资讯
	public function newsadd(){

	} 

	//资讯列表
	public function newslist(){

	}

	//编辑资讯
	public function newsedit(){

	}

	//删除资讯
	public function newsdel(){

	}

	//索取资讯
	public function newspost(){

	}

	//接口
	public function saveTop(){
        $warn = D('content');
        $warn->saveTopNews();

    }
}
 ?>
