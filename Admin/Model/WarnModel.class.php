<?php
namespace Admin\Model;
use Think\Model;

class WarnModel extends Model{



    //接口
    public function getAllWarn(){
        $allwarn = M('warn');
        $warn = $allwarn->where("city='all' AND now='NOW'")->select();
		return $warn;
    }
	public function saveAllWarn(){
    	$warn = M('warn');
    	$data['id'] = $_POST['id'];
    	$data['type'] = $_POST['type'];
    	$data['leaves'] = $_POST['leaves'];
    	$data['color'] = $_POST['color'];
		$result = $warn->data($data)->save();
		if($result !== false){
			echo '执行成功';
		}else{
			echo '执行失败';
		}
    }
    public function addAllWarn(){
    	$warn = M('warn');
        $data['city'] = 'all';
    	$data['type'] = $_POST['type'];
    	$data['leaves'] = $_POST['leaves'];
    	$data['color'] = $_POST['color'];
        $data['text'] = $_POST['text'];
    	$data['date'] = date('Y-m-d');
    	$data['time'] = date('H:i:s');
        $data['now'] = "NOW";
		$result = $warn->data($data)->add();
		if($result !== false){
			echo '执行成功';
		}else{
			echo '执行失败';
		}
    }
    public function passAllWarn(){
    	$warn = M('warn');
    	$data['id'] = $_GET['id'];
    	$data['now'] = 'PASS';
		$result = $warn->data($data)->save();
		if($result !== false){
			echo '执行成功';
		}else{
			echo '执行失败';
		}
    }
    public function searchAllWarn(){
        $allwarn = M('warn');
        $warn = $allwarn->where("city='all'")->select();
		return $warn;
    }

    public function getWarn(){
        $allwarn = M('warn');
        $warn = $allwarn->where("now='NOW' AND city!='all'")->select();
        return $warn;
    }
    public function saveWarn(){
        $warn = M('warn');
        $data['id'] = $_POST['id'];
        $data['type'] = $_POST['type'];
        $data['leaves'] = $_POST['leaves'];
        $data['color'] = $_POST['color'];
        $result = $warn->data($data)->save();
        if($result !== false){
			echo '执行成功';
		}else{
			echo '执行失败';
		}
    }
    public function addWarn(){
        $warn = M('warn');
        $num = count($_POST['city']);
        $data = array();
        for($k=0;$k<$num;$k++){
            $data[$k]['type'] = $_POST['type'];
            $data[$k]['leaves'] = $_POST['leaves'];
            $data[$k]['color'] = $_POST['color'];
            $data[$k]['text'] = $_POST['text'];
            $data[$k]['city'] = $_POST['city'][$k];
            $data[$k]['date'] = date('Y-m-d');   
            $data[$k]['time'] = date('H:i:s'); 
        }
        // $data['date'] = date('Y-m-d');
        // $data['time'] = date('H:i:s');
        $result = $warn->addall($data);
        if($result !== false){
			echo '执行成功';
		}else{
			echo '执行失败';
		}
    }
    public function passWarn(){
        $warn = M('warn');
        $data['id'] = $_GET['id'];
        $data['now'] = 'PASS';
        $result = $warn->data($data)->save();
        if($result !== false){
			echo '执行成功';
		}else{
			echo '执行失败';
		}
    }
    public function searchWarn(){
        $allwarn = M('warn');
        $warn = $allwarn->where("city!='all'")->select();
        return $warn;
    }
//预警预设置
    public function getWarntype(){
        $warntype = M('opinion');
        $type = $warntype->where("name='warntype'")->select();
        return $type;
    }
    public function getWarnleave(){
        $warnleave = M('opinion');
        $leave = $warnleave->where("name='warnleave'")->select();
        return $leave;
    }
    public function getWarncolor(){
        $warncolor = M('opinion');
        $color = $warncolor->where("name='warncolor'")->select();
        return $color;
    }
    public function getcity(){
        $cityid = M('cityid');
        $city = $cityid->select();
        return $city;
    }

}
