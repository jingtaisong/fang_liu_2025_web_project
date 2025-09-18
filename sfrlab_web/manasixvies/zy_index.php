<!doctype html>
<html>
<?php
define('IN_PHPWeb', true);
include("./zy_quanxian.php");
?>
<head>
<meta charset="UTF-8">
<title>Management Center</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/xadmin.css">
<!-- <link rel="stylesheet" href="./css/theme5.css"> -->
<script src="./lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="./js/xadmin.js"></script>
<!-- Allow IE8/9 to support media queries, making it compatible with grid systems -->
<!--[if lt IE 9]>
  <script src="./js/html5.min.js"></script>
  <script src="./js/respond.min.js"></script>
<![endif]-->
<script>
var is_remember = false;
</script>
</head>
<body class="index">
<!-- Header starts -->
<div class="container">
<div class="logo">
<a>Management Center</a></div>
<div class="left_open">
<a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
</div>
<ul class="layui-nav right" lay-filter="">
<li class="layui-nav-item">
<a href="javascript:;"><?php echo $_SESSION["user_name"];?></a>
<dl class="layui-nav-child">
<dd><a href="./logo.php?act=logout">Exit</a></dd>
</dl>
<li class="layui-nav-item">
<a href="../" target="_blank">View site</a>
</li>
</ul>
</div>
<!-- Header ends -->
<!-- Middle begins -->
<!-- Left menu starts -->
<div class="left-nav ">
<div id="side-nav">
<ul id="nav">
<li>
    <a href="javascript:;">
    <i class="iconfont left-nav-li">&#xe6b8;</i>
    <cite>Administrators</cite>
    <i class="iconfont nav_right">&#xe697;</i></a>
    <ul class="sub-menu">
    <li>
    <a onClick="xadmin.add_tab('Administrators','zy_admin.php','true')">
    <i class="iconfont">&#xe6a7;</i>
    <cite>Administrators</cite></a>
    </li>

    </ul>
</li>
<li>
    <a href="javascript:;">
    <i class="iconfont left-nav-li">&#xe6ae;</i>
    <cite>Site</cite>
    <i class="iconfont nav_right">&#xe697;</i></a>
    <ul class="sub-menu">
    <li>
    <a onClick="xadmin.add_tab('Site','zy_set.php','true')">
    <i class="iconfont">&#xe6a7;</i>
    <cite>Site</cite></a>
    </li>
    </ul>
</li>

<li>
    <a href="javascript:;">
    <i class="iconfont left-nav-li">&#xe723;</i>
    <cite>Content</cite>
    <i class="iconfont nav_right">&#xe697;</i></a>
    <ul class="sub-menu">
    
    <li><a onClick="xadmin.add_tab('Research','zy_page.php?leiid=1','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Research  </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Research introduce ','zy_page.php?leiid=2','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Research introduce </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Team','zy_page.php?leiid=3','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Team</cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Team Carousel','zy_page.php?leiid=4','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Team Carousel</cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Publications ','zy_page.php?leiid=5','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Publications </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('News','zy_page.php?leiid=6','true')">
    <i class="iconfont">&#xe6a7;</i><cite>News</cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Facilities Carousel ','zy_page.php?leiid=7','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Facilities Carousel </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Facilities introduce','zy_page.php?leiid=8','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Facilities introduce</cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Teaching','zy_page.php?leiid=9','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Teaching</cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Contact','zy_page.php?leiid=10','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Contact</cite></a></li>
    
    </ul>
</li>



<li>
    <a href="javascript:;">
    <i class="iconfont left-nav-li">&#xe723;</i>
    <cite>Other</cite>
    <i class="iconfont nav_right">&#xe697;</i></a>
    <ul class="sub-menu">
    
    <li><a onClick="xadmin.add_tab('Column','zy_page.php?leiid=11','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Column  </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Link','zy_page.php?leiid=12','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Link  </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Homepage Text','zy_page.php?leiid=22','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Homepage Text  </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Bottom text','zy_page.php?leiid=13','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Bottom text  </cite></a></li>
    
    <li><a onClick="xadmin.add_tab('Carousel image','zy_page.php?leiid=23','true')">
    <i class="iconfont">&#xe6a7;</i><cite>Carousel image</cite></a></li>
    
    </ul>
</li>






</ul>
</div>
</div>
<div class="page-content">
<div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
<ul class="layui-tab-title">
<li class="home">
<i class="layui-icon">&#xe68e;</i>My Desktop</li></ul>
<div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
<dl>
<dd data-type="this">关闭当前</dd>
<dd data-type="other">关闭其它</dd>
<dd data-type="all">关闭全部</dd></dl>
</div>
<div class="layui-tab-content">
<div class="layui-tab-item layui-show">
<iframe src='./welcome.php' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
</div>
</div>
<div id="tab_show"></div>
</div>
</div>
<div class="page-content-bg"></div>
<style id="theme_style"></style>
<!-- Right main body ends -->
<!-- Middle ends -->
</body>
</html>