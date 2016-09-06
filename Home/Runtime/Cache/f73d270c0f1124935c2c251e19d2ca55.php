<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>留言板首页</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/search.css" />
	</head>
    <body>
        <div id='content'>
            <a href='__URL__/index' class='out'>返回</a>
          <div id='content'>
    	<form action='__URL__/dosearch' method='post'>
    		<a class='hi'>留言题目查找</a><input type='text' name='title'/><br/>
    		<input class='submit' type='submit'/><br/>

    	</form>
    </div>
    </body>
    </html>