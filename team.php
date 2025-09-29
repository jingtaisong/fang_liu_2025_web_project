<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$ul=3;
$action = trim($_GET['action']);
if($action==""){
$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =4 and ismake=1 order by paixu asc,id desc ")or die();
while($rows = mysqli_fetch_array($result))
{$team_list[] = $rows; }

$result=mysqli_query($conn,"select * from moba_classt where parent_id=3 order by paixu asc ")or die();
while($rows = mysqli_fetch_array($result))
{$team_ul[] = $rows; }

include 'template/team.html';
}//end


?>