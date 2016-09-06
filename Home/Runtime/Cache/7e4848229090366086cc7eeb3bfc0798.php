<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>留言板首页</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/index.css" />
	</head>
    <body>
    
        
          
      
    	<div id='header'>
            <p class='nav'>       
    		<a class='url1'href='__URL__/right'> message</a> 
    		<a class='url' href='__URL__/search'>search</a>
    		<a class='url1' href='__URL__/left'>show</a>
    		<a class='url' href='__URL__/person'>personal</a>
    		</p>
            
            <p class='user'>
            <a class='username'> <?php echo (session('username')); ?> </a> 
             <a class='out' href='__APP__/Login/doLogout' target='_top'>退出</a>
             
        </p>

    	</div>

    </body>
</html>