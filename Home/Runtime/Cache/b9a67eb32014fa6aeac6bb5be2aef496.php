<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>留言板</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/person.css" />
	</head>
    <body>
    	<form>
    	<a href='__URL__/index' class='out'>返回</a>
    		<p class='user'><a class='user'>username</a> <?php echo (session('username')); ?></p>
    		<p class='sex' ><a class='sex'>s e x</a> <?php echo ($sexx); ?></p>
    		
    	</form>
                  
    </body>

    
    </html>