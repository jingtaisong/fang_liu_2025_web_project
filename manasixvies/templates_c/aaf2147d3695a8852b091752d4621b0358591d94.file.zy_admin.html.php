<?php /* Smarty version Smarty-3.0.8, created on 2025-06-25 11:09:19
         compiled from "./templates/zy_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:1187034890685b685f93c501-91613932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf2147d3695a8852b091752d4621b0358591d94' => 
    array (
      0 => './templates/zy_admin.html',
      1 => 1750039986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187034890685b685f93c501-91613932',
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
<div class="layui-card-body ">

</div>
<div class="layui-card-header">
<button class="layui-btn layui-btn-sm" onclick="xadmin.open('添加用户','./zy_admin_add.php',600,400)"><i class="layui-icon"></i>Add</button>
</div>
<div class="layui-card-body layui-table-body layui-table-main">
<table class="layui-table layui-form">
<thead>
<tr>
<th>
ID
</th>
<th>account number</th>
<th>Email</th>
<th>Time</th>
<th>Operate</th></tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['adminlit'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('adminlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['adminlit']->key => $_smarty_tpl->tpl_vars['adminlit']->value){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['adminlit']->value['user_id'];?>
&nbsp;</td>
<td><?php echo $_smarty_tpl->tpl_vars['adminlit']->value['user_name'];?>
&nbsp;</td>
<td><?php echo $_smarty_tpl->tpl_vars['adminlit']->value['email'];?>
&nbsp;</td>
<td><?php echo $_smarty_tpl->tpl_vars['adminlit']->value['add_time'];?>
&nbsp;</td>
<td class="td-manage">
<a title="编辑" onclick="xadmin.open('编辑','zy_admin_add.php?act=edit&user_id=<?php echo $_smarty_tpl->tpl_vars['adminlit']->value['user_id'];?>
',600,400)" href="javascript:;">
<i class="layui-icon">&#xe642;</i>
</a>
<a title="删除" href="zy_admin.php?act=del&user_id=<?php echo $_smarty_tpl->tpl_vars['adminlit']->value['user_id'];?>
">
<i class="layui-icon">&#xe640;</i>
</a>
</td>
</tr>
<?php }} ?>
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
</body>
</html>