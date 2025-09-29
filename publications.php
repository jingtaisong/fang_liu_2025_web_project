<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$ul=4;
$action = trim($_GET['action']);
$sko = trim($_GET['sko']);
$cid = trim($_GET['cid']);
if($action==""){
	$result=mysqli_query($conn,"select * from moba_classt where parent_id=5 order by paixu asc ")or die();
	while($rows = mysqli_fetch_array($result))
	{$team_ul[] = $rows; }

$sql="select * from mobanqu_archives where ismake=1 ";
if($sko){$sql.=" and  title LIKE '%$sko%' "; }
if($cid){$sql.=" and  typeid= ".$cid.""; }
if($cid==""){$sql.=" and  typeid   in(".classid_he(5).")" ; }
$sql.=" order by paixu asc,id desc"; 
$result=mysqli_query($conn,$sql)or die();
while($rows = mysqli_fetch_array($result))
{$product_1i[] = $rows; }


include 'template/publications.html';
}//end


?>