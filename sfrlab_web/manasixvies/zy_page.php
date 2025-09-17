<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/xadmin.css">
<script src="./lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="./js/xadmin.js"></script>
<!--[if lt IE 9]>
<script src="./js/html5.min.js"></script>
<script src="./js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/qrcode.min.js"></script>
</head>
<?php
define('IN_PHPWeb', true);
$ul_id="9";
include('../Include/config_db.php');
include("./zy_quanxian.php");
$leiid=$_GET['leiid']; 
$keywords=$_GET['keyword']?$_GET['keyword']:''; 
if($_REQUEST['act'] == 'del'){
$id=isset($_GET['id']) ? trim($_GET['id']) : '';
$leiid = $_GET["leiid"];
$page = $_GET["page"];
if (empty($id)){
echo('<script>alert("Please select a record");history.go(-1);</script>');}
else{$sql="delete from mobanqu_archives where id=".$id."";
mysqli_query($conn,$sql);
ShowMsg("Delete command executed successfully","zy_page.php?leiid=".$leiid."&page=".$page."");}}

if($_REQUEST['act'] == 'delall'){
$mm = $_POST["id"];
$leiid = $_POST["leiid"];
$page = $_POST["page"];
if ($mm!=""){$con_id =implode(",",$mm);};
if (empty($con_id)){
echo('<script>alert("Please select a record");history.go(-1);</script>');}
$sql="delete from mobanqu_archives where id in(".$con_id.")";
mysqli_query($conn,$sql);
ShowMsg("Command execution completed","zy_page.php?leiid=".$leiid."&page=".$page."");
}
if($_REQUEST['act'] == 'order'){
$mm = $_POST["id"];
$leiid = $_POST["leiid"];
$page = $_POST["page"];
if ($mm!=""){$con_id =implode(",",$mm);};
if (empty($con_id)){
echo('<script>alert("Please select a record");history.go(-1);</script>');}
for($i=0,$size=count($mm);$i<$size;$i++){
$sql="update mobanqu_archives set ismake='2' where id ='$mm[$i]'";
mysqli_query($conn,$sql);}
ShowMsg("Command execution completed","zy_page.php?leiid=".$leiid."&page=".$page."");
}

if($_REQUEST['act'] == 'orderk'){
$mm = $_POST["id"];
$leiid = $_POST["leiid"];
$page = $_POST["page"];
if ($mm!=""){$con_id =implode(",",$mm);};
if (empty($con_id)){
echo('<script>alert("Please select a record");history.go(-1);</script>');}
for($i=0,$size=count($mm);$i<$size;$i++){
$sql="update mobanqu_archives set ismake='1' where id ='$mm[$i]'";
mysqli_query($conn,$sql);}
ShowMsg("Command execution completed","zy_page.php?leiid=".$leiid."&page=".$page."");}

if($_REQUEST['act'] == 'orderxu'){
$mm = $_POST["id"];
$paixu = $_POST["paixu"];
$leiid = $_POST["leiid"];
$page = $_POST["page"];
if ($paixu!=""){$paixu_id =implode(",",$paixu);}
else{$paixu_id=isset($_POST['paixu']) ? trim($_POST['paixu']) : '';};
if ($mm!=""){$con_id =implode(",",$mm);};
if (empty($con_id)){
echo('<script>alert("Please select a record");history.go(-1);</script>');}
for($i=0,$size=count($paixu);$i<$size;$i++){
$sql="update mobanqu_archives set paixu='$paixu[$i]' where id ='$mm[$i]'";
mysqli_query($conn,$sql);}
ShowMsg("Command execution completed...","zy_page.php?leiid=".$leiid."&page=".$page."");}

?>
<body>
<div class="x-nav ">
<span class="layui-breadcrumb"><?=kumu_name($leiid)?> List</span>
<a class="layui-btn layui-btn-small layui-btn-sm" style="line-height:1.6em;margin-top:1px;float:right" onclick="location.reload()" title="刷新">
<i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md12">
<div class="layui-card">
<div class="layui-card-body x-admin-sm">
<form class="layui-form layui-col-space5">
<input name="leiid" type="hidden" value="<?=$_GET['leiid']?>">
<div class="layui-inline  layui-show-xs-block ">
<input type="text" name="keyword" placeholder="Please enter the search term" autocomplete="off" class="layui-input">
</div>
<div class="layui-inline layui-show-xs-block ">
<button class="layui-btn layui-btn-sm"lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
</div>
</form>
</div>
<div class="layui-card-header">
<?php if(isabout_c($leiid) >1 ){?>
<button class="layui-btn layui-btn-sm" onclick="xadmin.open('Add','zy_page_up.php?leiid=<?=$leiid?>',1180,720)"><i class="layui-icon"></i>Add</button>
<button class="layui-btn layui-btn-danger layui-btn-sm" onClick="submitForm()"><i class="layui-icon"></i>Delete</button>
<?php }?>
<?php if(isabout_c($leiid) >1 ){?>
<button class="layui-btn layui-btn-sm" onClick="orderForm1()">Enable</button>
<button class="layui-btn layui-btn-warm layui-btn-sm" onClick="orderForm()">Disable</button><?php }?>
<button class="layui-btn layui-btn-sm" onClick="orderForm2()">Sort</button>
<?php if(isclass_c($leiid) ==1 ){?>
<button class="layui-btn layui-btn-normal layui-btn-sm" onclick="xadmin.open('Subclass List','zy_classzi.php?leiid=<?=$leiid?>',1200,700)">Subclass List</button>
<?php }?> 
      
      
</div>
<form action="" method="post" id="myForm">
<input name="leiid" type="hidden" value="<?=$_GET['leiid']?>">
<input name="page" type="hidden" value="<?=$_GET['page']?>">
<div class="layui-card-body layui-table-body layui-table-main">
<table class="layui-table layui-form">
<thead>
<tr>
<th><input type="checkbox" lay-filter="checkall" name="" lay-skin="primary"></th>
<?php if(ispic_c($leiid) ==1 ){?><th>Picture</th><?php }?>
<th>Category</th>
<th>Title</th>
<th>Date</th>
<th>Sort</th>
<th>State</th>
<th>Operate</th>
</tr>
</thead>
<tbody>
<?php   
include("../Include/page.php");  

$page = isset($_GET['page'])?intval($_GET['page']):1;
$keywords =$_REQUEST['keyword'];
if(isclass_c($leiid)==1){$yilei=classid_he($leiid);}
if($leiid!="" && $yilei==""){
$sql="select * from  mobanqu_archives  where typeid =".$leiid." and  title LIKE '%$keywords%' order by paixu,id desc";
}elseif($yilei!="" && $leiid!=""){
$sql="select * from  mobanqu_archives  where  typeid in(".$yilei.") and  title LIKE '%$keywords%'  order by paixu,id desc";}
$query = mysqli_query($conn,$sql)or die();
$count=mysqli_num_rows($query); 
$pages = new PageClass($count,10,$_GET['page'],'?page={page}&leiid='.$leiid.'');//分别为(记录总数,每页显示多少条记录,当前面,显示方式)
$sql .= " LIMIT ".$pages -> page_limit.",".$pages -> myde_size;
$result=mysqli_query($conn,$sql)or die();
while($row=mysqli_fetch_array($result)){
$pic1=$row['litpic'];
if($pic1==""){$pic1="images/defaultpic.gif";}
?>
          <tr>
            <td><input type="checkbox" name="id[]" value="<?=$row['id']?>"  lay-skin="primary"><?=$row['id']?></td>
            <?php if(ispic_c($leiid) ==1 ){?><td><img src="<?=$pic1?>" width="110" height="110"></td><?php }?>
            <td><?=kumu_name($row['typeid'])?></td>
            <td><?=cutstr_html($row['title'],20)?></td>
            <td><?=date('Y-m-d',$row['pubdate'])?>&nbsp;</td>
            <td><input name="paixu[]" type="text" value="<?=$row['paixu']?>" size="7" style="width:60px; height:30px;" class="layui-input">&nbsp;</td>
            <td><?= check_name($row['ismake'])?></td>
            <td align="center">
            <a title="编辑" onclick="xadmin.open('编辑','zy_page_up.php?act=edit&id=<?=$row['id']?>&leiid=<?=$leiid?>',1180,720)" href="javascript:;" style="float:left;">
            <i class="layui-icon">&#xe642;</i>
            </a>
            <?php if(isabout_c($leiid) >1 ){?>
            <a title="删除" onClick="javascript:return del()" href="zy_page.php?act=del&id=<?=$row['id']?>&leiid=<?=$leiid?>&page=<?=$page?>">
            <i class="layui-icon">&#xe640;</i>
            </a>
             <?php }?> 
          </td>
        </tr>
<?php
};
?>
</tbody>
</table>
</div>
<div class="layui-card-body ">
<div class="page">
<?php echo $pages -> myde_write();?>
</div>
</div>
</form>
</div>
</div>
</div>
</div> 
</body>
<script>
layui.use(['laydate','form'], function(){
var laydate = layui.laydate;
var form = layui.form;
form.on('checkbox(checkall)', function(data){
if(data.elem.checked){
$('tbody input').prop('checked',true);
}else{
$('tbody input').prop('checked',false);}
form.render('checkbox');
}); 
});	  
function del() {
	var msg = "Are you sure you want to delete it";
	if (confirm(msg)==true){
	return true;
	}else{
	return false;
	}
} 
function submitForm() {
var msg = "Are you sure you want to delete it!";
if (confirm(msg)==true){
	var myForm=document.getElementById("myForm");
	myForm.action = "?act=delall"
	myForm.submit();
	return true;
	}else{
	return false;
	}
}
function orderForm() {
var myForm=document.getElementById("myForm");
myForm.action = "?act=order"
myForm.submit();}
function orderForm1() {
var myForm=document.getElementById("myForm");
myForm.action = "?act=orderk"
myForm.submit();}
function orderForm2() {
var myForm=document.getElementById("myForm");
myForm.action = "?act=orderxu"
myForm.submit();}
</script>
</html>