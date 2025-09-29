<?php
define('IN_PHPWeb', true);
include("../Include/config_db.php");//链接数据库
include("./zy_quanxian.php");
if($_GET['act']=="adminadd"){
$user_name=isset($_POST['username']) ? trim($_POST['username']) : '';
$password=isset($_POST['password']) ? trim($_POST['password']) : '';
$password1=isset($_POST['password1']) ? trim($_POST['password1']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';
$add_time=date('Y-m-d H:i:s',time());
check_logodh($user_name);
if($password != $password)
{$data="NOOK"; die($data);}else{
$sql="insert into moba_admin_user(user_name,password,email,add_time) 
values('$user_name','". md5($password)."','$email','$add_time')";
mysqli_query($conn,$sql);$data="OK";die($data);}}

if($_GET['act']=="edit"){
$user_id=isset($_POST['userid']) ? trim($_POST['userid']) : '';
$user_name=isset($_POST['username']) ? trim($_POST['username']) : '';
$password=isset($_POST['password']) ? trim($_POST['password']) : '';
$password2=isset($_POST['password2']) ? trim($_POST['password2']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';
$add_time=date('Y-m-d H:i:s',time());
if($password != $password2){$password=md5($password);}else{$password=$password;}
$sql="update moba_admin_user set user_name='$user_name',password='$password',email='$email' where user_id=$user_id";
mysqli_query($conn,$sql);$data="ok";die($data);}



if($_GET['act']=="bookedit"){
$id=isset($_POST['id']) ? trim($_POST['id']) : '';
$ziduan1=isset($_POST['ziduan1']) ? trim($_POST['ziduan1']) : '';
$ziduan2=isset($_POST['ziduan2']) ? trim($_POST['ziduan2']) : '';
$ziduan3=isset($_POST['ziduan3']) ? trim($_POST['ziduan3']) : '';
$ziduan4=isset($_POST['ziduan4']) ? trim($_POST['ziduan4']) : '';
$ziduan5=isset($_POST['ziduan5']) ? trim($_POST['ziduan5']) : '';
$banjid=trim($_POST['banjid']);
$ziduan6=trim($_POST['ziduan6']);
$ziduan7=trim($_POST['ziduan7']);
$ziduan8=trim($_POST['ziduan8']);
$ziduan9=trim($_POST['ziduan9']);
$ziduan10=trim($_POST['ziduan10']);
$sql="update moba_book set ziduan9='$ziduan9',ziduan10='$ziduan10',ziduan1='$ziduan1',ziduan2='$ziduan2',ziduan3='$ziduan3',ziduan4='$ziduan4',ziduan5='$ziduan5',ziduan6='$ziduan6',ziduan7='$ziduan7',ziduan8='$ziduan8',banjid='$banjid' where id=$id";
mysqli_query($conn,$sql);
include("./respond.min.php");}

if($_GET['act']=="gamelistadd"){
$ziduan1=isset($_POST['ziduan1']) ? trim($_POST['ziduan1']) : '';
$ziduan2=isset($_POST['ziduan2']) ? trim($_POST['ziduan2']) : '';
$ziduan3=isset($_POST['ziduan3']) ? trim($_POST['ziduan3']) : '';
$ziduan4=isset($_POST['ziduan4']) ? trim($_POST['ziduan4']) : '';
$ziduan5=isset($_POST['ziduan5']) ? trim($_POST['ziduan5']) : '';
$banjid=trim($_POST['banjid']);
$ziduan6=trim($_POST['ziduan6']);
$ziduan7=trim($_POST['ziduan7']);
$ziduan8=trim($_POST['ziduan8']);
$ziduan9=trim($_POST['ziduan9']);
$ziduan10=trim($_POST['ziduan10']);
$add_time=strtotime(date('Y-m-d H:i:s',time()));
$sql="insert into moba_book(ziduan1,ziduan2,ziduan3,ziduan4,ziduan5,ziduan6,ziduan7,ziduan8,ziduan9,ziduan10,data,banjid) values('$ziduan1','$ziduan2','$ziduan3','$ziduan4','$ziduan5','$ziduan6','$ziduan7','$ziduan8','$ziduan9','$ziduan10','$add_time','$banjid')";
mysqli_query($conn,$sql);
include("./respond.min.php");}

if($_GET['act']=="orderadd"){
include('../Include/uploadfile1.php');//图片	
include('./zy_clear.php');//图片
$hid=trim($_POST['hid']);
$ziduan2=trim($_POST['ziduan1']);
$ziduan1=ziduan_name($ziduan2,'title','mobanqu_archives');
$add_time=strtotime(date('Y-m-d H:i:s',time()));
$sql="insert into moba_order(ziduan1,ziduan2,ziduan3,hid,data,ismake) values('$ziduan1','$ziduan2','$upfile1','$hid','$add_time','1')";
mysqli_query($conn,$sql);
include("./respond.min.php");}



if($_GET['act']=="studentedit"){
$id=isset($_POST['id']) ? trim($_POST['id']) : '';
$ziduan1=isset($_POST['ziduan1']) ? trim($_POST['ziduan1']) : '';
$ziduan2=isset($_POST['ziduan2']) ? trim($_POST['ziduan2']) : '';
$ziduan3=isset($_POST['ziduan3']) ? trim($_POST['ziduan3']) : '';
$ziduan4=isset($_POST['ziduan4']) ? trim($_POST['ziduan4']) : '';
$ziduan5=isset($_POST['ziduan5']) ? trim($_POST['ziduan5']) : '';
$banjid=trim($_POST['banjid']);
$sql="update moba_studet set ziduan1='$ziduan1',ziduan2='$ziduan2',ziduan3='$ziduan3',ziduan4='$ziduan4',ziduan5='$ziduan5' where id=$id";
mysqli_query($conn,$sql);
include("./respond.min.php");}

if($_GET['act']=="tudenttadd"){
$ziduan1=isset($_POST['ziduan1']) ? trim($_POST['ziduan1']) : '';
$ziduan2=isset($_POST['ziduan2']) ? trim($_POST['ziduan2']) : '';
$ziduan3=isset($_POST['ziduan3']) ? trim($_POST['ziduan3']) : '';
$ziduan4=isset($_POST['ziduan4']) ? trim($_POST['ziduan4']) : '';
$ziduan5=isset($_POST['ziduan5']) ? trim($_POST['ziduan5']) : '';
$banjid=trim($_POST['banjid']);
$add_time=strtotime(date('Y-m-d H:i:s',time()));
$sql="insert into moba_studet(ziduan1,ziduan2,ziduan3,ziduan4,ziduan5,data) values('$ziduan1','$ziduan2','$ziduan3','$ziduan4','$ziduan5','$add_time')";
mysqli_query($conn,$sql);
include("./respond.min.php");}



if($_REQUEST['act']=="page_add"){
$leiid=trim($_GET['leiid']);
include('../Include/uploadfile1.php');//图片	
include('./zy_clear.php');//图片


//MP4视频
$upfile = $_FILES['upfilepic'];

$fileiinput=upload_file($upfile);//---


$vieo=trim($_POST['vieo']);
$typeid=trim($_POST['typeid']);
$title=trim($_POST['title']);
$writer=trim($_POST['writer']);
$litpic=trim($_POST['litpic']);
$pubdate=trim($_POST['pubdate']);
$pubdate=strtotime(date($pubdate));
$product_album=trim($_POST['product_album']);
$shorttitle=trim($_POST['shorttitle']);
$senddate=trim($_POST['senddate']);
$keywords=trim($_POST['keywords']);
$description=trim($_POST['description']);
$body=mysqli_real_escape_string($conn,$_POST['body']);
$bodyy=$_POST['bodyy'];
$ismake=$_POST['ismake'];

$sql_ziduan="".sql_mysql('rX3lJMBDfRCqYGwIOk6yAKh4HvyWqYfzZVwlV1Xzf+rRvBBuCaI=')."".$leiid."";
$result=mysqli_query($conn,$sql_ziduan)or die();
while($ow_ziduan=mysqli_fetch_assoc($result)){
$zicheck=$ow_ziduan['feldname'];
$ziduan.=",".$ow_ziduan['feldname'];
$zhizd=$_POST[''.(string)$ow_ziduan['feldname'].''];
$zhiz.=",".'"'.$zhizd.'"';}
if( empty($title) ){
echo('<script>alert("参数错误！点击此处");history.go(-1);</script>');}
else{if($zicheck){
$sqq="insert into mobanqu_archives(typeid,title,writer,pubdate,litpic,keywords,description,body,ismake,shorttitle,product_album,pic1,pic2,pic3,pic4,pic5,vieo,bodyy,fileiinput".$ziduan.") values('$typeid','$title','$writer','$pubdate','$upfile1','$keywords','$description','$body','$ismake','$shorttitle','$product_album','$upfil3','$upfil4','$upfil5','$upfil6','$upfil7','$vieo','$bodyy','$fileiinput'".$zhiz.")";
}else{
$sqq="insert into mobanqu_archives(typeid,title,writer,pubdate,litpic,keywords,description,body,ismake,shorttitle,product_album,pic1,pic2,pic3,pic4,pic5,vieo,bodyy,fileiinput) values('$typeid','$title','$writer','$pubdate','$upfile1','$keywords','$description','$body','$ismake','$shorttitle','$product_album','$upfil3','$upfil4','$upfil5','$upfil6','$upfil7','$vieo','$bodyy','$fileiinput')";}

$result = mysqli_query($conn,$sqq)or die(); 
include("./respond.min.php");
mysql_close(); }
}
////提交iＤ先查询

/*修改提交判断*/
if($_REQUEST['act']=="page_edit"){
$leiid=trim($_GET['leiid']);
include('../Include/uploadfile1.php');//图片	
include('./zy_clear.php');//图片
$m_id=isset($_GET['m_id']) ? trim($_GET['m_id']) : '0';

////MP4视频
$upfile = $_FILES['upfilepic'];
$olupfilepic = $_POST['olupfilepic'];
$gsdg=upload_file($upfile);
if($leiid==144){//这里116 是需要上传视频的分类ID
if($gsdg=="非法文件类型"){die('<script>alert("非法文件类型！点击此处");history.go(-1);</scr ipt>');}
}
if($gsdg=="文件上传失败"){$fileiinput=$olupfilepic;}else{$fileiinput=$gsdg;};	
////---

$vieo=trim($_POST['vieo']);
$typeid=trim($_POST['typeid']);
$title=trim($_POST['title']);
$writer=trim($_POST['writer']);
$litpic=trim($_POST['litpic']);
$pubdate=trim($_POST['pubdate']);
$pubdate=strtotime(date($pubdate));
$senddate=trim($_POST['senddate']);
$keywords=trim($_POST['keywords']);
$product_album=trim($_POST['product_album']);
$shorttitle=trim($_POST['shorttitle']);
$description=trim($_POST['description']);
$ismake=$_POST['ismake'];
$body=mysqli_real_escape_string($conn,$_POST['body']);
$bodyy=$_POST['bodyy'];
$sql_ziduan="".sql_mysql('rX3lJMBDfRCqYGwIOk6yAKh4HvyWqYfzZVwlV1Xzf+rRvBBuCaI=')."".$leiid."";
$result=mysqli_query($conn,$sql_ziduan)or die();
while($ow_ziduan=mysqli_fetch_assoc($result)){
$zicheck=$ow_ziduan['feldname'];
$ziduan=$ow_ziduan['feldname'];
$zhiz=$_POST[''.(string)$ow_ziduan['feldname'].''];
$update.="$ziduan='$zhiz'".",";}
if(empty($m_id) ){
echo('<script>alert("参数错误！点击此处");history.go(-1);</script>');}
else{if($zicheck){
$result = mysqli_query($conn," update mobanqu_archives set  ".$update."typeid='$typeid',vieo='$vieo',bodyy='$bodyy',fileiinput='$fileiinput',title='$title',ismake='$ismake',writer='$writer',pubdate='$pubdate',product_album='$product_album',shorttitle='$shorttitle',litpic='$upfile1',keywords='$keywords',description='$description',body='$body',pic1='$upfil3',pic2='$upfil4',pic3='$upfil5',pic4='$upfil6',pic5='$upfil7' where id=$m_id ")or die();
}else{
$result = mysqli_query($conn," update mobanqu_archives set  typeid='$typeid',vieo='$vieo',bodyy='$bodyy',fileiinput='$fileiinput',title='$title',ismake='$ismake',writer='$writer',pubdate='$pubdate',product_album='$product_album',shorttitle='$shorttitle',litpic='$upfile1',keywords='$keywords',description='$description',body='$body',pic1='$upfil3',pic2='$upfil4',pic3='$upfil5',pic4='$upfil6',pic5='$upfil7' where id=$m_id ")or die();}
include("./respond.min.php");
mysql_close(); }
}
if($_REQUEST['act']=="class_add"){
include('../Include/uploadfile1.php');//图片	
include('./zy_clear.php');//图片
$cat_name=isset($_POST['cat_name']) ? trim($_POST['cat_name']) : '0';
$body=isset($_POST['body']) ? trim($_POST['body']) : '0';
$body1=isset($_POST['body1']) ? trim($_POST['body1']) : '0';
$parent_id=isset($_POST['parent_id']) ? trim($_POST['parent_id']) : '0';
if( empty($cat_name) ){
echo('<script>alert("参数错误！点击此处");history.go(-1);</script>');
}else{
check_leimu($cat_name);
$add_time=date('Y-m-d H:i:s',time());
$good_cat_sql="insert into moba_classt(cat_name,parent_id,body,body1,litpic1,litpic2,datae) values('$cat_name','$parent_id','$body','$body1','$upfile1','$upfil3','$add_time')";
mysqli_query($conn,$good_cat_sql)or die();
include("./respond.min.php");
mysql_close();}
}

/*修改提交判断*/
if($_REQUEST['act']=="class_edit"){
include('../Include/uploadfile1.php');//图片	
include('./zy_clear.php');//图片
$cat_id=isset($_GET['cat_id']) ? trim($_GET['cat_id']) : '0';
$body=isset($_POST['body']) ? trim($_POST['body']) : '0';
$body1=isset($_POST['body1']) ? trim($_POST['body1']) : '0';
$cat_name=isset($_POST['cat_name']) ? trim($_POST['cat_name']) : '0';
$parent_id=isset($_POST['parent_id']) ? trim($_POST['parent_id']) : '0';
if(empty($cat_id) ){
echo('<script>alert("参数错误！点击此处");history.go(-1);</script>');}
else{
$sql="update moba_classt set cat_name='$cat_name',body='$body',body1='$body1',litpic1='$upfile1',litpic2='$upfil3' where cat_id=$cat_id";
mysqli_query($conn,$sql)or die();
include("./respond.min.php");
mysql_close();}
}

?>