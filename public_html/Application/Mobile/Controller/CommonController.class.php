<?php
namespace Mobile\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		$mid=session('MID');
		if(empty($mid)){
			$this->error('请先登录',U('Mobile/Index/loginshow'));
		}
	}

	// public function _initialize(){
	//     if(!isMobile()){
	//         C('DEFAULT_MODULE','Home');
	//     }
	// }
}