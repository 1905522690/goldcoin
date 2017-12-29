<?php if(!defined('WEB_ROOT')) exit();?><?php session_start(); ?>
<?php if(empty(Action::$classqueue["UserLogin"])){ require_once(file_exists("do/UserLoginAct.class.php")?"do/UserLoginAct.class.php":"~do/UserLoginAct.class.php"); Action::$classqueue["UserLogin"] = new UserLoginAct(); }Action::$classqueue["UserLogin"]->getuser();?>

<div class="wal">
    <a href="<?php echo WEB_APP; ?>app.html" class="logo"><img src="<?php echo WEB_APP; ?>image/logo.png"/></a>
    <div class="topBtn">
        <ul>
          <?php if(Template::$_tplval['IMSSITEUSER']['id']==""){?>
          <li><a href="<?php echo WEB_APP; ?>?login.html">登录</a></li>
      <?php }else{ ?>
      <?php if (Template::$_tplval["IMSSITEUSER"]["member_num"] != ""){ ?>
      <li><a href="<?php echo WEB_APP; ?>?memberindex.html"><?php echo Template::$_tplval['IMSSITEUSER']['member_num']; ?></a></li>
      <?php }else{ ?>
      <li><a href="<?php echo WEB_APP; ?>?memberindex.html"><?php echo Template::$_tplval['IMSSITEUSER']['user']; ?></a></li>
      <?php } ?>   
      <li><a href="<?php echo WEB_APP; ?>do/?UserLogin-logout.html.html">退出</a></li>
      <?php } ?>
          <li><a href="">举报入口</a></li>
          <li class="li_01"><div>选择语言</div>
             <dl>
               <dd><a href="">中文</a></dd>
               <dd><a href="">繁体</a></dd>
             </dl>
          </li>
        </ul>
    </div>
    <div class="nav">
      <ul>
        <li><a href="<?php echo WEB_APP; ?>?app.html" <?php if($_GET['PARENT_TPL_FILE']=="app.html"){ ?>
        class="aNow" 
        <?php } ?> >首页</a></li>

        <li><a href="<?php echo WEB_APP; ?>?about.html" <?php if($_GET['PARENT_TPL_FILE']=="about.html" || $_GET['PARENT_TPL_FILE']=="group.html" || $_GET['PARENT_TPL_FILE']=="Leader.html" || $_GET['PARENT_TPL_FILE']=="Leader2.html" || $_GET['PARENT_TPL_FILE']=="Leader3.html" || $_GET['PARENT_TPL_FILE']=="Leader4.html" ){ ?>  class="aNow" <?php } ?> 
        >关于我们</a></li>

        <li><a href="<?php echo WEB_APP; ?>?notice.html" <?php if($_GET['PARENT_TPL_FILE']=="notice.html" || $_GET['PARENT_TPL_FILE']=="news.html" || $_GET['PARENT_TPL_FILE']=="news3.html" || $_GET['PARENT_TPL_FILE']=="news4.html" || $_GET['PARENT_TPL_FILE']=="newShow.html"){ ?>  class="aNow" <?php } ?> 
        >行业动态</a></li>
        
        <li><a href="<?php echo WEB_APP; ?>?guide.html" <?php if($_GET['PARENT_TPL_FILE']=="guide.html" || $_GET['PARENT_TPL_FILE']=="process.html" || $_GET['PARENT_TPL_FILE']=="process.html" || $_GET['PARENT_TPL_FILE']=="Convention.html" || $_GET['PARENT_TPL_FILE']=="Convention2.html" || $_GET['PARENT_TPL_FILE']=="Convention3.html"){ ?>  class="aNow" <?php } ?> 
        >规章制度</a></li>

        <li><a href="<?php echo WEB_APP; ?>?member.html" <?php if($_GET['PARENT_TPL_FILE']=="member.html"){ ?>
        class="aNow" 
        <?php } ?> >会员风采</a></li>

        
        <?php if(Template::$_tplval['IMSSITEUSER']['id']==""){ ?>
        <li><a href="<?php echo WEB_APP; ?>?login.html">会员服务</a></li>
    
    <?php }else{ ?>
    <?php $username = $IMSSITEUSER.user ?>
      <?php if (Template::$_tplval["IMSSITEUSER"]["member_num"] != ""){ ?>
      <li><a href="<?php echo WEB_APP; ?>?memberindex.html">会员服务</a></li>
      <?php }else{ ?>
      <li><a href="<?php echo WEB_APP; ?>?memberindex1.html">会员服务</a></li>
      <?php } ?>
    <?php } ?>
    
        <li><a href="<?php echo WEB_APP; ?>?knowledge.html" <?php if($_GET['PARENT_TPL_FILE']=="knowledge.html"){ ?>
        class="aNow" 
        <?php } ?> >培训学院</a></li>

        <li><a href="<?php echo WEB_APP; ?>?contact.html" <?php if($_GET['PARENT_TPL_FILE']=="contact.html"){ ?>
        class="aNow" 
        <?php } ?> >联系我们</a></li>
      </ul>
    </div>
</div>