<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$ul=6;
$action = trim($_GET['action']);
if($action==""){
$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =7 and ismake=1 order by paixu asc,id desc")or die();
while($rows = mysqli_fetch_array($result))
{$pic_list[] = $rows; }
$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =6 and ismake=1 order by paixu asc,id desc")or die();
while($rows = mysqli_fetch_array($result))
{$news_list[] = $rows; }
include 'template/facilities.html';
}//end


?>