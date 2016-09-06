<?php
     class RegisterAction extends Action{
		 public function register(){
			 $this->display(); 
		 }
		 //检查用户是否注册过
		 public function checkName(){
			 $username=$_GET['username'];
			 $user=M('User');
			 $where['username']=$username;
	         $count=$user->where($where)->count();
             if($count){
				 echo '用户名已被注册！';
			 }else{
				 echo '用户名正确';
			 }			 
		 }
		 //注册
		 public function doReg(){
			// $username=$_POST['username'];
			 //$password=$_POST['password'];
			 //$repassword=$_POST['repassword'];
			 //$sex=$_POST['sex'];
			  
			 $user=D('User');
			 //$data['username']=$username;
			 //$data['password']=$password;
			 //$data['sex']=$sex;
		     if(!$user->create()){
				 $this->error($user->getError());
			 }
			 $lastId=$user->add();
			 if($lastId){
				 $this->redirect('Index/index');
			 }else{
				 $this->error('用户注册失败');
			 }
		 }
	 }
?>