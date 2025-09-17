<?php
define('IN_PHPWeb', true);
include("./zy_smarty.php");//这里的Smarty.class.php必须添上路径，否则无法执行  //载入Smarty
include("./zy_quanxian.php");
if (empty($_REQUEST['act'])){
$_REQUEST['act'] = 'info';
}else{
$_REQUEST['act'] = trim($_REQUEST['act']);}
if ($_REQUEST['act'] == 'info'){
include 'templates/zy_admin_add.html';}

if($_REQUEST['act']=="edit"){
$user_id=isset($_GET['user_id']) ? trim($_GET['user_id']) : '';
if(empty($user_id)){
echo('<script>alert("空置！点击此处");history.go(-1);</script>');}
else{
$sql="select * from moba_admin_user where user_id=".$user_id." "; 
$res=mysqli_query($conn,$sql);
$rws=mysqli_fetch_array($res);
$user_name=$rws['user_name'];
$password=$rws['password'];
$email=$rws['email'];
$add_time=$rws['add_time'];
$user_id=$rws['user_id'];}
include 'templates/zy_admin_edit.html';
}
include("./zy_close.php");///关闭
?>