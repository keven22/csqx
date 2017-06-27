<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function head(){
		$opinionModel = D('Opinion');
    	$this->assign('title',$opinionModel->where("name='title'")->find());
    	$this->assign('logo',$opinionModel->where("name='logo'")->find());
		$this->display();
	}

    public function index(){
        $opinionModel = D('Opinion');
    	$this->assign('title',$opinionModel->where("name='title'")->find());
    	$this->assign('logo',$opinionModel->where("name='logo'")->find());
        $this->display();
    }

    //首页头条文字预报
    public function topnews(){

    }

}
