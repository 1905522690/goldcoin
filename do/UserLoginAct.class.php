<?php 
/**
 * 用户登录相关的信息
 */
session_start();
class UserLoginAct extends Action
{
	private $mod = '';
	private $taginfo = '';
	private $data = array();
	public function UserLoginAct()
	{
		// echo 111;die();
		$this->mod = $this->M('UserLogin');
	}
	//读取属性标签值
	public function getagattr($pa,$data)
	{
		$this->taginfo = $pa;
		$this->data = $data;
	}
	
	//过滤提交post，防止sql注入和xss跨站攻击
	private function clean_post($post)
	{		
		if(!get_magic_quotes_gpc())
		{
			if(is_array($post)){
            foreach($post as $n=>$v){
				$post[$n] = mysql_real_escape_string($v);
                $post[$n] = addslashes($v);
				$post[$n] = str_replace("_", "/_", $v);
				$post[$n] = str_replace("%", "/%", $v);
				$post[$n] = nl2br($v);
				$post[$n] = htmlspecialchars($v);
            }				
			}else{
				$post = mysql_real_escape_string($post);
				$post = addslashes($post);
				$post = str_replace("_", "/_", $post);
				$post = str_replace("%", "/%", $post);
				$post = nl2br($post);
				$post = htmlspecialchars($post);
			} 
		}		
		return $post;
	}	
	//读取验证码
	public function valicode()
	{
		import('Verify');
		$va = new Verify();
		$va->out(70,26,'valicodes');
	}

	//登录
	public function login()
	{	
		// echo "222";die();
		$_POST = $this->clean_post($_POST);		
		$username = $_POST['username'];
		// var_dump($username);
		// echo substr($username,0,1);
		// die();
		
		if($_POST['username']=="" || $_POST['password']==""){			
			redirect('../?login.html',2,'请输入用户名和密码！');
		}
		if(substr($username,0,1) == 'J'){
			
			$us = $this->mod->getuserinfo($_POST['username'],$_POST['password']);		
				if(empty($us)){			
					redirect('../?login.html',2,'用户名或密码错误！');
				}else{
					Cache::session_set(array('IMS_SITEUSER'=>$us,'IMS_SITEUSER_ID'=>$us['id']));			
					redirect($_POST['jumpurl'],2,'登录成功！');
				}
		}else{
			$us1 = $this->mod->getuserinfo1($_POST['username'],$_POST['password']);		
				if(empty($us1)){			
					redirect('../?login.html',2,'用户名或密码错误！');
				}else{
					$_SESSION['user'] = $us1;
					Cache::session_set(array('IMS_SITEUSER'=>$us1,'IMS_SITEUSER_ID'=>$us1['id']));			
					redirect($_POST['jumpurl1'],2,'登录成功！');
				}
		}
		
	}


	//读取用户信息
	public function getuser()
	{
		$user = Cache::session_get('IMS_SITEUSER');
		$this->assign('IMSSITEUSER',$user);
	}
	//判读用户是否登录
	public function islogin()
	{
		$uid = Cache::session_get('IMS_SITEUSER_ID');		
		if(empty($uid)){						
			redirect(WEB_APP.'?login.html',2,'该页面只能登录后才能进入!');
		}
	}
	//修改会员信息
	public function memberxgxx_edit()
	{
		$uid = Cache::session_get('IMS_SITEUSER_ID');
		$_POST['user_id'] = $uid;
		
		if(!empty($_FILES['img']['name'])){		
			$tp = array("image/gif","image/jpeg","image/pjpeg","image/png","image/x-png");
			if(!in_array($_FILES['img']['type'],$tp) || ($_FILES["img"]["size"] > 1048576))
			{
				redirect('../?memberxgxx.html',1,'上传图片不能大于1M，或者图片格式不是gif/jpg/png格式！');	
				exit();		
			}else{
			//获取扩展名
			$ex=explode(".", $_FILES["img"]["name"]);
			$ex_num=sizeof($ex);
			$kz=$ex[$ex_num-1];		
			
			//新建文件夹
			$path = "asset/mphoto/".date("Ymd")."/";
			$path2 = "asset/mphoto/thumb/".date("Ymd")."/";			
			if(!is_dir("../".$path))
			{
				mkdir("../".$path);
			}
			if(!is_dir("../".$path2))
			{
				mkdir("../".$path2);
			}
			
			//获取文件名
			$filename="up".date('YmdHis').rand(10000,99999).".".$kz;
			move_uploaded_file($_FILES["img"]["tmp_name"],"../".$path.$filename);
			//图片的原始名称
			$old_filename = $_FILES['img']['name'];
			//缩略图
			//$filename1 = str_replace("mphoto","mphoto/thumb",$filename);
			images_bg_tune($path.$filename,$path2.$filename,296,153,"center",0xffffff);			
			}			
		}
		if($filename!="")
		{
			$_POST['img'] = $old_filename;
			$_POST['img_path'] = $path.$filename;
		}
		
		$this->mod->memberxgxx_edit_db();
		$us = $this->mod->getuser($uid);
		Cache::session_set(array('IMS_SITEUSER'=>$us,'IMS_SITEUSER_ID'=>$us['id']));
		redirect($_POST['jumpurl'],2,'提交成功');
	}	
	//修改密码
	public function editpassword()
	{
		$_POST = $this->clean_post($_POST);
		$uid = Cache::session_get('IMS_SITEUSER_ID');
		$is = $this->mod->getuserpw($uid,$_POST['oldpassword']);
		if(empty($is['id'])){
			redirect($_POST['errorurl'],2,'原密码不正确!');
		}else{
			$_POST['password']=$_POST['password1'];
			$this->mod->updateuserpw($uid);
			redirect($_POST['sufurl'],2,'密码修改成功!');
		}
	}
	//退出登录
	public function logout()
	{
		session_start();
		unset($_SESSION['IMS_SITEUSER'],$_SESSION['IMS_SITEUSER_ID']);
		redirect(WEB_APP,2,'正在退出登录');
	}








































}






 ?>