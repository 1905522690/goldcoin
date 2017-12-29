<?php if(!defined('WEB_ROOT')) exit();?><?php if(empty(Action::$classqueue["Form"])){ require_once(file_exists("do/FormAct.class.php")?"do/FormAct.class.php":"~do/FormAct.class.php"); Action::$classqueue["Form"] = new FormAct(); }Action::$classqueue["Form"]->getinfo();Action::$classqueue["Form"]->getform();Action::$classqueue["Form"]->fieldplusjs();?>
<?php echo Template::$_tplval['FORMJS']; ?>
<div class="ui-state-default left-tree-top" style="margin-right:0;">
	<span><span class="mx-sysmenu"></span><?php echo Template::$_tplval['REXTITLE']; ?></span>
</div>
<div class="mx-toolbar">
	<a href="javascript:;" class="button" url="util/form/?app/ag/<?php echo Template::$_tplval['CONFINI']['proname']; ?>/tp/<?php echo Template::$_tplval['TP']; ?>.html"><span class="mx-sysmenu-tree"></span></a>
</div>
<div class="mx-formpanel" cutmargin="0,200">
	<form class="ajaxform" method="post" action="util/form/do/?Form-edit/ag/<?php echo Template::$_tplval['CONFINI']['proname']; ?>/tp/<?php echo Template::$_tplval['TP']; ?>.html">
	  <fieldset style="width:<?php echo Template::$_tplval['FIELDSETWIDTH']; ?>px;">
	  <textarea name="formDataInfo" class="mx-formdata"><?php echo Template::$_tplval['data']; ?></textarea>
	  <legend>修改<span class="mx-sysmenu-tree"></span></legend>
	  <?php echo Template::$_tplval['FIELDNODISPLAY']; ?>
	  <table border="0">
	  	<tr>
        <?php echo Template::$_tplval['FIELDPANEL']; ?>
		</tr>
		<tr>
          <td width="<?php echo Template::$_tplval['FIELDSETWIDTH']; ?>" class="mx-form-submit" colspan="<?php echo Template::$_tplval['FIELDCOLSPAN']; ?>">
		    <input type="submit" name="submitButton" value="提　交" />
		  </td>
        </tr>
      </table>
	  </fieldset>
	</form>
</div>