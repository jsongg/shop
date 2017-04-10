<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 用户注册
    public function register(){
    	// $phone=htmlspecialchars($_POST['phone']);
    	$pwd=MD5($_POST['password']);
        
        $data['phone']=htmlspecialchars($_POST['phone']);
    	$data['yzm']=htmlspecialchars($_POST['yzm']);
    	// $data['pwd']=MD5($_POST['pwd']);
    	$data['autoLogin']=intval($_POST['autoLogin']);
    	$data['time']=date('Y-m-d H:i:s');
// 47.90.16.105
        $phone=$data['phone'];
        $db=D('member');
        $res=$db->where("phone=$phone")->find();
        if($res){
            $this->error('账户已存在');
            exit();
        }
        // $Submail=new \Member\Controller\SubmailController();
        // $yzm=$Submail->dosms();
    	if($data['yzm']!=session('yzm')){//记得把==改回来成！=
    		$this->error('验证码错误');
    	}else{
            session('PHONE',$data['phone']);
            if($data['autoLogin']==1){
                cookie('PHONE',$data['phone']);
                cookie('PWD',$data['pwd']);
            }
    		$db=D('member');
    		$res=$db->add($data);
    		$obj=new \Org\Util\Response();
    		if($res){
    			$obj->json($code,$message='',$data=array());
    		}else{
    			$obj->json($code,$message='',$data=array());
    		}
    	}
    }
	// 登录
    public function login(){
        
    }
	// 用户余额查询
    public function getuserbalance(){
        
    }
    // 充值套餐查询
    public function gettc(){
        
    }
    // 用户充值
    public function usercharge(){
        
    }
    // 用户消费
    public function userconsume(){
        
    }
    // 充值记录
    public function userchargerecord(){
        
    }
    // 消费记录
    public function userconsumerecord(){
        
    }
}