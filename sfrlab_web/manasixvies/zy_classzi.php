<?php
define('IN_PHPWeb', true);
include("./zy_smarty.php");
include("./zy_quanxian.php");
include("../Include/page.php");
if (empty($_REQUEST['act'])){
$_REQUEST['act'] = 'info';
}else{
$_REQUEST['act'] = trim($_REQUEST['act']);}
$leiid=trim($_GET['leiid']);
//if($leiid==""){header("location:zy_com.php?zy=right");die();}
if ($_REQUEST['act'] == 'info'){
$sql="select cat_id,cat_name,parent_id,paixu,isabout,ispic,isclass,litpic1 from moba_classt  where parent_id='0'  and cat_id=".$leiid."  order by paixu,cat_id asc"; 
$query=mysqli_query($conn,$sql)or die();
while($rows=mysqli_fetch_array($query)) { 
$prodcatlist[]=array("cat_id"=>$rows[cat_id],"cat_name"=>$rows[cat_name],"parent_id"=>$rows[parent_id],"litpic1"=>$rows[litpic1],"paixu"=>$rows[paixu],"isabout"=>$rows[isabout],"ispic"=>$rows[ispic],"isclass"=>$rows[isclass]); } 
$smarty->assign("prodcatlist",$prodcatlist); 

$sql="select cat_id,cat_name,parent_id,paixu,isabout,ispic,isclass,litpic1  from moba_classt where parent_id =".$leiid." order by paixu,cat_id asc"; 
$query=mysqli_query($conn,$sql)or die();
while($rows=mysqli_fetch_array($query)) { 
$prodcatlister[]=array("cat_id"=>$rows[cat_id],"cat_name"=>$rows[cat_name],"parent_id"=>$rows[parent_id],"litpic1"=>$rows[litpic1],"paixu"=>$rows[paixu],"isabout"=>$rows[isabout],"ispic"=>$rows[ispic],"isclass"=>$rows[isclass]); } 
$smarty->assign("prodcatlister",$prodcatlister); 

$sql="select cat_id,cat_name,parent_id,paixu,isabout,ispic,isclass,litpic1  from moba_classt  order by paixu,cat_id asc"; 
$query=mysqli_query($conn,$sql)or die();
while($rows=mysqli_fetch_array($query)) { 
$prodcatlistsan[]=array("cat_id"=>$rows[cat_id],"cat_name"=>$rows[cat_name],"parent_id"=>$rows[parent_id],"litpic1"=>$rows[litpic1],"paixu"=>$rows[paixu],"isabout"=>$rows[isabout],"ispic"=>$rows[ispic],"isclass"=>$rows[isclass]); } 
$smarty->assign("prodcatlistsan",$prodcatlistsan); 

$smarty->assign('leiid',  $leiid);
$smarty->display("zy_classzi.html");
mysql_close();}

if($_REQUEST['act'] == 'del'){
$paixu = $_POST["paixu"];
$paren_id = $_POST["paren_id"];
$annin = $_REQUEST["annin"];
$leiid = $_REQUEST["leiid"];
$mm = $_POST["mm"];
if ($mm!=""){
$cat_id =implode(",",$mm);}
else{
$cat_id=isset($_GET['cat_id']) ? trim($_GET['cat_id']) : '';};
if (empty($cat_id)){
echo('<script>alert("Empty value! Click here");history.go(-1);</script>');}
elseif($annin=="deled"){
$sqsld = "select * from moba_classt where parent_id in(".$cat_id.")";
$resd=mysqli_query($conn,$sqsld)or die();
if($resu = mysqli_fetch_array($resd)){
die('<script>alert("Has sub-categories, top-level categories cannot be selected");history.go(-1);</script>');
};///cannot delete if it has subcategories
$sql="delete from moba_classt where cat_id in(".$cat_id.")";
mysqli_query($conn,$sql)or die();
ShowMsg("Delete command executed successfully","zy_classzi.php?leiid=".$leiid."");
mysql_close();
}elseif($annin=="paixu"){
for($i=0,$size=count($paixu);$i<$size;$i++){
$sql="update moba_classt set paixu='$paixu[$i]' where cat_id ='$mm[$i]'";
mysqli_query($conn,$sql)or die();}
ShowMsg("Command executed successfully","zy_classzi.php?leiid=".$leiid."");
mysql_close();}
else{
die('<script>alert("Please click an option");history.go(-1);</script>');}
}
/////////////
include("./zy_close.php");///Close
?>
