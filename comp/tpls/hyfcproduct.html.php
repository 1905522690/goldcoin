<?php if(!defined('WEB_ROOT')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <?php Template::$_tplval['seo'] = TagAttrLoop::emsdeital('cn_seo','__typeid','246','','','','','','',''); ?>
<title><?php echo Template::$_tplval['seo']['title']; ?></title> -->
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
<script language="javascript" type="text/javascript" src="js/ims.pager.js"></script>
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
	$(".sNav_04").find("a").eq(1).addClass("aNow");
	$(".sideNav .list").find("a").eq(1).addClass("aNow");
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
     <div class="pageNow"><a href="<?php echo WEB_APP; ?>?app.html">首页</a> > <a href="<?php echo WEB_APP; ?>?member.html">会员风采</a> > <span>会员产品</span></div>
     <!--内容-->
     <div class="memberProduct">
        <ul>
        <!-- 暂时还没有带SESSION的id -->
		  <?php $_plist = TagAttrLoop::emspagelist('cn_members_product','__handsort desc,id desc','8','user_key='.urldecode($_GET["u"]).'','page','','',''); $_from = $_plist['all']; Template::$_tplval['page'] = $_plist['page']; Template::$_tplval['pagejson'] = json_encode($_plist['page']); if (!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }if (count($_from)){foreach($_from as $key=>Template::$_tplval['list']){ ?>
          <li>
             <div class="imgDiv"><a href="<?php echo WEB_APP; ?>?hyfcproductshow/<?php echo Template::$_tplval['list']['id']; ?>.html">

			 <img width="120" height="120" src="<?php echo Template::$_tplval['list']['img_path']; ?>"/>
			 
             <div class="name"><a href="<?php echo WEB_APP; ?>?hyfcproductshow/<?php echo Template::$_tplval['list']['id']; ?>.html"><?php echo Template::$_tplval['list']['title']; ?></a></div>
          </li>
		  <?php }} unset($_from);?>

		          
        </ul>
        <span class="clear_f"></span>
     </div>
     <div id="page_style"></div>
	 <div style="display:none;" class="ims_pager" mod="#page_style:3" ><?php echo Template::$_tplval['pagejson']; ?></div>
     <!--内容End-->
</div>
<div class="h50"></div>
<!--walEnd-->
</div>

<?php MFInclude::regincludepage('./','index_foot.html'); ?>
</body>
</html>
