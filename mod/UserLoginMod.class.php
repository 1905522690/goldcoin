<?php 
/**
 * 用户登录相关的信息
 */
class UserLoginMod extends Model
{
	public $num=0;
	public function UserLoginMod()
	{
		$this->Model();
	}
	//读取用户名和密码
	public function getuserinfo($u,$p)
	{		
		$d = $this->get_row('SELECT * FROM cn_users WHERE concat("J",member_num)="'.$u.'" AND password="'.$p.'" AND freeze_key<>1');
		return $d;
	}
	public function getuserinfo1($u,$p)
	{	
		$username = $_POST['username'];
		$user = $this->get_row("SELECT * FROM cn_zusers WHERE user = '{$username}'");
		if($user['status'] == '否'){
			redirect('../?login.html',2,'您的帐号未开启');
		}
		$uid = $user['qyname_key'];
		if($uid != ""){
			$user1 = $this->get_row("SELECT * FROM cn_users WHERE id = '{$uid}'");
		}
		$freeze = $user1['freeze_key'];
		// var_dump($user1['freeze_key']);die();
		// echo "<pre>";
		if($freeze == 0){
		$b = $this->get_row('SELECT * FROM cn_zusers WHERE concat(user)="'.$u.'" AND password="'.$p.'"');
		// var_dump($b);die();
		return $b;
		}
	}
	public function getuserinfo2($u,$p)
	{	
		$username = $_POST['username'];
		$user = $this->get_row("SELECT * FROM cn_zusers WHERE user = '{$username}'");
		if($user['status'] == '否'){
			redirect('../mobile/?app.html',2,'您的帐号未开启');
		}
		$uid = $user['qyname_key'];
		if($uid != ""){
			$user1 = $this->get_row("SELECT * FROM cn_users WHERE id = '{$uid}'");
		}
		$freeze = $user1['freeze_key'];
		// var_dump($user1['freeze_key']);die();
		// echo "<pre>";
		if($freeze == 0){
		$b = $this->get_row('SELECT * FROM cn_zusers WHERE concat(user)="'.$u.'" AND password="'.$p.'"');
		// var_dump($b);die();
		return $b;
		}
	}

	//修改会员信息
	public function memberxgxx_edit_db()
	{
		if($_POST['img_path']=="")
		{			
			$this->update('cn_users',array('company','company_address','company_contact','company_introduction'),'id="'.$_POST['user_id'].'"');
		}else{			
			$this->update('cn_users',array('company','company_address','company_contact','company_introduction','img','img_path'),'id="'.$_POST['user_id'].'"');
		}
	}
	//获取会员详情
	public function getuser($uid)
	{
		return $this->get_row('SELECT * FROM cn_users WHERE id="'.$uid.'"');
	}
	//判读原密码是否正确
	public function getuserpw($uid,$pw)
	{
		return $this->get_row('SELECT id FROM cn_users WHERE id="'.$uid.'" AND password="'.$pw.'"');
	}
	//修改密码
	public function updateuserpw($uid)
	{
		$this->update('cn_users',array('password'),'id="'.$uid.'"');
	}







}
 ?>
