<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
	  $this->display(); 
	  
	 }
	 public function left(){
		 //获取message表中的所有数据
		 $message=D('Message');
		 import('ORG.Util.Page'); //导入分页类
		 $count=$message->count(); //获取数据的总数
		 $page= new Page($count,4);
		 $page->setConfig('header','条留言');
		 $show=$page->show();  //返回分页信息
		 $arr=$message->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		// foreach($arr as $v){
		//	 $id=$v['uid'];
		//	 $user=M('User');
		//	 $arr_user[]=$user->field('username')->find($id);
		// }
		 $this->assign('list',$arr);
		 $this->assign('show',$show);
		 $this->display();
	 }
	 public function message(){
		 $this->display();
	 }
	 public function search(){
       
	 	$this->display();
	 }
	 public function dosearch(){
         	  $title=D('Message');
         	  $where['title']=$_POST['title'];
              $arr=$title->where($where)->find();
              $this->assign('data',$arr);
               $this->display();
         }
     public function person(){
     	$m=M('User');
     	$where['username']=$_SESSION['username'];
     	$arr=$m->field(sex)->where($where)->find();
     	if($arr=1){
     		$this->assign('sexx',男);
     	}else{
     		$this->assign('sexx',女);
     	}
     	$this->display();
     }
        
	
} 