<?php
/**
 * 模板输出入口文件
 */
//设置项目路径
require "../Edw.php";
//实例化项目
$app = new App();
$t = $app->show("tpls",false);
//判断是否登录
PlugsUserPassAct::admindexpp();
$t->display();
?>