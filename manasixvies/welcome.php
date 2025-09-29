<!DOCTYPE html>
<html class="x-admin-sm">
<?php
define('IN_PHPWeb', true);
include("./zy_quanxian.php");
?>
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
<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>
  <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
  <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <blockquote class="layui-elem-quote">Welcome Administrator：
                                <span class="x-red"><?php echo $_SESSION["user_name"];?></span> current time : <?php echo date('Y-m-d H:i:s');?>
                            </blockquote>
                        </div>
                    </div>
                </div>
                
                
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">system information</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <tr>
                                        <th>server address</th>
                                        <td><?=$_SERVER['REMOTE_ADDR']?></td></tr>
                                    <tr>
                                        <th>operating system</th>
                                        <td><?=php_uname('s')?></td></tr>
                                    <tr>
                                        <th>Operating environment</th>
                                        <td><?=$_SERVER['SERVER_SOFTWARE']?></td></tr>
                                    <tr>
                                        <th>programming language</th>
                                        <td>PHP7.3</td></tr>
                                    <tr>
                                        <th>PHP</th>
                                        <td>Cgi-Fcgi</td></tr>
                                    <tr>
                                        <th>database</th>
                                        <td>MYSQL</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <style id="welcome_style"></style>
                <div class="layui-col-md12">
                    <blockquote class="layui-elem-quote layui-quote-nm">Thank you Baidu Echarts,jquery Provide technical support。</blockquote></div>
            </div>
        </div>
        </div>
    </body>
</html>