<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function head(){
       
    }

     public function footer(){

    }

    
    public function index(){
    	$opinionModel = D('Opinion');
    	$this->assign('title',$opinionModel->where("name='title'")->find());
    	$this->assign('logo',$opinionModel->where("name='logo'")->find());

        $indexModel = D('Content');
        $this->assign('topNewsTitle',$indexModel->where("name='topNewsTitle'")->find());
        $this->assign('topNewsText',$indexModel->where("name='topNewsText'")->find());
        $this->assign('warn',$indexModel->where("name='warn'")->find());

        $newsModel = D('News');
        $newslist = $newsModel->order("date desc")->limit(0.5)->select();
        $this->assign('newslist',$newslist);
        $this->display();
    }

    public function news(){
        $newsModel = D('News');
        $newslist = $newsModel->order("date desc")->limit(0.5)->select();
        $this->assign('newslist',$newslist);
        $this->display();
    }



    public function p(){
        $opinionModel = D('Opinion');
        $this->assign('title',$opinionModel->where("name='title'")->find());
        $this->assign('logo',$opinionModel->where("name='logo'")->find());

        $indexModel = D('Content');
        $this->assign('warn',$indexModel->where("name='warn'")->find());

        
        $this->assign('news',$news);
        if (I('id')){
            $newsModel = D('News');
            //单条新闻信息
            $news = $newsModel->find(I('id'));
            $this->assign('news',$news);
            //页面右侧新闻列表
            $newslist = $newsModel->order("date desc")->limit(0.5)->select();
            $commentModel = D('Comment');
            //评论列表
            $comment = $commentModel->where("pid='".I('id')."'")->order('date desc')->limit(0,9)->select();
            $this->assign('newslist',$newslist);
            $this->assign('comlist',$comment);
            $this->display();
        }
        else{$this->display('index');}
    }

    public function comadd(){

        if(IS_POST){
            $_POST['date'] = date("Y-m-d H:i:sa",time());
            echo $_POST['time'];
            $commentModel = D('comment');
            $con = $_POST['content'];
            if(!$commentModel->create()){
                $this->error($commentModel->getError(),'','2');
                exit;
            }

            if($commentModel->add($_POST)){
                $this->success('评论成功!','','2');
            }else {
                $this->error('评论失败，请稍后再试','','2');
            }
        }

    }
}
