<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>活动后台登录系统</title>
    <style type="text/css">
        *{
            margin: 0px;
            padding:0px;
        }
        html{
        	font-size: 20px;
        }
        .header{
            width: 90%;
			height: 4rem;
			min-width: 60rem;
			overflow: hidden;
			background-color: white;
			box-shadow:-0.25rem 0 1rem 0 rgba(193,203,254, 0.25),
			0.25rem 0 1rem 0 rgba(193,203,254, 0.25),
			0 -0.25rem 1rem 0 rgba(193,203,254, 0.25);
			margin: auto;
			border-radius: 0.2rem;
			padding: 0 2rem;
			box-sizing: border-box;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .log{
            height: 100%;
			float: left;
			font-weight: bolder;
			line-height: 4rem;
			font-size: 1.5rem;
			overflow: hidden;
			position: relative;
        }
        .log>img{
        	width:1.8rem;
			height: 1.8rem;
			float: left;
			position: absolute;
			top:50%;
			transform: translateY(-50%);
        }
        .log>span{
        	margin-left: 2rem;
        }
        .login_nav{
            float: right;
            font-size: 20px;
        }
        .wrap{
            width: 20rem;
            margin: 5rem auto;
            box-shadow:0 0 1rem rgba(193,203,254, 0.5);
            padding: 0 2.5rem 0.1rem;
            box-sizing: border-box;
        }
        .wrap_header{
            line-height: 50px;
            height: 50px;
            font-size: 0px;
            overflow: hidden;
        }
        .wrap_header>a{
            font-size: 20px;
            font-weight: bold;
            float: left;
            display: block;
            width: 50%;
            height: 100%;
            box-sizing: border-box;
            text-align: center;
            border-bottom: 1px solid #f7f7f7;
            cursor: pointer;
        }
        .wrap_header>a:hover{
            border-bottom: 2px solid #abbdff;
        }
        .wrap_header>.header_border{
            border:solid #abbdff;
            border-width:0px 0px 2px 0px;
        }
        form{
            margin: auto;
        }
       .input_wrap{
        	border: 1px solid rgba(193,203,254, 1);
        	margin-top: 1.5rem;
        	line-height: 1.5rem;
        	box-sizing: border-box;
        	padding: 0.3rem 0.2rem;
        	font-size: 0.8rem;
        	font-weight: bolder;
        	background-color: #f7f7f7;
        }
        label {
            text-align: left;
            display: inline-block;
            width: 5rem;
            line-height: 1.5rem;
        }
        input {
        	font-size: 0.8rem;
            width: 8rem;
            border-radius: 3px;
            box-sizing: border-box;
            outline: none;
            border: none;
            background-color: #f7f7f7;
        }
        .submit{
            display: block;
            margin: 2rem auto;
            background-color: #abbdff;
            border-radius: 2rem;
            height: 2rem;
            line-height: 2rem;
            font-size: 1rem;
            color: #ffffff;
            font-weight: bolder;
        }
        .register{
        	display: none;
        }
    </style>
</head>

<body style="width: 100%; height: 100%; ">
<header class="header">
    <div class="log">
    	<img src="http://static.yhctech.com/frontend/img/activty_logo.png"/>
    	<span>
    		活动后台管理登录系统
    	</span>
    </div>
    <!--<div class="login_nav">
        <a href="login_background.html">登录</a>|
        <a href="">注册</a>
    </div>-->
</header>
<div class="wrap">
    <div class="wrap_header">
        <a onclick="$('.log_in').show().siblings('.register').hide(),$(this).addClass('header_border').siblings('a').removeClass('header_border')" class="header_border">
            登录
        </a>
        <a onclick="$('.register').show().siblings('.log_in').hide(),$(this).addClass('header_border').siblings('a').removeClass('header_border')">
            注册
        </a>
    </div>
    </form>
    <div class="log_in" >
        <form id="log_in_post" method="post">
        	<div class="input_wrap">
        		 <label for="register_user_name">用户名：</label><input type="text" name="user_name" id="register_user_name" required="required" placeholder="请输入您的用户名"/>
        	</div>
           <div class="input_wrap">
           		 <label for="user_pwsd">密码：</label><input type="password" name="user_pwd" id="user_pwsd" required="required" placeholder="请输入您的密码"/>
           		 	<img src=""/>
           </div>
            <input type="submit" class="submit" id="log_in" value="提交">
        </form>
    </div>
    <div class="register">
		<form id="register_post">
		<div class="input_wrap">
			<label for="register_user_name">用户名：</label><input type="text" name="user_name" class="register_user_name" required="required" placeholder="请输入用户名"/>
		</div>
		<div class="input_wrap">
			<label for="">用户密码：</label><input type="password" name="user_pwd" class="user_pwd" required="required" placeholder="请输入密码"/>
		</div>
		<div class="input_wrap">
			<label for="">再输入一次：</label><input type="password" class="repet_pwd" required="required" placeholder="请再次输入密码"/>
		</div>
		<div class="input_wrap">
			<label for="lesson_id">lesson_id：</label><input type="text" class="lesson_id" name="lesson_id" required="required" placeholder="请输入lesson_id"/>
		</div>
		<input type="button" class="submit" id="register_submit" value="注册">
	</form>
		</div>
</div>
</body>
<script src="http://yhc-oss-hb2-001.oss-cn-beijing.aliyuncs.com/frontend/js/jquery-3.0.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://yhc-oss-hb2-001.oss-cn-beijing.aliyuncs.com/frontend/js/register_background.js"></script>
</html>

