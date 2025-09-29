<?php 
error_reporting(0);
date_default_timezone_set(PRC);/* 设置中国市区*/ 
if (!defined('IN_PHPWeb'))
{die("<html><head><title>HTTP 403</title></head><body>No website.</body></html>");}
$db_host   = "localhost";
$sql_name   = "fangliul_web";
$db_user   = "fangliul_admin";
$db_pass   = "shanghai5487";
$prefix    = "zy_";
$charset="utf-8";// 页面字符集
$timezone    = "UTC";
$cookie_path  = "";
$cookie_domain  = "";
$admin_dir = "age";//后台目录
$session_outtime = "3800"; //单位秒 SESSION 过期时间 默认半小时=1800秒
$display_Is_Debug=1;//1是0否显示PHP及MySQL错误内容,测试时建议打开它
$conn=mysqli_connect($db_host,$db_user,$db_pass,$sql_name); //连接数据库

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Force the connection to use utf8mb4; This allows to parse subscript and acent characters properly.
mysqli_set_charset($conn, "utf8mb4");

function inect_check($sql_str) { 
    return preg_match('select|insert|and|or|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile|\;|CREATE|ALTER|DROP|TRUNCATE', $sql_str);
}
function verify_id($id) { 
    if(!$id) {
        exit('没有提交参数！'); 
    } elseif(inect_check($id)) { 
        exit('提交的参数非法！');
    } elseif(!is_numeric($id)) { 
        exit('提交的参数非法！'); 
    } 
    $id = intval($id); 
    return $id; 
}//防SQL注入



//函数上传视频用upload_file
function upload_file($files){}
function num_bia($checkid){
global $conn;
$numsql01="select  COUNT(id) AS count from mobanqu_archives where typeid=".$checkid." ";
$ressql01=mysqli_query($conn,$numsql01) or die();
$rowsql01=mysqli_fetch_array($ressql01);
$tmpstr=$rowsql01["count"];
   return $tmpstr; // 返回字符串
}//统计流工单标签的
function check_logoh($strname){
global $conn;
$query = mysqli_query($conn,"select ziduan1 from moba_book where ziduan1='$strname' limit 1 ");  
$login = is_array($row = mysqli_fetch_array($query));
if ($login) {  die('<script>alert("账号已被注册");history.go(-1);</script>');}}
function check_logodh($strname){
global $conn;
$query = mysqli_query($conn,"select user_name from moba_admin_user where user_name='$strname' limit 1 ");  
$login = is_array($row = mysqli_fetch_array($query));
if ($login) {  die('<script>alert("账号已被注册");history.go(-1);</script>');}}
function check_quan_ul($urid){
	session_start(); 
	$jibie_id=$_SESSION["user_id"];
	global $conn;
    $query = mysqli_query($conn,"select quanx from moba_admin_user where  user_id=".$jibie_id."")or die();
	$jibie_rws=mysqli_fetch_array($query);
	$tmpstr=$jibie_rws['quanx'];
	if(strpos($tmpstr,'999') !== false){$uid="ok";}else{
	if(strpos($tmpstr,$urid) !== false){$uid="ok";}else{$uid="no"; }}
   	return $uid; // 返回字符串
}
function kumu_name($strid) { 
global $conn;
$city_sql="".sql_mysql('rX3lJMBDfVnrckEJNgP3TaFoEM7QoYT1JHQuXkblLOqIux1iH/qZpiAO+qJU')."=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws[0];
return $tmpstr; }
function check_leimu($strname){
global $conn;
$query = mysqli_query($conn,"select cat_name from moba_classt where cat_name='$strname' limit 1 ");  
$login = is_array($row = mysqli_fetch_array($query));
if ($login) {  die('偶哟！重复添加！');}}
function lanmu_name($strid) { 
if($strid>0){
$city_sql="select title from mobanqu_archives where id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['title'];
}
return $tmpstr; }
function ziduan_zhi($strid,$sname) { 
global $conn;
$city_sql="select ".$sname." from mobanqu_archives where id='".$strid."'  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws[0];
return $tmpstr; } 

function pjiaame($strid) { 
global $conn;
if($strid>0){
$city_sql="select id from moba_pjia where orderid=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['id'];
}
return $tmpstr; } 

function ziduan_name($strid,$sname,$msyql) { 
global $conn;
$city_sql="select ".$sname." from ".$msyql." where id='".$strid."'  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws[0];
return $tmpstr; } 

function xian_name($strid) { 
global $conn;
$city_sql="select ismake from mobanqu_archives where id='".$strid."'  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['ismake'];
if($tmpstr=='2'){$tmpstr="style='display:none;'";}else{$tmpstr="";}
return $tmpstr; }
function kumu_conent($strid) { 
global $conn;
$city_sql="select content from moba_classt where cat_id='".$strid."'  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['content'];
return $tmpstr;}
function kumu_nameur($strid) { 
global $conn;
$city_sql="select typedir from moba_classt where cat_id='".$strid."'  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['typedir'];
return $tmpstr;}

function classid_heyualai($strid){
global $conn;
$huoquid_sql="select cat_id from moba_classt where parent_id =".$strid."  ";
$zhixing_sql=mysqli_query($conn,$huoquid_sql);
$timuid= array();
while($zhi_sql=(mysql_fetch_assoc($zhixing_sql))){
$timuid=$zhi_sql['cat_id'];
$timud[]=$timuid;}
$chanpid =implode(",",$timud);
return $chanpid;}


function classid_he_zi($strid){
global $conn;
$huoquid_sql="select cat_id from moba_classt where parent_id =".$strid."  ";
$zhixing_sql=mysqli_query($conn,$huoquid_sql);
$timuid= array();

while($zhi_sql=(mysqli_fetch_assoc($zhixing_sql))){
$timuid=$zhi_sql['cat_id'];
$huoquid_sql01="select cat_id from moba_classt where parent_id =".$timuid."  ";
$zhixing_sql01=mysqli_query($conn,$huoquid_sql01);
$timuid1= array();
while($zhi_sq01l=(mysqli_fetch_assoc($zhixing_sql01))){
$timuid1=$zhi_sq01l['cat_id'];
$timud1[]=$timuid1;
}
$timud[]=$timuid;
}

$chanpid =implode(",",$timud);
$chanpid01 =implode(",",$timud1);
if($chanpid01){$chanpid=$chanpid01;};
if($chanpid==""){$chanpid=$strid;};
//echo $chanpid.','.$chanpid01;
return $chanpid;

}

function classid_he($strid){
global $conn;
$huoquid_sql="select cat_id from moba_classt where parent_id =".$strid."  ";
$zhixing_sql=mysqli_query($conn,$huoquid_sql);
$timuid= array();

while($zhi_sql=(mysqli_fetch_assoc($zhixing_sql))){
$timuid=$zhi_sql['cat_id'];
$huoquid_sql01="select cat_id from moba_classt where parent_id =".$timuid."  ";
$zhixing_sql01=mysqli_query($conn,$huoquid_sql01);
$timuid1= array();
while($zhi_sq01l=(mysqli_fetch_assoc($zhixing_sql01))){
$timuid1=$zhi_sq01l['cat_id'];
$timud1[]=$timuid1;
}
$timud[]=$timuid;
}

$chanpid =implode(",",$timud);
$chanpid01 =implode(",",$timud1);
if($chanpid01){$chanpid=$chanpid.','.$chanpid01;};
//echo $chanpid.','.$chanpid01;
if($chanpid==""){$chanpid=$strid;};
return $chanpid;

}

function ispic_c($strid) { 
global $conn;
$city_sql="select ispic from moba_classt where cat_id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['ispic'];
return $tmpstr; }
function isabout_c($strid) { 
global $conn;
$city_sql="select isabout from moba_classt where cat_id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['isabout'];
return $tmpstr; }
function isclass_c($strid) { 
global $conn;
$city_sql="select isclass from moba_classt where cat_id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['isclass'];
return $tmpstr;}
function isshuju_c($strid) { 
global $conn;
$city_sql="select isshuju from moba_classt where cat_id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['isshuju'];
return $tmpstr; }
function ispicsmall_c($strid) { 
global $conn;
 $city_sql="select ispicsmalll from moba_classt where cat_id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['ispicsmalll'];
return $tmpstr;}
function huiyuan_name($strid) { 
global $conn;
$city_sql="select yonhzhao from moba_meber where id=".$strid."  ";
$cityres=mysqli_query($conn,$city_sql)or die();
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['yonhzhao'];
return $tmpstr;}
function check_name($strid) { 
if($strid==1){$tmpstr="Enable";}else{$tmpstr="<span style='color:red'>Disable</span>";}
return $tmpstr;}
function check_named($strid) { 
if($strid==1){$tmpstr="通过";}else{$tmpstr="<span style='color:red'>未审核</span>";}
return $tmpstr;}
function check_namek($strid) { 
if($strid==1){$tmpstr="已付款";}else{$tmpstr="<span style='color:red'>未付款</span>";}
return $tmpstr;}
function check_nd($strid) { 
if($strid=="1"){$tmpstr="私密";}else{$tmpstr="<span style='color:red'>公开</span>";}
return $tmpstr;}
function sql_city_name($strid) { 
global $conn;
$city_sql="select * from zp_forumclass where id='".$strid."'  ";
$cityres=mysqli_query($conn,$city_sql);
$cityrws=mysqli_fetch_array($cityres);
$tmpstr=$cityrws['title'];
return $tmpstr; }
function sql_mysql($data)
{$cipher='';$data = base64_decode($data);      
$key[] = "";$box[] = "";$pwd_length = strlen(8);//8数字
$data_length = strlen($data);
for ($i = 0; $i < 256; $i++)
{$key[$i] = ord($pwd[$i % $pwd_length]);
$box[$i] = $i;}
for ($j = $i = 0; $i < 256; $i++)
{$j = ($j + $box[$i] + $key[$i]) % 256;
$tmp = $box[$i];$box[$i] = $box[$j];
$box[$j] = $tmp;}
for ($a = $j = $i = 0; $i < $data_length; $i++)
{$a = ($a + 1) % 256;
$j = ($j + $box[$a]) % 256;$tmp = $box[$a];
$box[$a] = $box[$j];$box[$j] = $tmp;
$k = $box[(($box[$a] + $box[$j]) % 256)];
$cipher .= chr(ord($data[$i]) ^ $k);
}return $cipher;}
function check_shenfen($strname){
global $conn;
$query = mysqli_query($conn,"".sql_mysql('rX3lJMBDfRCqYGwIOk7/AqV7IMWVoI+3MkMoQEK2OfvEqBtmAPo=')."='$strname'  limit 1 ");  
$login = is_array($row = mysqli_fetch_array($query));
if ($login) {  die('偶哟！重复添加！');}}
function msg($str1='',$str2=''){
global $db;
if($db->link_id){
$db->close();}
if($str1!=''){
$str1='alert("'.$str1.'");';}
if($str2==''){
$str2='history.go(-1);';}
$html='<script>'.$str1.$str2.'</script>';
exit ($html);}
function checknum($pid){
if (!is_array($pid)){
return preg_match("/^[0-9]+$/",$pid);
}else{$str=true;
foreach ($pid as $v){
if (!checknum($v)){
$str=false;
break;}
}return $str;}
}
function previous() {
if (isset($_SERVER['HTTP_REFERER'])){
$url = $_SERVER['HTTP_REFERER'];
return $url;}}
function html2text($str){
 $str = preg_replace("/<style .*?<\\/style>/is", "", $str);
 $str = preg_replace("/<script .*?<\\/script>/is", "", $str);
 $str = preg_replace("/<br \\s*\\/>/i", "", $str);
 $str = preg_replace("/<\\/?p>/i", "", $str);
 $str = preg_replace("/<\\/?td>/i", "", $str);
 $str = preg_replace("/<\\/?div>/i", "", $str);
 $str = preg_replace("/<\\/?blockquote>/i", "", $str);
 $str = preg_replace("/<\\/?li>/i", "", $str);
 $str = preg_replace("/ /i", " ", $str);
 $str = preg_replace("/ /i", " ", $str);
 $str = preg_replace("/&/i", "&", $str);
 $str = preg_replace("/&/i", "&", $str);
 $str = preg_replace("/</i", "<", $str);
 $str = preg_replace("/</i", "<", $str);
 $str = preg_replace("/'/i", '"', $str);
 $str = preg_replace("/&ldquo/i", '"', $str);
 $str = preg_replace("/'/i", "'", $str);
 $str = preg_replace("/&lsquo/i", "'", $str);
 $str = preg_replace("/'/i", "'", $str);
 $str = preg_replace("/&rsquo/i", "'", $str);
 $str = preg_replace("/>/i", ">", $str);
 $str = preg_replace("/>/i", ">", $str);
 $str = preg_replace("/'/i", '"', $str);
 $str = preg_replace("/&rdquo/i", '"', $str);
 $str = strip_tags($str);
 $str = html_entity_decode($str, ENT_QUOTES, "utf-8");
 $str = preg_replace("/&#.*?;/i", "", $str);
 return $str;}
function cutstr_html($string,$length=0,$ellipsis=''){
$string=strip_tags($string);
$string=preg_replace('/\n/is','',$string);
$string=preg_replace('/ |　/is','',$string);
$string=preg_replace('/&nbsp;/is','',$string);
preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/",$string,$string);
if(is_array($string)&&!empty($string[0])){
if(is_numeric($length)&&$length){
$string=join('',array_slice($string[0],0,$length)).$ellipsis;
}else{$string=implode('',$string[0]);}
}else{$string='';}
return $string;}
function chinesesubstr($str, $start, $len) { 
$strlen = $start + $len;
for($i = $start; $i < $strlen;) {
if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { 
$tmpstr .= substr ( $str, $i, 3 ); 
$i=$i+3; } else{
$tmpstr .= substr ( $str, $i, 1 ); 
$i++; } }
return $tmpstr; }
function ShowMsg($msg, $gourl, $onlymsg=0, $limittime=0){
    if(empty($GLOBALS['cfg_plus_dir'])) $GLOBALS['cfg_plus_dir'] = '..';
    $htmlhead  = "<html>\r\n<head>\r\n<title>提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">\r\n<meta name=\"renderer\" content=\"webkit\">\r\n<meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />";
    $htmlhead .= "<base target='_self'/>\r\n<style>div{line-height:160%;}</style></head>\r\n<body leftmargin='0'  topmargin='0' bgcolor='#FFFFFF'>".(isset($GLOBALS['ucsynlogin']) ? $GLOBALS['ucsynlogin'] : '')."\r\n<center>\r\n<script>\r\n";
    $htmlfoot  = "</script>\r\n</center>\r\n</body>\r\n</html>\r\n";
    $litime = ($limittime==0 ? 1000 : $limittime);
    $func = '';
    if($gourl=='-1'){
    if($limittime==0) $litime = 5000;
    $gourl = "javascript:history.go(-1);";}
    if($gourl=='' || $onlymsg==1){
    $msg = "<script>alert(\"".str_replace("\"","“",$msg)."\");</script>";}
    else{
        if(preg_match('/close::/',$gourl)){
        $tgobj = trim(preg_replace('/close::/', '', $gourl));
        $gourl = 'javascript:;';
        $func .= "window.parent.document.getElementById('{$tgobj}').style.display='none';\r\n";}        
        $func .= "      var pgo=0;
      function JumpUrl(){
        if(pgo==0){ location='$gourl'; pgo=1; }
      }\r\n";
        $rmsg = $func;
        $rmsg .= "document.write(\"<br /><div style='width:300px;padding:0px;border:1px solid #DADADA; margin:auto;'>";
        $rmsg .= "<div style='padding:6px;font-size:12px;border-bottom:1px solid #DADADA;background:#009688;color:#FFF';'><b>提示信息！</b></div>\");\r\n";
        $rmsg .= "document.write(\"<div style='height:130px;font-size:10pt;background:#ffffff'><br />\");\r\n";
        $rmsg .= "document.write(\"".str_replace("\"","“",$msg)."\");\r\n";
        $rmsg .= "document.write(\"";        
        if($onlymsg==0) {
            if( $gourl != 'javascript:;' && $gourl != ''){
            $rmsg .= "<br /><a href='{$gourl}' style='color:#212121;line-height:28px;'>如果你的浏览器没反应，请点击这里...</a>";
            $rmsg .= "<br/></div>\");\r\n";
            $rmsg .= "setTimeout('JumpUrl()',$litime);";}
            else{
            $rmsg .= "<br/></div>\");\r\n";}
        }else{
            $rmsg .= "<br/><br/></div>\");\r\n";}
        $msg  = $htmlhead.$rmsg.$htmlfoot;}
    die ($msg);}
?>