<?php
define('IN_PHPWeb', true);
session_start(); 
if($_SESSION["user_name"]=="" || $_SESSION['user_id']=="")
{die('<script>window.top.location="zy_logo.php";</script>');}
?>
