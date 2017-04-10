<?php
namespace Member\Controller;
use Think\Controller;
// use Submail\lib;

class SubmailController extends Controller{
       //在类初始化方法中，引入相关类库    
    public function _initialize() {
    	vendor('Submail.lib.messagexsend');
    	vendor('Submail.lib.message');
    }

    public function dosms(){
        $phone=htmlspecialchars($_GET['phone']);
        // echo $phone;die;
    	$message_configs['appid']='13367';
    	$message_configs['appkey']='05ae2dd2f42b5f99c94324b8303df9a8';
	    $submail=new \Submail\lib\messagexsend($message_configs);
        $submail->setTo($phone);
	    // $submail->setTo('15383299890');
	    $submail->SetProject('Spiex2');
	    $yzm=$this->yzm();
        session('yzm',$yzm);
	    $submail->AddVar('code',$yzm);
	    $submail->AddVar('time','10分钟');
	    $xsend=$submail->xsend();
	    echo json_encode(array("yzm"=>$yzm,"xsend"=>$xsend,"phone"=>$phone));
	    // print_r($xsend);
	}

	// 验证码
    public function yzm(){
    	$yzm=rand(100000,999999);
    	return $yzm;
    }

    // ajax发送验证码
    // public function ajaxdosms(){
    //     echo $this->dosms();
    // }

}