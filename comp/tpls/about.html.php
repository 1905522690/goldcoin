<?php if(!defined('WEB_ROOT')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金币市场专业委员会</title>
<link href="<?php echo WEB_APP; ?>style/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_APP; ?>style/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/jquery-1.7.1.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/js.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/fun.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/form.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/jquery.SuperSlide.2.1.1.js"></script>
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
<div class="sNav sNav_01">
  <?php MFInclude::regincludepage('./','about_left.html'); ?>
</div>
<div class="wal">
<!--wal-->
<div class="fl sideNav">
      <div class="title">关于我们</div>
      <div class="list">
         <?php MFInclude::regincludepage('./','about_left.html'); ?>
      </div>
</div>
<div class="fr w725">
     <div class="pageNow"><a href="<?php echo WEB_APP; ?>app.html">首页</a> > <a href="<?php echo WEB_APP; ?>about.html">关于我们</a> > <span>委员会简介</span></div>
     <!--内容-->
     <div class="about">
        <div class="imgDiv"><img src="<?php echo WEB_APP; ?>image/nimg430.png"/></div>
        <div class="content">
        中国银行间市场交易商协会金币市场专业委员会（以下简称：专委会）于2010年11月5日成立，是经民政部批准登记的民间社团组织，是中国银行间市场交易商协会根据业务开展的需要，在协会业务范围内设立的从事中国金币市场专业领域活动的专门机构。其主要职能是：推进金币市场的自律管理，维护公平透明、竞争有序的金币市场秩序，增进金币市场类会员之间的交流与合作，开展市场调研和理论研究，推动业务创新，促进中国金币市场健康发展。金币市场专业委员会的成立，标志着金银币行业的自律管理走上了制度化的轨道。<br />
        中国银行间市场交易商协会金币市场专业委员会（以下简称：专委会）于2010年11月5日成立，是经民政部批准登记的民间社团组织，是中国银行间市场交易商协会根据业务开展的需要，在协会业务范围内设立的从事中国金币市场专业领域活动的专门机构。其主要职能是：推进金币市场的自律管理，维护公平透明、竞争有序的金币市场秩序，增进金币市场类会员之间的交流与合作，开展市场调研和理论研究，推动业务创新，促进中国金币市场健康发展。金币市场专业委员会的成立，标志着金币行业的自律管理走上了制度化的轨道。
        </div>
     </div>
     <!--内容End-->
</div>
<div class="h50"></div>
<!--walEnd-->
</div>

<?php MFInclude::regincludepage('./','index_foot.html'); ?>
</body>
</html>
