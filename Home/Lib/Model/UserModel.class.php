<?php
     class UserModel extends Model{
		 protected $_validate=array(
		     array('code','require','验证码必须填写！'),
			 array('code','checkCode','验证码错误！',0,'callback',1),
			 array('username','require','用户名必须填写！'),
			 array('username','','该用户已经存在!',0,'unique',1),
			 array('password','require','密码必须填写！'),
			 array('repassword','password','两次密码不一致！',0,'confirm'),
			
 	     );
         protected function checkCode($code){
			 if(md5($code)!=$_SESSION['code']){
				 return false;
			 }else{
				 return true;
			 }
		 }	
	 }
?>