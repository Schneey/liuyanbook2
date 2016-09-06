<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>注册页面</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/register.css" />
	    <script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script>
		     $(function(){
			     var error=new Array();
  			     $('input[name="username"]').blur(function(){
			           var username=$(this).val();
					   $.get('__URL__/checkName',{'username':username},function(data){
	                         if(data=='用户名已被注册！'){
							      error['username']=1;
							      $('input[name="username"]').after('<p id="umessage" style="color:red">该用户名已被注册！</p>');
							 }else{
							      error['username']=0;
							      $('#umessage').remove();
							 }				   
	                       });
				        }); 
				//提交表单
				$('img.register').click(function(){
				        if(error['username']==1){
						    return false;
						}else{
						    $('form[name="myForm"]').submit();
						}
				});
			 });
		</script>
	</head>
	<body>
	       <form action='__URL__/doReg' method='post' name='myForm'>
		    用⊙户名：<input type='text' name='username'/><br/>
			密⊙⊙码：<input type='password' name='password'/><br/>	
			确认密码：<input type='password' name='repassword'/><br/>	
            性⊙⊙别：<input id='sex' type='radio' name='sex' value='1' class='radio'/>男
 			           <input id='sex2' type='radio' name='sex' value='0' class='radio'/>女<br/>
			验证⊙码：<input type='text' name='code'/><img src='__APP__/Public/code' onclick="this.src=this.src+'?'+Math.random"/><br/>			
		   
		   <img class='register' src='__PUBLIC__/Images/register.gif' title='login' />
		   <img class='reset' src='__PUBLIC__/Images/reset.gif'/><br/>
		   </form>
    </body>
</html>