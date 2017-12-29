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
<link href="<?php echo WEB_APP; ?>style/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_APP; ?>style/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/jquery-1.7.1.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/js.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/fun.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/form.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/jquery.SuperSlide.2.1.1.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>js/jQuery.autoIMG.min.js"></script>
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
	$(".nav").find("a").eq(4).addClass("aNow");
	$(".sNav_04").find("a").eq(0).addClass("aNow");
	$(".sideNav .list").find("a").eq(0).addClass("aNow");
})
</script>

<div class="wal">
<!--wal-->
<?php Template::$_tplval['info'] = TagAttrLoop::emsdeital('cn_users','id',''.urldecode($_GET["u"]).'','','','','','','',''); ?>
<div class="fl sideNav">
  <div class="title">会员风采</div>
  <div class="list">
     <ul>
        <li><a href="<?php echo WEB_APP; ?>?hyfcintroduction/u/<?php echo Template::$_tplval['info']['id']; ?>.html">会员介绍</a></li>
        <li><a href="<?php echo WEB_APP; ?>?hyfcproduct/u/<?php echo Template::$_tplval['info']['id']; ?>.html">会员产品</a></li>
     </ul>
  </div>
  <div class="h10"></div>
  <div class="sideBtn"><a href="">入会指南</a></div>
</div>
<div class="fr w725">
     <div class="pageNow"><a href="<?php echo WEB_APP; ?>?app.html">首页</a> > <a href="<?php echo WEB_APP; ?>?member.html">会员风采</a> > <span>会员介绍</span></div>
     <!--内容-->
     <div class="memberInfo">
        <div class="title color1"><?php echo Template::$_tplval['info']['company']; ?></div>
        <div class="imgDiv"><img src="<?php echo Template::$_tplval['info']['img_path']; ?>"/></div>
        <div class="title color1">公司介绍</div>
        <div class="content">
		<?php echo Template::$_tplval['info']['company_introduction']; ?>
        </div>
		<div class="title color1">联系方式</div>
        <div class="content">
		<?php echo Template::$_tplval['info']['company_contact']; ?>
        </div>
     </div>
     <!--内容End-->
</div>
<div class="h50"></div>
<!--walEnd-->
</div>

<?php MFInclude::regincludepage('./','index_foot.html'); ?>
<script type="text/javascript">
$(function(){
	$(".imgDiv").autoIMG();
	$(".content").autoIMG();
})
</script>
</body>
</html>
