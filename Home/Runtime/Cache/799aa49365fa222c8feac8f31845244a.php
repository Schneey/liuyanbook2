<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=uft-8">
		<title>left</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/left.css" />
	</head>
	<body>
		  <div id='hi'>
		  	<a href='__URL__/index' class='out'>返回</a>
		  <div id='content'>
		  	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><table width="400" align="enter">
		      <tr><td>留言题目</td><td><?php echo ($vo["title"]); ?></td></tr> 
			  <tr><td>留言内容</td><td> <?php echo ($vo["content"]); ?> </td></tr>
			  <tr><td>留言时间：</td><td> <?php echo (date('Y m d H:i:s',$vo["time"])); ?></td></tr> 
			  <tr><td>留言用户：</td><td> <?php echo ($vo["username"]); ?></td></tr>
			  <tr><td>附件名称：</td><td> <?php echo ($vo["filename"]); ?></td></tr> 
		      <hr/><br/>
		      </table><?php endforeach; endif; ?>
		  <hr/>
		  <br/>

		  <p><?php echo ($show); ?></p>
		</div>
	</div>
	</body>
</html>