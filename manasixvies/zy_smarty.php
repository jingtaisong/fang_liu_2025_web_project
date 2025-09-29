<?php
include("../Include/config_db.php");//链接数据库
include("../Smar/Smarty.class.php");//这里的Smarty.class.php必须添上路径，否则无法执
$smarty = new Smarty; 
//下面的(你的网站目录)用绝对路径，比如d:/intepub/wwwroot
$smarty->template_dir = './templates';//模板
$smarty->config_dir = './configs';
$smarty->cache_dir = './templates_c';
$smarty->compile_dir = './templates_c';
?>