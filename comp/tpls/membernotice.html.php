<?php if(!defined('WEB_ROOT')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金币市场专业委员会</title>
<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href="style/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="script/jquery-1.7.1.min.js"></script>
<script language="javascript" type="text/javascript" src="script/easing.js"></script>
<script language="javascript" type="text/javascript" src="script/js.js"></script>
<script language="javascript" type="text/javascript" src="script/fun.js"></script>
<script language="javascript" type="text/javascript" src="script/form.js"></script>
<script language="javascript" type="text/javascript" src="script/jquery.SuperSlide.2.1.1.js"></script>
<!-- 引入分页 -->
<!-- <script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>?script/ims.pager.js"></script> -->
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
    <div class="list" style="display:block;">
      <ul>
        <li><a href="<?php echo WEB_APP; ?>?membernotice.html" class="aNow">会员通知</a></li>
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
    <div class="list">
      <ul>
        <li><a href="<?php echo WEB_APP; ?>?memberxgxx.html">修改信息</a></li>
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
    <div class="memberNotice">
      <ul>
      <?php $_GET['user_id'] = Template::$_tplval['IMSSITEUSER']['id'];?>
      <?php Template::$_tplval['user'] = TagAttrLoop::emsdeital('cn_users','__typeid','221','','id='.urldecode($_GET["user_id"]).'','','','','',''); ?>
      <?php $_GET["fq_key"] = Template::$_tplval["user"]["fq_key"] ?>

      <?php $_plist = TagAttrLoop::emspagelist('cn_member_notice','id desc','10','diqu_key like \'%'.urldecode($_GET["fq_key"]).'%\'','page','','',''); $_from = $_plist['all']; Template::$_tplval['page'] = $_plist['page']; Template::$_tplval['pagejson'] = json_encode($_plist['page']); if (!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }if (count($_from)){foreach($_from as $key=>Template::$_tplval['list']){ ?>
        <li>
           <div class="title"><a href=""><?php if(Template::$_tplval['list']['is_important_key']==1){?><span style="color:red;">【重要】</span><?php }?><?php echo Template::$_tplval['list']['title']; ?></a></div>
           <div class="content">
               <?php echo call_user_func('truncate',Template::$_tplval['list']['content'],80); ?>
           </div>
           <div class="time"><?php echo Template::$_tplval['list']['pubdate']; ?></div>
        </li>
      <?php }} unset($_from);?>
      </ul>
    </div>
    <!-- 分页 -->
    <!-- <div class="pageNum">
       <div id="page_style"></div>
      <div class="ims_pager" mod="#page_style:1" style="display:none;"><?php echo Template::$_tplval['pagejson']; ?></div>
     </div> -->
    <!--内容End-->
</div>
<div class="h50"></div>
<!--walEnd-->
</div>
</div>

<div class="footNav">
<div class="wal">
    <ul class="fl">
      <li>
          <h1><a href="">关于我们</a></h1>
          <dl>
           <dd><a href="">委员会简介</a></dd>
           <dd><a href="">委员会构架</a></dd>
           <dd><a href="">领导简介</a></dd>
         </dl>
      </li>
      <li>
         <h1><a href="">行业动态</a></h1>
         <dl>
           <dd><a href="">公告通知</a></dd>
           <dd><a href="">工作动态</a></dd>
           <dd><a href="">会员动态</a></dd>
           <dd><a href="">市场动态</a></dd>
         </dl>
      </li>
      <li>
         <h1><a href="">规章制度</a></h1>
         <dl>
           <dd><a href="">入会指南</a></dd>
           <dd><a href="">入会流程</a></dd>
           <dd><a href="">自律公约</a></dd>
           <dd><a href="">议事规程</a></dd>
           <dd><a href="">管理规则</a></dd>
         </dl>
      </li>
      <li>
         <h1><a href="">培训学院</a></h1>
         <dl>
           <dd><a href="">金币知识</a></dd>
           <dd><a href="">项目介绍</a></dd>
           <dd><a href="">金币课堂</a></dd>
           <dd><a href="">市场报告</a></dd>
         </dl>
      </li>
      <li>
         <h1><a href="">用户指南</a></h1>
         <dl>
           <dd><a href="">注册新用户</a></dd>
           <dd><a href="">账号密码</a></dd>
         </dl>
      </li>
      <li>
         <h1><a href="">会员之家</a></h1>
      </li>
    </ul>
    <div class="fr">
        <h1>联系我们</h1>
        <div class="content">
        热线：010-59311247 <br />
        传真：010-59311247-xxx<br />
        邮箱：123456@163.com<br />
        <a href="">相关链接</a>　<a href="">法律声明</a>　<a href="">隐私保护</a>
        </div>
    </div>
</div>
</div>
<div class="footDiv">
CopyRight ©2000-2014 Chngc.net 京ICP证080121号 京ICP备10003406号 京公网安备110102001642
</div>
</body>
</html>
