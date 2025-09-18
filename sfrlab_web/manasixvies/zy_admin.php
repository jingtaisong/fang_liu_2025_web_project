<?php
define('IN_PHPWeb', true);
include("./zy_smarty.php");
include("./zy_quanxian.php");
if (empty($_REQUEST['act']))
{$_REQUEST['act'] = 'info';}else{$_REQUEST['act'] = trim($_REQUEST['act']);}
if ($_REQUEST['act'] == 'info'){		
$sql="select user_id,user_name,email,add_time from moba_admin_user order by user_id asc"; 
$query=mysqli_query($conn,$sql); 
while($rows=mysqli_fetch_array($query))	 
{ $adminlist[]=array("user_id"=>$rows[user_id],"user_name"=>$rows[user_name],"email"=>$rows[email],"add_time"=>$rows[add_time]); } 
$smarty->assign("adminlist",$adminlist); 
$smarty->display("zy_admin.html");}
if($_REQUEST['act'] == 'del'){
$user_id=isset($_GET['user_id']) ? trim($_GET['user_id']) : '';
if (empty($user_id))
{echo('<script>alert("Empty value! Click here");history.go(-1);</script>');}
else{
$sql="delete from moba_admin_user where user_id=".$user_id."";
mysqli_query($conn,$sql);
ShowMsg("Delete command executed successfully","zy_admin.php");}
}
include("./zy_close.php");///close
?>
