<?php
namespace Member\Controller;
use Think\Controller;
class IndexController extends CommonController {
    // 会员中心更改资料
    public function index(){
        $this->display();
    }
    // 更改资料注册
    public function reg(){
    	// echo '<pre>';print_r($_SESSION);print_r($_COOKIE);die;
    	$phone=htmlspecialchars($_POST['phone']);
    	$yzm=htmlspecialchars($_POST['yzm']);
    	$data['pwd']=MD5($_POST['pwd']);
    	$data['time']=date('Y-m-d H:i:s');
    	$id=session('MID');
    	if($yzm!=session('yzm')){//记得把==改回来成！=
    		$this->error('验证码错误');
    	}else{
    		$db=D('member');
    		$res=$db->where("id=$id")->save($data);
    		if($res){
    			$this->success('修改成功');
    		}else{
    			$this->error('修改失败');
    		}
    	}
    }
    // 修改密码
    public function editPwd(){
        $id=session('MID');
        if(IS_POST){
            $pwd=MD5($_POST['pwd']);
            $pwd1=MD5($_POST['pwd1']);
            $pwd2=MD5($_POST['pwd2']);
            $db=D('Member');
            $res=$db->where("id=$id")->find();
            if($pwd==$res['pwd']){
                if($pwd1!=$pwd2){
                    $this->error('两次密码不一致');
                }else{
                    $db->pwd=$pwd1;
                    $pres=$db->where("id=$id")->save();
                    if($pres){
                        $this->success('密码修改成功');
                        exit();
                    }else{
                        $this->error('密码修改失败');
                    }
                }
            }else{
                $this->error('原密码错误');
            }
        }
        $this->display();
    }
    // 安全退出显示
    public function loginOut(){
        $this->display();
    }
    // 安全退出逻辑
    public function loginOutTrue(){
        session(null);
        cookie('PHONE',null);
        cookie('PWD',null);
        $this->success('安全退出',U('Home/Index/index'));
    }
    // 验证码
    private function yzm(){
    	$yzm=rand(100000,999999);
    	return $yzm;
    }
}