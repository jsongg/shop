<?php
namespace Member\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		// $mid=session('MID');
		// if(empty($mid)){
		// 	$this->error('请先登录',U('Home/Index/index'));
		// }
	}
}