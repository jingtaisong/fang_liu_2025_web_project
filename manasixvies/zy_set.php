<?php
define('IN_PHPWeb', true);
include("./zy_smarty.php");//这里的Smarty.class.php必须添上路径，否则无法执行  //载入Smarty
include("./zy_quanxian.php");
include('../Include/uploadfile1.php');//图片
include('./zy_clear.php');//图片
if (empty($_REQUEST['act'])){
$_REQUEST['act'] = 'edit';}else{
$_REQUEST['act'] = trim($_REQUEST['act']);}
if($_REQUEST['act']=="edit"){
$sql="select * from moba_set where we_id=1 "; 
$res=mysqli_query($conn,$sql);
$rws=mysqli_fetch_array($res);
$we_con=$rws['we_con'];
$we_gjz=$rws['we_gjz'];
$we_gjzms=$rws['we_gjzms'];
$we_url=$rws['we_url'];
$wei_yejiao=$rws['wei_yejiao'];
$web_titlel=$rws['web_titlel'];
$web_name=$rws['web_name'];
$we_gjzmsw1=$rws['goods_img'];
$m_fahuo=$rws['m_fahuo'];
$m_down=$rws['m_down'];
$we_gjzms2=$rws['we_gjzms2'];
$we_gjzms3=$rws['we_gjzms3'];
$we_gjzms4=$rws['we_gjzms4'];
$we_gjzms5=$rws['we_gjzms5'];
$we_gjzms6=$rws['we_gjzms6'];
$we_gjzms7=$rws['we_gjzms7'];
$we_gjzms8=$rws['we_gjzms8'];
$we_gjzms9=$rws['we_gjzms9'];
$we_gjzms10=$rws['we_gjzms10'];
$we_gjzms11=$rws['we_gjzms11'];
$we_gjzms12=$rws['we_gjzms12'];
$we_gjzms13=$rws['we_gjzms13'];
$checkd=$rws['checkd'];
include 'templates/zy_set.html';
}
if($_REQUEST['act']=="admin_edit"){
$web_titlel=isset($_POST['web_titlel']) ? trim($_POST['web_titlel']) : '';
$web_name=isset($_POST['web_name']) ? trim($_POST['web_name']) : '';
$m_fahuo=isset($_POST['m_fahuo']) ? trim($_POST['m_fahuo']) : '';
$m_down=isset($_POST['m_down']) ? trim($_POST['m_down']) : '';
$wei_yejiao=isset($_POST['wei_yejiao']) ? trim($_POST['wei_yejiao']) : '';
$we_url=isset($_POST['we_url']) ? trim($_POST['we_url']) : '';
$we_gjzms=$_POST['we_gjzms'];
$we_gjz=isset($_POST['we_gjz']) ? trim($_POST['we_gjz']) : '';
$we_con=isset($_POST['we_con']) ? trim($_POST['we_con']) : '';
$we_gjzms2=$_POST['we_gjzms2'];
$we_gjzms3=$_POST['we_gjzms3'];
$we_gjzms4=$_POST['we_gjzms4'];
$we_gjzms5=$_POST['we_gjzms5'];
$we_gjzms6=$_POST['we_gjzms6'];
$we_gjzms7=$_POST['we_gjzms7'];
$we_gjzms8=$_POST['we_gjzms8'];
$we_gjzms9=$_POST['we_gjzms9'];
$we_gjzms10=$_POST['we_gjzms10'];
$we_gjzms11=$_POST['we_gjzms11'];
$we_gjzms12=$_POST['we_gjzms12'];
$we_gjzms13=$_POST['we_gjzms13'];
$checkd=$_POST['checkd'];
if(empty($web_titlel) || empty($we_gjz) ){
echo('<script>alert("参数错误！点击此处");history.go(-1);</script>');}
else{
$sql="update moba_set set checkd='$checkd',web_name='$web_name',web_titlel='$web_titlel',wei_yejiao='$wei_yejiao',we_url='$we_url',we_gjzms='$we_gjzms',we_gjz='$we_gjz',m_fahuo='$m_fahuo',m_down='$m_down',goods_img='$upfile1',we_gjzms2='$we_gjzms2',we_gjzms3='$upfil3',we_gjzms4='$we_gjzms4',we_gjzms5='$we_gjzms5',we_gjzms6='$we_gjzms6',we_gjzms7='$upfil4',we_gjzms8='$we_gjzms8',we_gjzms9='$we_gjzms9',we_gjzms10='$we_gjzms10',we_gjzms11='$we_gjzms11',we_gjzms12='$we_gjzms12',we_gjzms13='$we_gjzms13' where we_id=1 ";

mysqli_query($conn,$sql);
ShowMsg("修改命令执行完毕","zy_set.php");}
}
include("./zy_close.php");///关闭
?>
