<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		$this->display();
	}
	
	/**
	 * 登陆
	 */
	public function login(){
		if(IS_POST === false) exit();
		
		$name = addslashes($_POST['username']);
		$pwd = MD5($_POST['password']);
		$db = D('admin');
		$where = array('name'=>$name);
		$info = $db->where($where)->find();
		// echo '<pre>';var_dump($info);echo '<hr>';echo $name;die;
		if($info['pwd'] !=$pwd){
			$this->error('登陆失败!','index');
		}else{
			session('AID',$info['id']);
			$this->success('登陆成功!',U('Admin/Index/index'));
		}
	}
	
	
	/**
	 * 显示验证码
	 */
	public function showCode(){

		$config =    array(    
		'length'      =>    4,       
		'fontSize'	  =>	200
		);
		$code = new \Think\Verify($config);
		
		if(IS_AJAX){
			$data =  array('status'=>false);
			if($code->check($_POST['code'])){
				$data['status'] = true;
			}
			exit(json_encode($data));
		}else{
			$code->entry();
		}
	}
	/**
	 * 校验验证码
	 */
	// public function checkCode(){
	// 	check();
	// 	$data =  array('statis'=>false);
	// 	if($_SESSION['d2d977c58444271d9c780187e93f80e5']['verify_code'] == strtoupper($_POST['code'])){
	// 		$data['status'] = true;
	// 	}
	// 	exit(json_encode($data));
	// }
	
	/**
	 * 退出登录
	 */
	public function logout(){
		session_destroy();
		session_unset();
		$this->success('已退出!',U('Home/Index/index'));
	}
	
}
