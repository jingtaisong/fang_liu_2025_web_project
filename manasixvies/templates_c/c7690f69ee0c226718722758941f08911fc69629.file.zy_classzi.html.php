<?php /* Smarty version Smarty-3.0.8, created on 2025-07-22 17:00:09
         compiled from "./templates/zy_classzi.html" */ ?>
<?php /*%%SmartyHeaderCode:1841536816687f53190c6b87-43764347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7690f69ee0c226718722758941f08911fc69629' => 
    array (
      0 => './templates/zy_classzi.html',
      1 => 1750041664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841536816687f53190c6b87-43764347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/xadmin.css">
<script src="./lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="./js/xadmin.js"></script>
<!--[if lt IE 9]>
<script src="./js/html5.min.js"></script>
<script src="./js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="x-nav">
<span class="layui-breadcrumb"></span>
<a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:1px;float:right" onclick="location.reload()" title="刷新">
<i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md12">
<div class="layui-card">


<div class="layui-card-header">
<button class="layui-btn layui-btn-sm" onclick="xadmin.open('Add','zy_classzi_add.php?leiid=<?php echo $_smarty_tpl->getVariable('leiid')->value;?>
',1000,450)"><i class="layui-icon"></i>Add</button>
<button class="layui-btn layui-btn-danger layui-btn-sm" onClick="submitForm()"><i class="layui-icon"></i>Selete</button>
<button class="layui-btn layui-btn-sm" onClick="orderForm2()">Sort</button>
</div>
<div class="layui-card-body layui-table-body layui-table-main">
<table class="layui-table layui-form">
<thead>
<tr>
<th><input type="checkbox" lay-filter="checkall" name="" lay-skin="primary"></th>
<th>Classification name</th>

<th>Sort</th>
<th>Operate</th>
</tr>
</thead>
<tbody>
<form action="" method="post" id="myForm">
<input name="leiid" type="hidden" value="<?php echo $_smarty_tpl->getVariable('leiid')->value;?>
">
<?php  $_smarty_tpl->tpl_vars['prodcatt'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('prodcatlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['prodcatt']->key => $_smarty_tpl->tpl_vars['prodcatt']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['prodcatt']->key;
?> 
          <tr>
			<td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['prodcatt']->value['cat_name'];?>
" lay-skin="primary"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['prodcatt']->value['cat_name'];?>
&nbsp;</td>
            
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['prodcatt']->value['paixu'];?>
" size="7" >&nbsp;</td>
            <td align="center"></td>
          </tr>
          	<?php  $_smarty_tpl->tpl_vars['prodcaer'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('prodcatlister')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['prodcaer']->key => $_smarty_tpl->tpl_vars['prodcaer']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['prodcaer']->key;
?> 
          	<?php if ($_smarty_tpl->tpl_vars['prodcatt']->value['cat_id']==$_smarty_tpl->tpl_vars['prodcaer']->value['parent_id']){?>
              <tr>
                <td><input type="checkbox" name="mm[]" value="<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['cat_id'];?>
" lay-skin="primary"><?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['cat_id'];?>
</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├ <?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['cat_name'];?>
&nbsp;</td>
            	
                <td><input name="paixu[]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['paixu'];?>
" size="7" >&nbsp;</td>
                <td align="center">
                <a title="编辑" onclick="xadmin.open('编辑','zy_classzi_add.php?act=edit&cat_id=<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['cat_id'];?>
&leiid=<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['parent_id'];?>
',700,400)" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
                </a>
                <a title="删除" onClick="javascript:return del()" href="zy_classzi.php?act=del&cat_id=<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['cat_id'];?>
&annin=deled&leiid=<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['parent_id'];?>
">
                <i class="layui-icon">&#xe640;</i>
                </a>
                </td>
              </tr>
          	<?php  $_smarty_tpl->tpl_vars['prodcaer1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('prodcatlistsan')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['prodcaer1']->key => $_smarty_tpl->tpl_vars['prodcaer1']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['prodcaer1']->key;
?> 
          	<?php if ($_smarty_tpl->tpl_vars['prodcaer']->value['cat_id']==$_smarty_tpl->tpl_vars['prodcaer1']->value['parent_id']){?>
              <tr>
                <td><input type="checkbox" name="mm[]" value="<?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['cat_id'];?>
" lay-skin="primary">  <?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['cat_id'];?>
</td>
                <td><div class="lei_san" style="margin-left:50px;">├ <?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['cat_name'];?>
&nbsp;</div></td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['litpic1'];?>
" width="30" height="30"></td>
                <td><div class="lei_sadn"><input name="paixu[]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['paixu'];?>
" size="7" >&nbsp;</div></td>
                <td align="center">
                <a title="编辑" onclick="xadmin.open('编辑','zy_classzi_add.php?act=edit&cat_id=<?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['cat_id'];?>
&leiid=<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['parent_id'];?>
',700,400)" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
                </a>
                <a title="删除" onClick="javascript:return del()" href="zy_classzi.php?act=del&cat_id=<?php echo $_smarty_tpl->tpl_vars['prodcaer1']->value['cat_id'];?>
&annin=deled&leiid=<?php echo $_smarty_tpl->tpl_vars['prodcaer']->value['parent_id'];?>
">
                <i class="layui-icon">&#xe640;</i>
                </a></td>
              </tr>
            <?php }?>
        	<?php }} ?>
            
            <?php }?>
        	<?php }} ?>
        <?php }} ?>
</form>
</tbody>
</table>
</div>
<div class="layui-card-body ">
<div class="page">
</div>
</div>
</div>
</div>
</div>
</div> 
<script>
layui.use(['laydate','form'], function(){
var laydate = layui.laydate;
var form = layui.form;
form.on('checkbox(checkall)', function(data){
if(data.elem.checked){
$('tbody input').prop('checked',true);
}else{
$('tbody input').prop('checked',false);}
form.render('checkbox');
}); 
});	  
function del() {
	var msg = "您真的确定要删除吗";
	if (confirm(msg)==true){
	return true;
	}else{
	return false;
	}
} 
function submitForm() {
var msg = "您真的确定要删除吗!";
if (confirm(msg)==true){
	var myForm=document.getElementById("myForm");
	myForm.action = "zy_classzi.php?act=del&annin=deled"
	myForm.submit();
	return true;
	}else{
	return false;
	}
}
function orderForm() {
var myForm=document.getElementById("myForm");
myForm.action = "zy_classiz.php?act=order"
myForm.submit();}
function orderForm2() {
var myForm=document.getElementById("myForm");
myForm.action = "?act=del&annin=paixu"
myForm.submit();}
</script>
</body>
</html>