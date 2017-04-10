<?php
namespace Mobile\Controller;
use Think\Controller;
class OrderController extends CommonController {
    public function index(){
    	$mid=session('MID');
    	$db=M('order');
    	$count=$db->where("mid='$mid'")->count();
    	$page=new \Think\Page($count,8);
    	$show=$page->show();
    	$list=$db->where("mid=$mid")->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign('list',$list);
		$this->assign('page',$show);

    	// $info=$db->where("mid='$mid'")->select();
    	// echo '<pre>';print_r($info);die;
    	// $this->assign('info',$info);
        $this->display();
    }
}