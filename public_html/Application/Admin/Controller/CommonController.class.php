<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		$aid=session('AID');
		if(empty($aid)){
			$this->error('请先登录',U('Admin/Login/index'));
		}
	}
}