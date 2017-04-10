<?php
namespace Member\Controller;
use Think\Controller;
class AccountController extends CommonController{
	// 套餐充值
	public function rechargeTc(){
		$this->display();
	}
	// 充值
	public function recharge(){
		$taocan=intval($_POST['taocan']);
		$vip_name=htmlspecialchars($_POST['vip_name']);
		$vip_tel=htmlspecialchars($_POST['vip_tel']);
		$vip_addr=htmlspecialchars($_POST['vip_addr']);
		$price=intval($_POST['price']);
		
		switch($taocan)
		{
		case 1:
			$this->assign('amount',C('AMOUNT1'));
			$this->assign('voucher',C('VOUCHER1'));
			// $this->assign('flag',1);
			break;
		case 2:
			$this->assign('amount',C('AMOUNT2'));
			$this->assign('voucher',C('VOUCHER2'));
			// $this->assign('flag',2);
			break;
		case 3:
			$this->assign('amount',C('AMOUNT3'));
			$this->assign('voucher',C('VOUCHER3'));
			// $this->assign('flag',3);
			break;
		case 4:
			$this->assign('amount',C('AMOUNT4'));
			$this->assign('voucher',C('VOUCHER4'));
			// $this->assign('flag',4);
			break;
		case 5:
			$this->assign('amount',C('AMOUNT5'));
			$this->assign('voucher',C('VOUCHER5'));
			// $this->assign('flag',5);
			break;
		case 6:
			$this->assign('amount',C('AMOUNT6'));
			// $this->assign('voucher',$voucher6);
			// $this->assign('flag',6);
			break;
		case 7:
			$this->assign('amount',C('AMOUNT7'));
			// $this->assign('voucher',$voucher7);
			// $this->assign('flag',7);
			break;
		case 8:
			$this->assign('amount',C('AMOUNT8'));
			// $this->assign('voucher',$voucher8);
			// $this->assign('flag',8);
			break;
		case 9:
			$this->assign('amount',$price);
			// $this->assign('voucher',$voucher9);
			// $this->assign('flag',9);
			break;
		}
		// print_r($_POST);DIE;
		$this->assign('taocan',$taocan);
		$this->assign('vip_name',$vip_name);
		$this->assign('vip_tel',$vip_tel);
		$this->assign('vip_addr',$vip_addr);
		// $this->assign('price',$price);
		$this->display();
	}
	// 充值成功伪代码，实际对接支付宝
	public function rechargeOver(){
		if(IS_POST){
			$mid=session('MID');
			
			$vip_name=htmlspecialchars($_POST['vip_name']);
			$vip_tel=htmlspecialchars($_POST['vip_tel']);
			$vip_addr=htmlspecialchars($_POST['vip_addr']);
			$taocan=intval($_POST['taocan']);
			$amount=intval($_POST['amount']);
			$voucher=intval($_POST['voucher']);
			$db=D('account');
			$data['mid']=$mid;
			$data['amount']=$amount;
			// $data['voucher']=$voucher;
			$data['taocan']=$taocan;
			$data['time']=date('Y-m-d H:i:s');

			$ares=$db->where("mid=$mid")->order('id desc')->find();
			$data['balance']=$ares['balance']+$amount;
			$data['voucher']=$ares['voucher']+$voucher;
			$data['amovoucher']=C('VOUCHER'.$taocan);
			$data['accnum']=date('YmdHis').rand(1000,9999);
			$res=$db->add($data);
			if($res){
				$this->display();
			}else{
				$this->error('充值失败');
			}

			// if($ares){
			// 	$res=$db->where("mid=$mid")->save($data);
			// 	if($res){
			// 		// $this->assign('price',$price);
			// 		$this->display();
			// 	}else{
			// 		$this->error('充值失败');
			// 	}
			// }else{
			// 	$res=$db->add($data);
			// 	if($res){
			// 		// $this->assign('price',$price);
			// 		$this->display();
			// 	}else{
			// 		$this->error('充值失败');
			// 	}
			// }
		}
	}
	// 余额
	public function balance(){
		$mid=session('MID');
		$adb=D('account');
		$res=$adb->where("mid=$mid")->order('id desc')->find();
		$balance=$res['balance'];
		$voucher=$res['voucher'];
		$this->assign('balance',$balance);
		$this->assign('voucher',$voucher);

		$mdb=D('member');
		$mres=$mdb->where("id=$mid")->find();
		$phone=$mres['phone'];
		$this->assign('phone',$phone);
		// echo '<pre>';print_r($res);DIE;

		$this->display();
	}
	// 纪录
	public function record(){
		$mid=session('MID');
		$db=D('account');
		$count=$db->where("mid=$mid and isshow=1")->count();
		$page= new \Think\Page($count,8);
		$show=$page->show();
		$list=$db->where("mid=$mid and isshow=1")->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		// echo '<pre>';print_r($res);DIE;
		$this->display('record');
	}
	// 删除纪录
	public function recordDel($id){
		$db=D('account');
		$db->isshow=0;
		$res=$db->where("id=$id")->save();
		if($res){
			$this->success('删除纪录成功',U('Account/record'));
		}else{
			$this->error('删除纪录失败',U('Account/record'));
		}
	}

	// 支付成功返回页面
	public function successpage(){
		$this->display();
	}

	// 失败返回页面
	public function errorpage(){
		$this->display();
	}
}