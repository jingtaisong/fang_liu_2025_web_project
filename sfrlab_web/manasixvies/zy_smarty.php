<?php
include("../Include/config_db.php");//Connect to database
include("../Smar/Smarty.class.php");// Load Smarty. The path of Smarty.class.php must be added, otherwise it cannot be executed.
$smarty = new Smarty; 
//Use absolute path below, for example d:/intepub/wwwroot
$smarty->template_dir = './templates';//templates
$smarty->config_dir = './configs';
$smarty->cache_dir = './templates_c';
$smarty->compile_dir = './templates_c';
?>