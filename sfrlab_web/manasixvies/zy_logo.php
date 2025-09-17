<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>后台登录</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/xadmin.css">
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script src="./lib/layui/layui.js" charset="utf-8"></script>
<!--[if lt IE 9]>
  <script src="./js/html5.min.js"></script>
  <script src="./js/respond.min.js"></script>
<![endif]-->
</head>
<body class="login-bg ">
    <div class="login layui-anim layui-anim-up">
        <div class="message">Login</div>
        <div id="darkbannerwrap"></div>
 		<form action="logo.php?act=logo" method="post"  class="login-form" name="zy_form"  id="testCode">
          	<input type="text" placeholder="user name" class="layui-input" name="zy_name" id="username" />
            <hr class="hr15">
          	<input type="password" placeholder="password" class="layui-input" id="password" name="zy_pwd" />
            <hr class="hr15">    
			<input type="text" placeholder="Verification code" class="input-val" id="userclick"  style="width:130px;">
			<canvas id="canvas" width="150px" height="50px" style=" float:right;">
			</canvas>
     		<hr class="hr15">
      		<button class="btn btn-block btn-primary layui-btn" type="submit" style="width:100%;">Submit</button>
            <hr class="hr20" >
        </form>
    </div>
    <!-- 底部结束 -->
</body>
</html>
<script>
	$(function() {
		var show_num = [];
		draw(show_num);

		$("#canvas").on('click', function() {
			draw(show_num);
		})

		//单击事件的时候校验输入的验证码是否正确
		$(".layui-btn").on('click', function() {
			
			var val = $(".input-val").val().toLowerCase();
			var num = show_num.join("");
			if (val == '') {
				alert('请输入验证码！');draw(show_num);
			zy_form.userclick.focus(); return false; 
			} else if (val == num) {
				
			if (zy_form.username.value == "") 
			{ 
			alert("请输入用户名"); 
			zy_form.username.focus(); 
			return false; 
			} 
			if (zy_form.password.value == "") 
			{ 
			alert("请输入密码"); 
			zy_form.password.focus(); 
			return false; 
			} 
			zy_form.submit();
			
			
			} else {
				alert('验证码错误！请重新输入！');
				$(".input-val").val('');zy_form.userclick.focus(); 
				draw(show_num);return false; 
			}
			

			
		})
	})


	function draw(show_num) { //显示区域内容信息
		var canvas_width = $('#canvas').width();
		var canvas_height = $('#canvas').height();
		var canvas = document.getElementById("canvas"); //获取到canvas的对象，演员
		var context = canvas.getContext("2d"); //获取到canvas画图的环境，演员表演的舞台
		canvas.width = canvas_width;
		canvas.height = canvas_height;
		var sCode =
			"a,b,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,E,F,G,H,J,K,L,M,N,P,Q,R,S,T,W,X,Y,Z,1,2,3,4,5,6,7,8,9,0";
		var aCode = sCode.split(",");
		var aLength = aCode.length; //获取到数组的长度

		for (var i = 0; i <= 3; i++) {
			var j = Math.floor(Math.random() * aLength); //获取到随机的索引值
			var deg = Math.random() * 30 * Math.PI / 180; //产生0~30之间的随机弧度
			var txt = aCode[j]; //得到随机的一个内容
			show_num[i] = txt.toLowerCase();
			var x = 10 + i * 20; //文字在canvas上的x坐标
			var y = 20 + Math.random() * 8; //文字在canvas上的y坐标
			context.font = "bold 23px 微软雅黑";

			context.translate(x, y);
			context.rotate(deg);

			context.fillStyle = randomColor();
			context.fillText(txt, 0, 0);

			context.rotate(-deg);
			context.translate(-x, -y);
		}
		for (var i = 0; i <= 5; i++) { //验证码上显示线条
			context.strokeStyle = randomColor();
			context.beginPath();
			context.moveTo(Math.random() * canvas_width, Math.random() * canvas_height);
			context.lineTo(Math.random() * canvas_width, Math.random() * canvas_height);
			context.stroke();
		}
		for (var i = 0; i <= 30; i++) { //验证码上显示小点
			context.strokeStyle = randomColor();
			context.beginPath();
			var x = Math.random() * canvas_width;
			var y = Math.random() * canvas_height;
			context.moveTo(x, y);
			context.lineTo(x + 1, y + 1);
			context.stroke();
		}
	}

	function randomColor() { //得到随机的颜色值
		var r = Math.floor(Math.random() * 256);
		var g = Math.floor(Math.random() * 256);
		var b = Math.floor(Math.random() * 256);
		return "rgb(" + r + "," + g + "," + b + ")";
	}
</script>