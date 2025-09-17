<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$ul=1;
$action = trim($_GET['action']);
if($action==""){
$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =1 and ismake=1 order by paixu asc,id desc  LIMIT 4")or die();
while($rows = mysqli_fetch_array($result))
{$rese_list[] = $rows; }
	
$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid   in(".classid_he(5).")  and ismake=1  order by paixu asc,id desc  LIMIT 4")or die();
while($rows = mysqli_fetch_array($result))
{$product_1i[] = $rows; }


$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =6 and ismake=1 order by paixu asc,id desc  LIMIT 4")or die();
while($rows = mysqli_fetch_array($result))
{$news_list[] = $rows; }

include 'template/indexon.html';
}//end


?>