<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cateadd(){
        if(IS_POST){
            $catModel = D('Cat');
            if($catModel->add($_POST)){
                $this->redirect('admin/cat/catelist');exit;
            }
        }
        $this->display();
    }
    public function catelist(){
        $catModel = D('Cat');
        $this->assign('catlist',$catModel->gettree());
        $this->display();
    }
    public function cateedit(){

        $catModel = D('Cat');
        $this->assign('gettree',$catModel->gettree());
        $this->assign('catinfo',$catModel->find(I('lid')));
        $this->display();
       if(IS_POST){
            $catModel = D('Cat');
            $lid = I('lid');
            if($catModel->where('lid='.$lid)->save($_POST)){
                $this->redirect('admin/cat/catelist');exit;
            }
    }
}

    public function catedel(){
        $catModel = D('Cat');
        if($catModel->delete(I('get.lid'))){
            $this->redirect('admin/cat/catelist');exit;
        }
    }
}
