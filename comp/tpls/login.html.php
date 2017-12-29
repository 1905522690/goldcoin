<?php if(!defined('WEB_ROOT')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <?php Template::$_tplval['seo'] = TagAttrLoop::emsdeital('cn_seo','__typeid','246','','','','','','',''); ?>
<title><?php echo Template::$_tplval['seo']['title']; ?></title> -->
<title>金币市场专业委员会</title>
<meta name="Keywords" content="<?php echo Template::$_tplval['seo']['keywords']; ?>"/>
<meta name="Description" content="<?php echo Template::$_tplval['seo']['description']; ?>" />
<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href="style/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="script/jquery-1.7.1.min.js"></script>
<script language="javascript" type="text/javascript" src="script/easing.js"></script>
<script language="javascript" type="text/javascript" src="script/js.js"></script>
<script language="javascript" type="text/javascript" src="script/fun.js"></script>
<script language="javascript" type="text/javascript" src="script/form.js"></script>
<script language="javascript" type="text/javascript" src="script/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lte IE 6]>
<script src="script/png.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]--> 
</head>

<body>
<div class="headDiv">
<?php MFInclude::regincludepage('./','index_head.html'); ?>
</div>
<script type="text/javascript">
$(function(){
	$(".nav").find("a").eq(5).addClass("aNow");	
})
</script>

<div class="login">
<div class="wal">
    <ul>
	  <form name="loginform" id="loginform" enctype="multipart/form-data" method="post" action="<?php echo WEB_APP; ?>do/?UserLogin-login.html">
      <li><em>用户名：</em><input name="username" type="text" class="input1" /></li>
      <li><em>密码：</em><input name="password" type="password" class="input1" /></li>
	  <input name="jumpurl" type="hidden" value="<?php echo WEB_APP; ?>?memberindex.html" />
      <li><input type="submit" class="btn1" value="提  交" /><input type="reset" class="btn1 btn2" value="取  消" /></li>
	  </form>
    </ul>
    <div class="msg"><a href="./?password.html">找回密码</a></div>　<!--<a href="">找回密码</a></div>-->
</div>
</div>

<?php MFInclude::regincludepage('./','index_foot.html'); ?>
</body>
</html>
