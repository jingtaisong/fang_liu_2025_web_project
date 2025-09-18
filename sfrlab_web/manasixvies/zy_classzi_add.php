<?php
define('IN_PHPWeb', true);
include("./zy_smarty.php");//Load Smarty. The path of Smarty.class.php must be added, otherwise it cannot be executed.
include("./zy_quanxian.php");
if (empty($_REQUEST['act'])){
$_REQUEST['act'] = 'info';
}else{
$_REQUEST['act'] = trim($_REQUEST['act']);}
$leiid=trim($_GET['leiid']);
if($_REQUEST['act']=='info'){
$sql="select cat_id,cat_name,parent_id from moba_classt where parent_id='0'  and cat_id=".$leiid." order by cat_id asc"; 
$query=mysqli_query($conn,$sql); 
while($rows=mysqli_fetch_array($query)) { 
$catidlist[]=$rows;} 
$sql="select cat_id,cat_name,parent_id from moba_classt where parent_id=".$leiid." order by cat_id asc"; 
$query=mysqli_query($conn,$sql); 
while($rows=mysqli_fetch_array($query)) { 
$catidlister[]=$rows; } 
include("./templates/zy_classzi_add.html");
mysql_close();}

if($_REQUEST['act']=="edit"){
$cat_id=isset($_GET['cat_id']) ? trim($_GET['cat_id']) : '';
$leiid=trim($_GET['leiid']);
if(empty($cat_id)){
echo('<script>alert("空置！点击此处");history.go(-1);</script>');}
else{
$sqld="select cat_id,cat_name,parent_id from moba_classt where parent_id='0'  and cat_id=".$leiid." order by cat_id asc"; 
$query=mysqli_query($conn,$sqld); 
while($rows=mysqli_fetch_array($query)) { 
$catidlist[]=$rows;} 
$sql="select * from moba_classt where cat_id=".$cat_id." "; 
$res=mysqli_query($conn,$sql);
$rws=mysqli_fetch_array($res);
$cat_name=$rws['cat_name'];
$parent_id=$rws['parent_id'];
$isabout=$rws['isabout'];
$body=$rws['body'];
$body1=$rws['body1'];
$ispic=$rws['ispic'];
$litpic1=$rws['litpic1'];
$litpic2=$rws['litpic2'];
$isclass=$rws['isclass'];}
include("./templates/zy_classzi_add.html");
mysql_close();}
?>