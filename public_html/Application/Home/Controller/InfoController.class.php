<?php
namespace Home\Controller;
use Think\Controller;
class InfoController extends Controller{
	
	// 文字搜索图片列表
	public function piclist($data){
		$data2=$data['data']['piclist'];
		// session('pic',$data2);
		// echo '<pre>';var_dump($data2);die;
		$this->assign('data',$data2);
		$this->display('Info/piclist');
		// echo '<pre>';print_r($data);die;
	}
	// 渲染文字搜付款
	public function searchpay($id,$type){
		$mid=session('MID');
		// echo $mid;die;
		if(empty($mid)){
			header('content-type:text/html;charset=utf8');
			echo "<script>alert('请先登录');history.go(-1);</script>";
			exit();
		};
		session('pid',$id);
		session('type',$type);
		$this->assign('goodid',$id);
		$this->assign('goodname',$type);
		$this->display();
	}
	// 付款
	public function pay(){
		$mid=session('MID');
		$price=intval($_POST['price']);
		$db=D('Member/Account');

		if(!($price==20||$price==50)){
			header('content-type:text/html;charset=utf-8');
			exit('非法金额');
		}
		
		$res=$db->where("mid=$mid")->order('id desc')->find();
		if($res['balance']<$price){
			$this->error('账户余额不足，请充值！',U('Member/Account/rechargeTc'));
			exit();
		}
		if($res['voucher']>0){
			if(($res['voucher']-$price)>0){
				// echo 3;die;
				$convoucher=$price;
				$voucher=$res['voucher']-$convoucher;
				$data['convoucher']=$convoucher;
				$data['voucher']=$voucher;
				$data['mid']=$mid;
				$data['balance']=$res['balance'];
				$data['time']=date('Y-m-d H:i:s');
				$db->add($data);
			}else{
				// echo 2;die;
				$consume=-($res['voucher']-$price);
				$data['mid']=$mid;
				$data['consume']=$consume;
				$data['balance']=$res['balance']-$consume;
				$data['convoucher']=$price-$consume;
				$data['voucher']=0;
				$data['time']=date('Y-m-d H:i:s');
				$db->add($data);
			}
		}else{
			// echo 1;die;
			$consume=$price;
			$balance=$res['balance']-$consume;
			$data['consume']=$consume;
			$data['balance']=$balance;
			$data['mid']=$mid;
			// $data['amount']=$amount;
			// $data['voucher']=$res['voucher'];
			$data['time']=date('Y-m-d H:i:s');
			$db->add($data);
		}
		// print_r($_POST['goodid']);die;
		$this->order($_POST['goodid'],$_POST['goodname'],$price);
		// echo '<pre>';print_r($res);die;
		$this->display();
	}

	// 生成订单信息
	public function order($goodid,$goodname,$price){
		// print_r($goodid);die;
		$db=M('order');
		// echo date('YmdHis');die;
		$data['orderNum']=date('YmdHis').rand(1000,9999);
		$data['goodId']=$goodid;
		$data['goodName']=$goodname;
		$data['amount']=$price;
		$data['time']=date('Y-m-d H:i:s');
		$data['mid']=session('MID');
		$res=$db->add($data);
		if(!$res){
			$this->error('生成订单失败');
		}
	}

	// 详情
	public function detail($id,$type){
		if(!session('MID')){
			$this->error('请先登录',U('Home/Index/index'));
		};
		// $id=session('pid');
		// $type=session('type');

		// echo '<pre>';var_dump($id);
		// echo '<pre>';var_dump($type);
		// $getdetail=array("id"=>"5dd3d912-de19-11e6-8386-00163e302e1c","token"=>"86AEC542-0694-4888-9047-18D7CB7A0D54,1486711092,I7J5iva691p4pOQ1aftvvlMhoIJobmXPpEmcq5J0mcLKOW1D6LbEbz7JCyMjbkm56MacM6MBXLDeO3afaVNbaZQE9Qvw03y3PeiNcqmCPRBBmKtAgUh8ITocgrxAStfI");
		// $mstr=MD5('ADB4FDAC-C286-4F08-B6F1-D84AE3A26F6A,12345678901234567890123456789013,1486730546');
		// $getdetail=array("id"=>"5dd3d912-de19-11e6-8386-00163e302e1c","token"=>"86AEC542-0694-4888-9047-18D7CB7A0D54,1486711092,782ddcddfa7b1917193d2b97f1f2d690");

		$appid='ADB4FDAC-C286-4F08-B6F1-D84AE3A26F6A';
		$secret='12345678901234567890123456789013';
		$st=time();
		$t=MD5($appid.','.$secret.','.$st);
		$mt=$appid.','.$st.','.$t;
		
		$getdetail['id']=$id;
		$getdetail['type']=$type;
		$getdetail['token']=$mt;
		// var_dump($getdetail);die;
		// $getdetail=array("id"=>$id,"type"=>$type,"token"=>"");
		$data=get_curl_json($getdetail,'getdetail');
		// $data2=$data['data'];
		$data2=json_decode($data,trur);
		$data3=json_decode($data2,trur);


		header('content-type:text/html;charset=utf-8');
		// echo '<pre>';print_r($data3);die;
		// $data2=Array ( 'status' => 0 ,'data' => Array ( 'pictures' => Array ( ) ,'name' =>'清末古董陶瓷' ,'infos' =>'ming1' ,'desc' =>'ming2' ) ,'message' =>'ming3' );
		$info=$data3['data']['infos'];
		$infos=explode("##",trim($info,"##"));
		foreach($infos as $k=>$v){
			$infos[$k]=explode("::",$v);
		}
		$desc=$data3['data']['desc'];
		// echo '<pre>';print_r($infos);echo $desc;die;
		$this->assign('infos',$infos);
		$this->assign('desc',$desc);
		$this->assign('data',$data3);
		$this->assign('piclist',$data3['data']['pictures']);
		
		$this->display();
	}
}