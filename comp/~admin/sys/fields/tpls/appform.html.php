<?php if(!defined('WEB_ROOT')) exit();?><?php if(empty(Action::$classqueue["Fields"])){ require_once(file_exists("do/FieldsAct.class.php")?"do/FieldsAct.class.php":"~do/FieldsAct.class.php"); Action::$classqueue["Fields"] = new FieldsAct(); }Action::$classqueue["Fields"]->getlivs();Action::$classqueue["Fields"]->getformatr();?>
<div class="ui-state-default left-tree-top" style="margin-right:0;">
	<span><span class="mx-sysmenu-tree"></span> > <?php echo Template::$_tplval['info']['livname']; ?> > 表单属性</span>
</div>
<div class="mx-toolbar">
	<a href="javascript:;" class="button" brurl="sys/fields/?app/id/<?php echo Template::$_tplval['info']['id']; ?>.html"><?php echo Template::$_tplval['info']['livname']; ?></a>
</div>
<div class="mx-formpanel">
	<form class="ajaxform" method="post" action="sys/fields/do/?Fields-formedit/id/<?php echo Template::$_tplval['info']['id']; ?>.html">
	  <fieldset style="width:300px;">
	  <legend>修改表单属性</legend>
	  <textarea name="formDataInfo" class="mx-formdata"><?php echo Template::$_tplval['formdata']; ?></textarea>
	  <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="300">
		    <label>实例中文名称</label>
			<input type="text" name="appnames" disabled="disabled" value="<?php echo Template::$_tplval['info']['livname']; ?>" />
			<input type="hidden" name="appid" value="<?php echo Template::$_tplval['info']['id']; ?>" />
		  </td>
		</tr>
		<tr>
          <td width="300">
		  	<label>表单宽</label>
			<input type="text" name="width" dataType="Number" itip="表单宽只能填写数字" value="<?php echo Template::$_tplval['form']['width']; ?>"/>
		  </td>
        </tr>
        <tr>
          <td width="300">
		    <label>表单列</label>
			<input type="text" name="colspan" dataType="Number" itip="表单列只能填写数字" value="<?php echo Template::$_tplval['form']['colspan']; ?>"/>
		  </td>
        </tr>
		<tr>
          <td width="300">
		    <label>列表条数</label>
			<select name="rownum" id="sys-field-appformrownum">
				<option value="10">10条</option>
				<option value="15">15条</option>
				<option value="20">20条</option>
				<option value="25">25条</option>
				<option value="40">40条</option>
				<option value="60">60条</option>
				<option value="80">80条</option>
				<option value="100">100条</option>
			</select>
		  </td>
        </tr>
		<tr>
          <td width="300" class="mx-form-submit">
		    <input type="submit" name="submitButton" value="提　交" />
		  </td>
        </tr>
      </table>
	  </fieldset>
	</form>
</div>
<script type="text/javascript">
$(function(){
	var osel = document.getElementById("sys-field-appformrownum");
	for(var i=0;i<osel.length;i++){
		if(osel[i].value == '<?php echo Template::$_tplval['form']['rownum']; ?>') osel[i].selected = true;
	}
});
</script>