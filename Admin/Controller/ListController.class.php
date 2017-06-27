<?php
namespace Admin\Controller;
use Think\Controller;
class ListController extends Controller {
    public function listadd(){
        if(IS_POST){
            $catModel = D('List');
            if($catModel->add($_POST)){
                $this->redirect('admin/list/list');exit;
            }
        }
        $this->display();
    }
    public function list(){
        $catModel = D('Cat');
        
        $this->assign('catlist',$catModel->gettree());
        $this->display();
    }
    public function cateedit(){

        $catModel = D('Cat');
        if(IS_POST){
            $catModel = D('Cat');
            $cat_id = I('cat_id');
            if($catModel->where('cat_id='.$cat_id)->save($_POST)){
                $this->redirect('admin/cat/catelist');
                exit;
            }
        }

        $catModel->gettree();
        $this->assign('gettree',$catModel->gettree());
        $this->assign('catinfo',$catModel->find(I('cat_id')));
        $this->display();
    }

    public function catedel(){
        $catModel = D('Cat');
        if($catModel->delete(I('get.cat_id'))){
            $this->redirect('admin/cat/catelist');exit;
        }
    }
}
