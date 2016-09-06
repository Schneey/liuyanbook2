<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>登录页面</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
	    <script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script>
		     $(function(){
                 $('img[title="login"]').click(function(){
				     $('form[name="myForm"]').submit();
				 });
				 $('img[class="register"]').click(function(){
				     window.location='__APP__/Register/register';
				 });
  			     
			 });
		</script>
	</head>
	<body>
		   <div id='left' >
		   	<img src='__PUBLIC__/Images/bian.gif' alt='picture show'/>
		   </div>
	       
           <div id='tb'>
	       <form action='__URL__/doLogin' method='post' name='myForm'>
		    用户名：<input type='text' name='username'/><br/>
            密⊙码：<input type='password' name='password'/><br/>	
            验证码：<input type='text' name='code'/><img src='__APP__/Public/code' onclick="this.src=this.src+'?'+Math.random"/><br/>			
		   <img class='submit' src='__PUBLIC__/Images/login.gif' title='login' />
		   <img class='register' src='__PUBLIC__/Images/register.gif'/><br/>
		   </form>
		</div>
    </body>
</html>