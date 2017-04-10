<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		$mid=session('MID');
		if(empty($mid)){
			$this->error('请先登录',U('Home/Index/index'));
		}
	}

	// public function _initialize(){
	//     if(isMobile()){
	//         C('DEFAULT_MODULE','Mobile');
	//     }
	// }
}