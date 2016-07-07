<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
//  protected $insertFields = array('account','password','nickname','email');
//  protected $updateFields = array('nickname','email');
	
	
	public function verifyUser($username,$password){
		$md5Password = md5($username.$password);
		return $this->where(array($username,$md5Password))->find();	
	}
	
	public function addUser($username,$password){
		$md5Password = md5($username.$password);
		$data = array(
			"username"=>$username,
			"password"=>$md5Password,
			"add_time"=>time(),
		);
		$id = $this->add($data);
		$data["id"] = $id;
		return $data;
	}
}
	