<!DOCTYPE html>
<html>  
<head>
<meta charset="UTF-8">
<title>后台管理</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/xadmin.css">
<script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="./js/xadmin.js"></script>
<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>
  <script src="./js/html5.min.js"></script>
  <script src="./js/respond.min.js"></script>
<![endif]-->
</head>
<?php
define('IN_PHPWeb', true);
$ul_id="9";
include('../Include/config_db.php');
include("./zy_quanxian.php");
?>
</head>

<body>
<?php 
$leiid=trim($_GET['leiid']);
if($lei_id==""){$lei_id="1";}
if($ismake==""){$ismake="1";}
if($pubdate==""){
//$pubdate=strtotime(date('Y-m-d H:i:s'));
$pubdate=strtotime(date('Y-m-d H:i:s',strtotime('-5 day')));
}
if($_REQUEST['act']=="edit"){
$m_id=isset($_GET['id']) ? trim($_GET['id']) : '';
if(empty($m_id)){
echo('<script>alert("空置！点击此处");history.go(-1);</script>');}
else{
$result = mysqli_query($conn,"select * from mobanqu_archives where id='$m_id' ")or die();
$data6 = mysqli_fetch_array($result);  
$typeid=$data6['typeid'];
$title=$data6['title'];
$writer=$data6['writer'];
$litpic=$data6['litpic'];
$pubdate=$data6['pubdate'];
$senddate=$data6['senddate'];
$keywords=$data6['keywords'];
$ismake=$data6['ismake'];
$bodyy=$data6['bodyy'];
$shorttitle=$data6['shorttitle'];
$product_album=$data6['product_album'];
$description=$data6['description'];
$body=$data6['body'];
$vieo=$data6['vieo'];
$pic1=$data6['pic1'];
$pic2=$data6['pic2'];
$pic3=$data6['pic3'];
$pic4=$data6['pic4'];
$fileiinput=$data6['fileiinput'];
$pic5=$data6['pic5'];}
}

?>
<div class="layui-fluid">
<div class="layui-row">
<form class="layui-form" method="post" id="example" name="example" action="save.php?act=<?php if ($m_id > 0){ ?>page_edit<?php }else{?>page_add<?php }?>&m_id=<?=$m_id?>&leiid=<?=$leiid?>" enctype="multipart/form-data">

<div class="layui-form-item"  <?php if(isclass_c($leiid) >1 ){?>  style="display:none;"<?php }?>>
<?php if(isclass_c($leiid) >1 ){?><input name="typeid" type="hidden" size="40" value="<?=$leiid?>" /><?php }?>
<label for="L_username" class="layui-form-label">Category</label>
<div class="layui-input-inline" style="z-index:9999;">
<select name="typeid" class="valid "  lay-search lay-filter="selectSearch">
<?php 
$sql_yi="select * from  moba_classt where cat_id=".$leiid."";
$result=mysqli_query($conn,$sql_yi)or die();
while($row_yi=mysqli_fetch_assoc($result)){
$sql_er="select * from  moba_classt where parent_id=".$row_yi["cat_id"]."";
$resulter=mysqli_query($conn,$sql_er)or die();
while($row_er=mysqli_fetch_assoc($resulter)){
?> 
<option value="<?=$row_er["cat_id"]?>" <?php if ($typeid==$row_er["cat_id"]){?> selected="selected"<?php }?> ><?=$row_er["cat_name"]?></option> 
<?php 
$listsqld="select * from moba_classt where  parent_id = ".$row_er["cat_id"]." ";
$resultd=mysqli_query($conn,$listsqld);
while($home_list02=mysqli_fetch_array($resultd)){ 
?>
<option value="<?=$home_list02['cat_id']?>" <?php if ($typeid==$home_list02["cat_id"]){?> selected="selected"<?php }?>>&nbsp;&nbsp;|_ <?=$home_list02['cat_name']?></option>                
<?php }?>
                
<?php }?>   
<?php }?>
</select>
</div>
</div>
<div class="layui-form-item" <?php if(ispic_c($leiid) >1 ){?> style="display:none;"<?php }?>>
<label for="L_repass" class="layui-form-label">Picture</label>
    <div class="layui-input-inline">
    <label class="uploadImg">        
    <div id="preview"></div>
    <input name="upfile1" type="file" size="40" id="old_upfik1" value="000"  onchange="preview(this)"/><input name="old_upfilk" id="old_upfilk" type="hidden" size="40" value="<?=$litpic?>" />
    <script type="text/javascript">
    function preview(file){
    var prevDiv = document.getElementById('preview');
    if (file.files && file.files[0]){
    var reader = new FileReader();
    reader.onload = function(evt){prevDiv.innerHTML = '<img src="' + evt.target.result + '"  width="200" height="200" />'; }
    reader.readAsDataURL(file.files[0]);}else{
    prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }}
    function delpic(){
    var delImvalueiv = document.getElementById("old_upfilk");
    delImvalueiv.value = '';
    var delpic = document.getElementById("delpic");
    delpic.src = 'images/defaultpic.gif';}
    function delpic1(){
    var delImva = document.getElementById("old_upfik1");
    delImva.value = '';
    var delpi = document.getElementById("preview");
    delpi.innerHTML  = '<img class="img" src="images/defaultpic.gif" >'; }
    </script>
    <br />
    <?php if($litpic!=""){?><img src="<?=$litpic?>" id="delpic" width="110" height="110" style="margin:0px;"><?php }?>
    </label></div>
    <div class="layui-input-inline">
    <?php if($litpic!=""){?>
    <a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic()"><i class="layui-icon"></i></a>
    <?php }else{?><a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic1()"><i class="layui-icon"></i></a><?php }?>    
    </div>
    <?php if(ispicsmall_c($leiid) <2 ){?>
    <label for="L_repass" class="layui-form-label">Picture_01</label>
    <div class="layui-input-inline">
    <label class="uploadImg">        
    <div id="preview1"></div>
    <input name="upfil3" type="file" size="40" id="old_upfik3" value="000" onchange="preview1(this)"/><input name="old_upfil3" id="oldupfil3" type="hidden" size="40" value="<?=$pic1?>" />
    <script type="text/javascript">
    function preview1(file){
    var prevDiv = document.getElementById('preview1');
    if (file.files && file.files[0]){
    var reader = new FileReader();
    reader.onload = function(evt){prevDiv.innerHTML = '<img src="' + evt.target.result + '"  width="200" height="200"/>'; }
    reader.readAsDataURL(file.files[0]);}else{
    prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }}
    function delpic3(){
    var delImvalueiv = document.getElementById("oldupfil3");
    delImvalueiv.value = '';
    var delpic = document.getElementById("delpic3");
    delpic.src = 'images/defaultpic.gif';}
    function delpic03(){
    var delImva = document.getElementById("old_upfik3");
    delImva.value = '';
    var delpi = document.getElementById("preview1");
    delpi.innerHTML  = '<img class="img" src="images/defaultpic.gif" >'; }
    </script>
    <br />
    <?php if($pic1!=""){?><img src="<?=$pic1?>" id="delpic3" width="110" height="110" style="margin:0px;"><?php }?>
    </label></div>
    <div class="layui-input-inline">
    <?php if($pic1!=""){?>
    <a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic3()"><i class="layui-icon"></i></a>
    <?php }else{?><a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic03()"><i class="layui-icon"></i></a><?php }?>    
    </div>
    <?php }//小图?>
</div>

<?php if(ispicsmall_c($leiid) <2 ){?>
<div class="layui-form-item" style="display:;">

<label for="L_repass" class="layui-form-label">Picture_02</label>    
    <div class="layui-input-inline">
    <label class="uploadImg">        
    <div id="preview2"></div>
    <input name="upfil4" type="file" size="40" id="old_upfik4" value="000" onchange="preview2(this)"/><input name="old_upfil4" id="oldupfil4" type="hidden" size="40" value="<?=$pic2?>" />
    <script type="text/javascript">
    function preview2(file){
    var prevDiv = document.getElementById('preview2');
    if (file.files && file.files[0]){
    var reader = new FileReader();
    reader.onload = function(evt){prevDiv.innerHTML = '<img src="' + evt.target.result + '"  width="200" height="200"/>'; }
    reader.readAsDataURL(file.files[0]);}else{
    prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }}
    function delpic4(){
    var delImvalueiv = document.getElementById("oldupfil4");
    delImvalueiv.value = '';
    var delpic = document.getElementById("delpic4");
    delpic.src = 'images/defaultpic.gif';}
    function delpic04(){
    var delImva = document.getElementById("old_upfik4");
    delImva.value = '';
    var delpi = document.getElementById("preview2");
    delpi.innerHTML  = '<img class="img" src="images/defaultpic.gif" >'; }
    </script>
    <br />
    <?php if($pic2!=""){?><img src="<?=$pic2?>" id="delpic4" width="110" height="110" style="margin:0px;"><?php }?>
    </label></div>
    <div class="layui-input-inline">
    <?php if($pic2!=""){?>
    <a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic4()"><i class="layui-icon"></i></a>
    <?php }else{?><a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic04()"><i class="layui-icon"></i></a><?php }?>    
    </div>
    


<label for="L_repass" class="layui-form-label">Picture_03</label>   
    <div class="layui-input-inline">
    <label class="uploadImg">        
    <div id="preview3"></div>
    <input name="upfil5" type="file" size="40" id="old_upfik5" value="000" onchange="preview3(this)"/><input name="old_upfil5" id="oldupfil5" type="hidden" size="40" value="<?=$pic3?>" />
    <script type="text/javascript">
    function preview3(file){
    var prevDiv = document.getElementById('preview3');
    if (file.files && file.files[0]){
    var reader = new FileReader();
    reader.onload = function(evt){prevDiv.innerHTML = '<img src="' + evt.target.result + '"  width="200" height="200"/>'; }
    reader.readAsDataURL(file.files[0]);}else{
    prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }}
    function delpic5(){
    var delImvalueiv = document.getElementById("oldupfil5");
    delImvalueiv.value = '';
    var delpic = document.getElementById("delpic5");
    delpic.src = 'images/defaultpic.gif';}
    function delpic05(){
    var delImva = document.getElementById("old_upfik5");
    delImva.value = '';
    var delpi = document.getElementById("preview3");
    delpi.innerHTML  = '<img class="img" src="images/defaultpic.gif" >'; }
    </script>
    <br />
    <?php if($pic3!=""){?><img src="<?=$pic3?>" id="delpic5" width="110" height="110" style="margin:0px;"><?php }?>
    </label></div>
    <div class="layui-input-inline">
    <?php if($pic3!=""){?>
    <a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic5()"><i class="layui-icon"></i></a>
    <?php }else{?><a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic05()"><i class="layui-icon"></i></a><?php }?>    
    </div>
</div>

<div class="layui-form-item"  style="display:;">

<label for="L_repass" class="layui-form-label">Picture_04</label>   

    <div class="layui-input-inline">
    <label class="uploadImg">        
    <div id="preview4"></div>
    <input name="upfil6" type="file" size="40" id="old_upfik6" value="000" onchange="preview4(this)"/><input name="old_upfil6" id="oldupfil6" type="hidden" size="40" value="<?=$pic4?>" />
    <script type="text/javascript">
    function preview4(file){
    var prevDiv = document.getElementById('preview4');
    if (file.files && file.files[0]){
    var reader = new FileReader();
    reader.onload = function(evt){prevDiv.innerHTML = '<img src="' + evt.target.result + '"  width="200" height="200"/>'; }
    reader.readAsDataURL(file.files[0]);}else{
    prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }}
    function delpic6(){
    var delImvalueiv = document.getElementById("oldupfil6");
    delImvalueiv.value = '';
    var delpic = document.getElementById("delpic6");
    delpic.src = 'images/defaultpic.gif';}
    function delpic06(){
    var delImva = document.getElementById("old_upfik6");
    delImva.value = '';
    var delpi = document.getElementById("preview4");
    delpi.innerHTML  = '<img class="img" src="images/defaultpic.gif" >'; }
    </script>
    <br />
    <?php if($pic4!=""){?><img src="<?=$pic4?>" id="delpic6" width="110" height="110" style="margin:0px;"><?php }?>
    </label></div>
    <div class="layui-input-inline">
    <?php if($pic4!=""){?>
    <a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic6()"><i class="layui-icon"></i></a>
    <?php }else{?><a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic06()"><i class="layui-icon"></i></a><?php }?>    
    </div>
    

<label for="L_repass" class="layui-form-label">Picture_05</label>   
    <div class="layui-input-inline">
    <label class="uploadImg">        
    <div id="preview5"></div>
    <input name="upfil7" type="file" size="40" id="old_upfik7" value="000" onchange="preview5(this)"/><input name="old_upfil7" id="oldupfil7" type="hidden" size="40" value="<?=$pic5?>" />
    <script type="text/javascript">
    function preview5(file){
    var prevDiv = document.getElementById('preview5');
    if (file.files && file.files[0]){
    var reader = new FileReader();
    reader.onload = function(evt){prevDiv.innerHTML = '<img src="' + evt.target.result + '"  width="200" height="200"/>'; }
    reader.readAsDataURL(file.files[0]);}else{
    prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }}
    function delpic7(){
    var delImvalueiv = document.getElementById("oldupfil7");
    delImvalueiv.value = '';
    var delpic = document.getElementById("delpic7");
    delpic.src = 'images/defaultpic.gif';}
    function delpic07(){
    var delImva = document.getElementById("old_upfik7");
    delImva.value = '';
    var delpi = document.getElementById("preview5");
    delpi.innerHTML  = '<img class="img" src="images/defaultpic.gif" >'; }
    </script>
    <br />
    <?php if($pic5!=""){?><img src="<?=$pic5?>" id="delpic7" width="110" height="110" style="margin:0px;"><?php }?>
    </label></div>
    <div class="layui-input-inline">
    <?php if($pic5!=""){?>
    <a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic7()"><i class="layui-icon"></i></a>
    <?php }else{?><a class="layui-btn layui-btn-danger layui-btn-sm layui-btn-smm" onClick="delpic07()"><i class="layui-icon"></i></a><?php }?>    
    </div>
    
</div>

<!--小图结束-->
<?php }?>



<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">Title</label>
<div class="layui-input-inline">
<input type="text" name="title" value="<?=$title?>" required="" lay-verify="title" style="width:700px;" autocomplete="off" class="layui-input"></div>
</div>


<?php 
$sql_ziduan="".sql_mysql('rX3lJMBDfRCqYGwIOk6yAKh4HvyWqYfzZVwlV1Xzf+rRvBBuCaI=')."".$leiid." order by paixu asc";
$result=mysqli_query($conn,$sql_ziduan)or die();
while($ow_ziduan=mysqli_fetch_assoc($result)){?> 
<div class="layui-form-item">
<label for="L_pass" class="layui-form-label"><?=$ow_ziduan['textname']?></label>
<div class="layui-input-inline">
<input type="text" name="<?=$ow_ziduan['feldname']?>" value="<?=ziduan_zhi($m_id,$ow_ziduan['feldname'])?>" style="width:<?=$ow_ziduan['feldwidth']?>px;"  autocomplete="off" class="layui-input"></div>
</div><?php }?>


<?php if($leiid==13 || $leiid==22 ||  $leiid==6 || $leiid==1 || $leiid==5 ){?>
<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">Abstract</label>
<div class="layui-input-block">
  <textarea name="writer" class="layui-input" style="height:200px;"><?=$writer?></textarea>
</div>
</div><?php }?>

<?php if(isshuju_c($leiid) > 1 ){?>


<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.uutool.min.js"></script>

<div class="layui-form-item" style="display:none;">
    <label for="L_pass" class="layui-form-label">视频</label>
    <div class="layui-input-inline">
    <script id="ueditor"  name="bodyy" type="text/plain" style="width:1000px;height:400px;"><?=$bodyy?></script>
    </div>
</div>



<script type="text/javascript" charset="utf-8" src="/ueditvido/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditvido/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditvido/ueditor.uutool.min.js"></script>
<div class="layui-form-item">
    <label for="L_pass" class="layui-form-label">Content</label>
    <div class="layui-input-inline">
    <script id="ueditor1"  name="body" type="text/plain" style="width:1000px;height:400px;"><?=$body?></script>
    </div>
</div>

<script type="text/javascript"> 
    var ue = UE.getEditor('ueditor');     
    var ue = UE.getEditor('ueditor1');   
</script>
<?php if( $leiid==55 ){?>
<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">多图</label>
<div class="layui-input-inline2">

				<div class="pics">
                  <ul class="clearfix" id="ul_pics">
                  <?php
                  if($product_album!=''){
                    $str = explode(",",$product_album);                     
                        foreach ($str as $value) {
                          echo" <li class='item'><a href='$value' target='_blank'><img src='$value'></a><a class='picture_delete'>×</a></li>";
                            }  
                        }                   
                    ?>    
                    <li class="item"> <a class="picture_add" onClick="show_pics_box()">+加图</a> </li>
                  </ul>
                <input class="common-text" name="product_album" id="product_album" value="<?=$product_album?>" type="hidden" readonly>
                </div>
				<div class="modal fade" id="modal_upload">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title">上传图片</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-inline" style="display:none;">
                        <label class="control-label">网络图片：</label>
                        <input type="text" class="form-control" id="pic_url" style="margin:0 10px;width:400px" placeholder="请贴入网络图片地址" autocomplete="off" />
                        <button type="button" class="btn btn-primary" onClick="getPicUrl()">提取</button>
                      </div>
                      <div class="form-inline clearfix" style="margin:15px 0 0">
                        <label class="control-label" style="float:left">本地图片：</label>
                        <div id="photos_area" class="photos_area"> <a class="cover_btn" id="cover_btn_big"><span>+</span></a> </div>
                      </div>
                      <div class="controls preview-container"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onClick="upload_complete()">上传完成</button>
                    </div>
                  </div>
                </div>
              </div>
</div>
</div>
      <link rel="stylesheet" href="jss/bootstrap/css/bootstrap.min.css" />
      <!-- jQuery文件。务必在bootstrap.min.js 之前引入 --> 
      <script src="jss/jquery.js"></script> 
      <!-- 最新的 Bootstrap 核心 JavaScript 文件 --> 
      <script src="jss/bootstrap/js/bootstrap.min.js"></script> 
      <script type="text/javascript" src="jss/plupload/plupload.full.min.js"></script> 
      <script type="text/javascript" src="jss/uploads.js"></script> 
      <!-- 以下是统计及其他信息，与演示无关，不必理会 --> 

<?php }?>

<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">Keywords</label>
<div class="layui-input-inline">
<input type="text" name="shorttitle" value="<?=$shorttitle?>" style="width:700px;"  autocomplete="off" class="layui-input"></div>
</div>
<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">Related keywords</label>
<div class="layui-input-inline">
<input type="text" name="keywords" value="<?=$keywords?>"  style="width:700px;" autocomplete="off" class="layui-input"></div>
</div>
<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">Keyword description</label>
<div class="layui-input-inline">
<input type="text" name="description" value="<?=$description?>"  style="width:700px;" autocomplete="off" class="layui-input"></div>
</div>
<?php }?>
<div class="layui-form-item">
<label for="L_pass" class="layui-form-label">Date</label>
<div class="layui-input-inline">
<input class="layui-input" name="pubdate" value="<?=date('Y-m-d H:i:s',$pubdate)?>"  id="start"></div>
</div>
<div class="layui-form-item">
<label for="L_username" class="layui-form-label">
<span class="x-red">*</span>state</label>
<div class="layui-input-inline">
<select name="ismake" class="valid">
<option value="1" <?php if($ismake==1){?> selected <?php }?> >Open</option>
<option value="2" <?php if($ismake==2){?> selected <?php }?> >Disable</option>
</select>
</div>
</div>

<div class="layui-form-item">
<label for="L_repass" class="layui-form-label"></label>
<button  class="layui-btn" lay-filter="add" lay-submit=""><?php if($m_id){?>Modify<?php }else{?>Add<?php }?></button></div>
</form>
</div>
</div>

<script>layui.use(['laydate', 'form'],
        function() {
            var laydate = layui.laydate;

            //执行一个laydate实例
            laydate.render({
                elem: '#start', //指定元素
				type:'datetime'
            });
        });

       </script>
<script>
layui.use(['form', 'layer','jquery'],
function() {
$ = layui.jquery;
var form = layui.form,
layer = layui.layer;
//自定义验证规则
form.verify({
title: function(value) {
if (value.length < 1) {
return '名称至少得有个字符啊';
}}});
form.on('submit(add)');});
</script>
</body>
</html>