<?php
namespace Admin\Controller;
use Think\Controller;
class InfoController extends Controller {

     public function top(){
        $opinionModel = D('Opinion');
        $this->assign('title',$opinionModel->where("name='title'")->find());
        $this->assign('logo',$opinionModel->where("name='logo'")->find());
        $topModel = D('content');
        $this->assign('topNewsTitle',$topModel->where("name='topNewsTitle'")->find());
        $this->assign('topNewsText',$topModel->where("name='topNewsText'")->find());
        $this->display('Index/head');
        $this->display();
    }


    public function topadd(){
        if(IS_POST){
            $_POST['date'] = date("Y-m-d H:i:sa",time());
            $topModel = D('content');
            $con = $_POST['content'];
            $tit = $_POST['title'];
            $title['content'] = $tit;
            if(!$topModel->create()){
                $this->error($topModel->getError(),'','2');
                exit;
            }

            if($topModel->where("name='topNewsText'")->save($data).$topModel->where("name='topNewsTitle'")->save($title)){
                $this->success('发布成功!','','2');
            }else {
                $this->error('发布失败，请稍后再试','','2');
            }
        }
    }

    public function warn(){
        $opinionModel = D('Opinion');
        $this->assign('title',$opinionModel->where("name='title'")->find());
        $this->assign('logo',$opinionModel->where("name='logo'")->find());
        $this->display('Index/head');
        $this->display();
    }

    //商品列表
    public function goodslist(){

        $p = I('p')?I('p'):1;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $this->gm->order('goods_id')->page($p.',2')->select();
        $this->assign('list',$list);// 赋值数据集
        $count      = $this->gm->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        // var_dump($show);
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板



        // $this->assign('list',$this->gm->select());
        // $this->display();
    }

    public function del(){
        $this->gm->delete(I('get.goods_id'));
        $this->redirect('admin/goods/goodslist');
    }



}
