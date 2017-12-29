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
<script language="javascript" type="text/javascript" src="js/preview.js"></script>
<!--[if lte IE 6]>
<script src="script/png.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]--> 
</head>
<body>

<div class="headDiv headDiv2">
<?php MFInclude::regincludepage('./','index_head.html'); ?>
</div>
<?php if(empty(Action::$classqueue["UserLogin"])){ require_once(file_exists("do/UserLoginAct.class.php")?"do/UserLoginAct.class.php":"~do/UserLoginAct.class.php"); Action::$classqueue["UserLogin"] = new UserLoginAct(); }Action::$classqueue["UserLogin"]->islogin();?>

<script type="text/javascript">
$(function(){
	$(".nav").find("a").eq(5).addClass("aNow");	
})
</script>

<div class="memberBg">
<div class="wal">
<!--wal-->
<div class="memberTitle">
    <h1><img src="image/title.png"/></h1>
  <?php if (Template::$_tplval["IMSSITEUSER"]["member_num"] != ""){ ?>
      <div class="fl msg"><?php echo Template::$_tplval['IMSSITEUSER']['username']; ?>， 编号（<?php echo Template::$_tplval['IMSSITEUSER']['member_num']; ?>）您好，欢迎登录会员系统 登录时间：<?php echo date("Y年m月d日"); ?></div>
      <?php }else{ ?>
      <div class="fl msg"><?php echo Template::$_tplval['IMSSITEUSER']['qyname']; ?>，<?php echo Template::$_tplval['IMSSITEUSER']['name']; ?>&nbsp&nbsp&nbsp&nbsp您好，欢迎登录会员系统 登录时间：<?php echo date("Y年m月d日"); ?></div>
  <?php } ?>
    
</div>
<div class="fl w249 memberNav">
    <div class="imgDiv"><img src="image/nimg197.jpg"/></div>
    <h2>会员通知</h2>
    <div class="list">
      <ul>
        <li><a href="<?php echo WEB_APP; ?>?membernotice.html">会员通知</a></li>
      </ul>
    </div>
    <h2>会员动态</h2>
    <div class="list">
      <ul>
        <li><a href="">新闻发布</a></li>
        <li><a href="">新闻管理</a></li>
      </ul>
    </div>
    <h2>余缺调剂</h2>
    <div class="list">
      <ul>
        <li><a href="">我要求购</a></li>
        <li><a href="">我要出售</a></li>
        <li><a href="">我的供求列表</a></li>
      </ul>
    </div>
    <h2>新闻资讯</h2>
    <div class="list">
      <ul>
        <li><a href="">新闻资讯</a></li>
      </ul>
    </div>
    <h2>业绩提交</h2>
    <div class="list">
      <ul>
        <li><a href="">业绩考核说明</a></li>
        <li><a href="">历史业绩查询</a></li>
      </ul>
    </div>
    <h2>我的产品</h2>
    <div class="list">
      <ul>
        <li><a href="">产品发布</a></li>
        <li><a href="">产品管理</a></li>
      </ul>
    </div>
    <h2>交流平台</h2>
    <div class="list">
      <ul>
        <li><a href="">发布留言</a></li>
        <li><a href="">交流平台</a></li>
        <li><a href="">我的留言</a></li>
      </ul>
    </div>
    <h2>用户设置</h2>
    <div class="list" style="display:block;">
      <ul>
        <li><a href="<?php echo WEB_APP; ?>?memberxgxx.html" class="aNow">修改信息</a></li>
        <li><a href="<?php echo WEB_APP; ?>?memberpassword.html">修改用户密码</a></li>
      </ul>
    </div>
    <h2>常见问题</h2>
    <div class="list">
      <ul>
        <li><a href="<?php echo WEB_APP; ?>?faq.html">常见问题</a></li>
      </ul>
    </div>
</div>
<div class="fr w722">
    <!--内容-->
	<form name="memberinfo" id="memberinfo" enctype="multipart/form-data" method="post" action="<?php echo WEB_APP; ?>do/?UserLogin-memberxgxx_edit.html">
    <div class="memberInfo2">
        <div class="imgDiv"><?php if(Template::$_tplval['IMSSITEUSER']['img_path']==""){?><img id="ImgPr" src="image/nimg296.jpg" width="296" height="153"/><?php }else{?><img id="ImgPr" src="<?php echo Template::$_tplval['IMSSITEUSER']['img_path']; ?>" width="296" height="153"/><?php } ?></div>
        <a href="" class="btn_1">更换图片</a>
		<div style="position: absolute;z-index: 20;cursor:pointer;left:3px;top:135px;">
			<input type="file" style="filter: alpha(opacity=0);opacity: 0;-moz-opacity:0; -khtml-opacity: 0;width:296px; height:38px; cursor: pointer;" name="img" id="img"/>
			</div>
        <div class="form">
           <ul>
             <li><em>企业名称：</em><input name="company" type="text" class="input1" value="<?php echo Template::$_tplval['IMSSITEUSER']['company']; ?>" /></li>
             <li><em>企业地址：</em><input name="company_address" type="text" class="input1" value="<?php echo Template::$_tplval['IMSSITEUSER']['company_address']; ?>" /></li>
             <li class="li_01"><em>联系方式：</em><textarea name="company_contact" cols="" rows=""><?php echo Template::$_tplval['IMSSITEUSER']['company_contact']; ?></textarea></li>
           </ul>
        </div>
		<input name="jumpurl" type="hidden" value="<?php echo WEB_APP; ?>?memberxgxx.html" />
        <ul>
          <li class="li_02"><em>企业介绍：</em><textarea name="company_introduction" cols="" rows=""><?php echo Template::$_tplval['IMSSITEUSER']['company_introduction']; ?></textarea></li>
          <li><input type="submit" class="btn1" value="确认修改" /></li>
        </ul>
    </div>
	</form>
    <!--内容End-->
</div>
<div class="h50"></div>
<!--walEnd-->
</div>
</div>

<?php MFInclude::regincludepage('./','index_foot.html'); ?>
<script type="text/javascript">
$(function(){
	$("#img").uploadPreview({ Img: "ImgPr", Width: 296, Height: 153 });
})
</script>
</body>
</html>
