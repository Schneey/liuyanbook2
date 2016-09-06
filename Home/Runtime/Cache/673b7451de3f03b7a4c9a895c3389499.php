<?php if (!defined('THINK_PATH')) exit();?>
<html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>right</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/right.css" />
	</head>
	<body>

		<div id='content'>
			<a class='out' href='__URL__/index'>返回</a>
	     <form  action='__APP__/Message/doMess' method='post' enctype='multipart/form-data' >
		     <a>留言题目</a> <input type='text' name='title'/><br/>
			  <a id='liu'>留言内容 </a><textarea name='content'></textarea><br/>
			  <a>留言图片 </a><input type='file' name='filename'/><br/>
			  <input class='submit' type='submit'/>
		 </form>
         
     </div>
	</body>
</html>