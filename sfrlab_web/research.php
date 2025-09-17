<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$ul=2;
$action = trim($_GET['action']);
if($action==""){
$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =1 and ismake=1 order by paixu asc,id desc ")or die();
while($rows = mysqli_fetch_array($result))
{$rese_list[] = $rows; }
include 'template/research.html';
}//end


?>