<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$ul=7;
$action = trim($_GET['action']);
$cid = trim($_GET['cid']);
if($action==""){


$result=mysqli_query($conn,"select * from moba_classt where parent_id=9 order by paixu asc ,cat_id desc ")or die();
while($rows = mysqli_fetch_array($result))
{$team_ul[] = $rows; }

if($cid==""){
$result=mysqli_query($conn,"select * from moba_classt where parent_id=9 order by paixu asc ,cat_id desc  LIMIT 1")or die();
$rows=mysqli_fetch_array($result);
$cid=$rows['cat_id'];
$name=$rows['cat_name'];
$body=$rows['body'];
}else{
verify_id($cid);	
$result=mysqli_query($conn,"select * from moba_classt where parent_id=9 and cat_id=".$cid." order by paixu asc ,cat_id desc  LIMIT 1")or die();
$rows=mysqli_fetch_array($result);
$cid=$rows['cat_id'];
$name=$rows['cat_name'];
$body=$rows['body'];}
if($cid==""){ exit('Invalid arguments!');die();}

include 'template/teaching.html';
}//end


?>