<?php if(!defined('WEB_ROOT')) exit();?><style type="text/css">
.apps-title { height:30px; line-height:30px; margin:10px 0; padding:0; border-bottom:1px solid #CCCCCC;}
/* 图标设置 */
.icon { border:1px solid #EAEAEA; margin:0 8px 8px 0; display:block; text-align:center; width:300px; height:100px; float:left; }
.icon:hover { border-bottom:1px solid #CCCCCC; border-right:1px solid #CCCCCC; background:#F5F5F5; }
.icon .left	{ float:left; width:100px; }
.icon .left	img { margin:5px; cursor:pointer; }
.icon .right { float:left; width:180px; margin:5px; }
.icon .right span { display:block; height:30px; line-height:30px; margin:5px 0 0 0; cursor:pointer; }
.icon .right div { margin:0; padding:0; text-align:left; cursor:pointer; }
</style>
<div class="ui-state-default left-tree-top" style="margin-right:0;">
	<span class="mx-sysmenu"></span>
</div>
<?php if(empty(Action::$classqueue["Apps"])){ require_once(file_exists("do/AppsAct.class.php")?"do/AppsAct.class.php":"~do/AppsAct.class.php"); Action::$classqueue["Apps"] = new AppsAct(); }Action::$classqueue["Apps"]->getapps();?>
<?php echo Template::$_tplval['iconstr']; ?>

<script type="text/javascript">
//设置跳转到当前页的变量
$.mx.setparam('fieldparenturl','sys/apps/?app.html');
</script>