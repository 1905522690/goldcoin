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
<!-- 分页 -->
<!-- <script language="javascript" type="text/javascript" src="<?php echo WEB_APP; ?>script/ims.pager.js"></script> -->
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

<div class="wal tabContentDiv-1">
<!--wal-->
     <div class="pageNow"><a href="">首页</a> > <a href="">会员风采</a>
          <div class="form">
          <input name="keyword" id="keyword" type="text" class="input1 input_hover" <?php if($_GET["keyword"]==""){ ?>value="请输入会员名称"<?php }else{ ?>value="<?php echo $_GET["keyword"];?>"<?php } ?> title="请输入会员名称" />
          <input type="button" class="btn1" id="sub" />
          </div>
     </div>

     <div class="memberNav-1 tab">
       <ul>
        <li class="liNow-1"><a href="javascript:;" title="">最新更新</a></li>
        <li><a href="javascript:;" title="">活跃度</a></li>
      </ul>
     </div>
     <!--内容-->
     <div class="member tabContent">
        <ul>
        <?php $_from = TagAttrLoop::emslist('cn_users','id desc','','20','','','','',''); if (!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }if (count($_from)){foreach($_from as $key=>Template::$_tplval['list']){ ?>
          <li>
             <div class="imgDiv"><a href="<?php echo WEB_APP; ?>?hyfcintroduction/u/<?php echo Template::$_tplval['list']['id']; ?>.html"><img src="<?php echo Template::$_tplval['list']['img_path']; ?>" width="182" height="112"/></a></div>
             <div class="name"><a href=""><?php echo Template::$_tplval['list']['company']; ?></a></div>
          </li>
        <?php }} unset($_from);?>
        </ul>
        <span class="clear_f"></span>
     </div>
     <!-- 分页 -->
     <!-- <div class="pageNum">
       <div id="page_style"></div>
      <div class="ims_pager" mod="#page_style:1" style="display:none;"><?php echo Template::$_tplval['pagejson']; ?></div>
     </div> -->
     <!--内容End-->
<div class="h50"></div>
<!--walEnd-->
</div>
<?php MFInclude::regincludepage('./','index_foot.html'); ?>
<script>
  $('.tabContentDiv-1').find('.tabContent:first').show();
  $('.tab').each(function(i){
    $(this).find('li').each(function(ii){
      $(this).click(
      function(){
        $('.tab').eq(i).find('li').removeClass('liNow-1');
        $(this).addClass('liNow-1');
        $('.tabContentDiv-1').eq(i).find('.tabContent').hide();
        $('.tabContentDiv-1').eq(i).find('.tabContent').eq(ii).show();
        } 
        )
      })
    })
</script>
<script type="text/javascript">
$(function(){
  $('#keyword').bind('keypress',function(event){
            if(event.keyCode == "13")    
            {
        var keyword = $("#keyword").val();
        var url = "<?php echo WEB_APP;?>?member/keyword/"+encodeURI(keyword)+".html";     
        if(keyword=="请输入会员名称" || keyword=="")
        {
          alert("请输入会员名称");
        }else{
        window.location.href=url;
        }
            }
     });
  //
  $("#sub").click(function(){     
      var keyword = $("#keyword").val();
      var url = "<?php echo WEB_APP;?>?member/keyword/"+encodeURI(keyword)+".html";     
      if(keyword=="请输入会员名称" || keyword=="")
      {
        alert("请输入会员名称");
      }else{
        window.location.href=url;
      }
      
  }); 
  
})
</script>
</body>
</html>
