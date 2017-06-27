<?php 
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	public function papa(){
		$arr = array('name'=>'csqx','password'=>'kaiwen22','role'=>'admin');
		$this->add($arr);
	}
}