<?php
    class MessageAction extends Action{
		public function doMess(){
			$message=D('Message');
			$message->create();
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			$message->filename=$info[0]['savename'];
			//$message->time=time();
			//$message->uid=$_SESSION['id'];
			$lastId=$message->add();
			if($lastId){
				$this->success('留言成功');
			}else{
				$this->error('留言失败');
			} 
			 
		}
	}
?>