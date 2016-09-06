<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>留言板首页</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/dosearch.css" />
	</head>
	<body>
		<div id='content'>
			<a href='__URL__/search' class='out'>返回</a>
          <p> <a class='co'>title</a><?php echo ($data["title"]); ?></p>
          <p> <a class='co'>content</a><?php echo ($data["content"]); ?></p>
          <p><a class='co'>filename</a><?php echo ($data["filename"]); ?></p>
		  <p><a>time</a> <?php echo (date('Y m d H:i:s',$data["time"])); ?></p>
		
       </div>
		</body>
		</html>