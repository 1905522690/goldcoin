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
<?php $_GET['user_id'] = Template::$_tplval['IMSSITEUSER']['id'];?>
<?php Template::$_tplval['info'] = TagAttrLoop::emsdeital('cn_users','__typeid','221','','id='.urldecode($_GET["user_id"]).'','','','','',''); ?>
<div class="fl w249 memberNav">
    <div class="imgDiv"><img src="<?php echo Template::$_tplval['info']['img_path']; ?>" height="102" weight="197"/></div>
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
    <div class="pageTitle2"><h1>新闻资讯</h1></div>
    <div class="member_01">
      <ul>
        <li><a href="">新闻资讯测试，显示3条</a><span>显示时间2017-12-28</span></li>
      </ul>
    </div>
    <div class="pageTitle2"><h1>最新通知</h1></div>
    <div class="member_01">
      <ul>
      <?php $_GET['user_id'] = Template::$_tplval['IMSSITEUSER']['id'];?>
      <?php Template::$_tplval['user'] = TagAttrLoop::emsdeital('cn_users','__typeid','221','','id='.urldecode($_GET["user_id"]).'','','','','',''); ?>
      <?php $_GET["fq_key"] = Template::$_tplval["user"]["fq_key"] ?>

      <?php $_from = TagAttrLoop::emslist('cn_member_notice','id desc','diqu_key like \'%'.urldecode($_GET["fq_key"]).'%\'','3','','','','',''); if (!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }if (count($_from)){foreach($_from as $key=>Template::$_tplval['list']){ ?>
        <li><a href=""><?php if(Template::$_tplval['list']['is_important_key']==1){?><b style="color:red;font-weight:normal;">【重要】</b><?php } ?><?php echo call_user_func('truncate',Template::$_tplval['list']['title'],30); ?></a>
        <span><?php echo Template::$_tplval['list']['pubdate']; ?></span></li>
      <?php }} unset($_from);?>
      </ul>
    </div>
    <div class="pageTitle2"><h1>留言回复</h1><a href="" class="btn">我要发布->跳转发布新闻页面</a></div>
    <div class="member_02">
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
           <tr>
             <td width="293">
             <div class="name"><a href="">帖子标题</a></div>
             </td>
             <td width="94">会员名称</td>
             <td width="125">发帖时间</td>
             <td width="100">评论（<a href=""><em>25</em></a>）</td>
             <td><a href="" class="blue">回复</a></td>
           </tr>
       </table>
    </div>
    <div class="pageTitle2"><h1>产品信息</h1></div>
    <div class="member_03">
      <ul>
      <!-- 显示产品4条 -->
        <li>
           <div class="imgDiv"><a href=""><img src="image/nimg154_1.jpg"/></a></div>
           <div class="name"><a href="">羊年纪念金币</a></div>
           <div class="blue">审核中/已发布</div>
        </li>
        <li>
           <div class="imgDiv"><a href=""><img src="image/nimg154_1.jpg"/></a></div>
           <div class="name"><a href="">羊年纪念金币</a></div>
           <div class="blue">审核中/已发布</div>
        </li>
        <li>
           <div class="imgDiv"><a href=""><img src="image/nimg154_1.jpg"/></a></div>
           <div class="name"><a href="">羊年纪念金币</a></div>
           <div class="blue">审核中/已发布</div>
        </li>
        <li>
           <div class="imgDiv"><a href=""><img src="image/nimg154_1.jpg"/></a></div>
           <div class="name"><a href="">羊年纪念金币</a></div>
           <div class="blue">审核中/已发布</div>
        </li>
      </ul>
      <span class="clear_f"></span>
    </div>
    <div class="pageTitle2"><h1>新闻管理</h1></div>
    <div class="member_01" style="background:none;">
        <ul>
          <li><a href="">第三届中国金币金色文化艺术大赛行业组入围名单公布</a><span class="span1">2015.09.24</span><em>审核中/已发布</em></li>
        </ul>
    </div>
</div>
<div class="h50"></div>
<!--walEnd-->
</div>
</div>


<?php MFInclude::regincludepage('./','index_foot.html'); ?>
</body>
</html>
