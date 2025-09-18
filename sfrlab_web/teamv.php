<?php
header("Content-Type:text/html;charset=utf-8"); 
define('IN_PHPWeb', true); 
include('Include/config_db.php');
include("Include/seo.php");
$id = trim($_GET['id']);
if($action==""){
$ul=3;
$bid=40;



if ($id!=""){
verify_id($id);	
$result=mysqli_query($conn,"select * from mobanqu_archives where  id=".$id."  and ismake=1 order by id asc LIMIT 1")or die();}
$rows=mysqli_fetch_array($result);
$titlet=$rows['title'];$body=$rows['body'];$bodyy=$rows['bodyy'];$litpic=$rows['litpic'];$typeid=$rows['typeid'];
$pic1=$rows['pic1'];$pic2=$rows['pic2'];$pic3=$rows['pic31'];$pic4=$rows['pic4'];$pic5=$rows['pic5'];
$shorttitle=$rows['shorttitle'];$keywords=$rows['keywords'];$description=$rows['description'];$pubdate=$rows['pubdate'];$idd=$rows['id'];
$ftitle=$rows['ftitle'];$ftitle1=$rows['ftitle1'];$ftitle2=$rows['ftitle2'];$writer=$rows['writer'];$product_album=$rows['product_album'];
if($titlet==""){ exit('Invalid arguments!');die();}
if($shorttitle==""){$shorttitle=$web_titlel;}

$result=mysqli_query($conn,"select * from mobanqu_archives where  typeid =1 and ismake=1 order by paixu asc,id desc ")or die();
while($rows = mysqli_fetch_array($result))
{$news_list[] = $rows; }


include 'template/teamv.html';
}//end


?>