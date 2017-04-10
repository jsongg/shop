<?php
namespace Admin\Controller;
use Think\Controller;
class RootController extends CommonController {

    public function index(){

        $this->display();
    }

    // 修改密码
    public function editpwd(){
    	if(IS_POST){
    		$oldpwd=MD5(htmlspecialchars($_POST['oldpwd']));
    		$pwd=MD5(htmlspecialchars($_POST['pwd']));
	    	$pwd2=MD5(htmlspecialchars($_POST['pwd2']));

	    	$db=D('admin');
	    	$data=$db->where("id=1")->find();
	    	if($data['pwd']!=$oldpwd){
	    		$this->error('密码不正确');
	    		exit();
	    	}
	    	if($pwd!=$pwd2){
	    		$this->error('两次密码不一致');
	    	}else{
	    		$db->pwd=$pwd2;
	    		$res=$db->where("id=1")->save();
	    		if($res){
					$this->success('密码修改成功');	
					exit();    			
	    		}else{
	    			$this->error('密码修改失败');	
	    			exit();  
	    		}
	    	}
    	}
    	$this->display();
    }

    // 推出登录
    // public function logout(){
    // 	session(null);
    // }
}