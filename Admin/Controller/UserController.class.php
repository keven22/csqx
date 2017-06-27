<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    Public function aa(){
        $a = 123;
        $this->assign('a',$a);
        $this->display();
    }

    public function ff(){
        $a = D('User');
    	$a->name = 'raoping';
        $a->password = 'raoping';
        $a->role = 'editer';
        $a->add();
    }

    public function cha(){
        $b = D('User');
        var_dump($b->field('id,name,password')->where('id<3')->order('id desc')->select());
    }

    public function up(){
        $c = D('User');
        $arr = array('name'=>'keven22');
        $c->where('id=2')->save($arr);
    }

    public function del(){
        $d = D('User');
        $d->delete('3');
    }

    public function ve(){
        $a = array(
            array('id'=>1,'title'=>'潮汕气象'),
            array('id'=>2,'title'=>'潮汕天气'),
            );
        $this->assign('ff',$a);
        $this->display();
    }

}
