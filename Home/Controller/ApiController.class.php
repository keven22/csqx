<?php
namespace Home\Controller;
use Think\Controller;
class ApiController extends Controller {

    public function warnmap(){
    	$this->display();


      /*  $indexModel = D('Content');
        $this->assign('topNewsTitle',$indexModel->where("name='topNewsTitle'")->find());
        $this->assign('topNewsText',$indexModel->where("name='topNewsText'")->find());
        */
    }
}
