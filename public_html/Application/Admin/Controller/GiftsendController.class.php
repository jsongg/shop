<?php
namespace Admin\Controller;
use Think\Controller;
class GiftsendController extends Controller {
	public function index(){
		$flag=$_POST['flag'];
		$where='status=0 or status=1';
		if($flag==1) $where='status=1';
		if($flag==2) $where='status=0';
		$db=M('info');
		$count = $db->where($where)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		$data = $db->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}

	public function sendgift(){
		$gids=$_POST['gid'];
		$db=M('info');
		$data['status']=1;
		$res=$db->where(array("id"=>array("IN",$gids)))->save($data);
		if($res){
			$this->success('设置发货成功',U('index'));
		}else{
			$this->error('设置发货失败',U('index'));
		}

	}
}