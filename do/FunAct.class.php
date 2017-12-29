<?php
/**
 * 相关处理
 */
class FunAct extends Action
{
	private $mod = '';
	public function FunAct()
	{
		$this->mod = $this->M('Fun');
	}

	public function add()
	{
		$this->mod->addition();
		redirect($_POST['jumpurl'],2,'添加成功!');
	}
	public function app()
	{
		if($_POST["title"] != "请选择"){
		if(!empty($_FILES['img']['name'])){		
			$tp = array("image/gif","image/jpeg","image/pjpeg","image/png","image/x-png");
			if(!in_array($_FILES['img']['type'],$tp) || ($_FILES["img"]["size"] > 1048576))
			{
				redirect('../?addProduct2.html',1,'上传图片不能大于1M，或者图片格式不是gif/jpg/png格式！');	
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
		if($filename!="")
		{
			$_POST['img'] = $old_filename;
			$_POST['img_path'] = $path.$filename;
		}			
		}		
	}
		$tulu = $this->mod->appition();
		// if ($tulu == "已选") {
				// redirect('../?memberproductpic.html',2,'对不起，您已经添加过该产品');
			// }
		redirect($_POST['jumpurl'],2,'添加成功!');
	}
}
?>