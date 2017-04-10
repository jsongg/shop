<?php
namespace Member\Controller;
use Think\Controller;
// use Submail\lib;

class SubmailController extends Controller{
       //在类初始化方法中，引入相关类库    
    public function _initialize() {
    	vendor('Submail.lib.messagexsend');
    	vendor('Submail.lib.message');
    	// vendor('Submail.lib.addressbookmail');
    	// vendor('Submail.lib.addressbookmessage');
    	// vendor('Submail.lib.internationalsmsmultixsend');
    	// vendor('Submail.lib.internationalsmssend');
    	// vendor('Submail.lib.internationalsmsxsend');
    	// vendor('Submail.lib.intersms');
    	// vendor('Submail.lib.mail');
    	// vendor('Submail.lib.mailsend');
    	// vendor('Submail.lib.mailxsend');
    	// vendor('Submail.lib.message');
    	// vendor('Submail.lib.messagelog');
    	// vendor('Submail.lib.messagemultixsend');
    	// vendor('Submail.lib.messagesend');
    	// vendor('Submail.lib.messagetemplatedelete');
    	// vendor('Submail.lib.messagetemplateget');
    	// vendor('Submail.lib.messagetemplatepost');
    	// vendor('Submail.lib.messagetemplateput');
    	// vendor('Submail.lib.messagexsend');
    	// vendor('Submail.lib.mobiledata');
    	// vendor('Submail.lib.mobiledatacharge');
    	// vendor('Submail.lib.mobiledatapackage');
    	// vendor('Submail.lib.mobiledatatoservice');
    	// vendor('Submail.lib.multi');
    	// vendor('Submail.lib.voice');
    	// vendor('Submail.lib.voiceverify');

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