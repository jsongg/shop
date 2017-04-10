<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
	static public $data;
	public function __construct(){
		if(empty(self::$data)){
			self::$data=4;
		}
	}
	public function mytest(){
		self::$data=4;
		echo 'mytest';
	}
	public function mytest2(){
		echo self::$data;
		echo 'mytest2';
	}
}