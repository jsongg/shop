<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->cookielogin();
        $this->display('index');
    }

    // 登陆页展示
    public function loginshow(){
        $this->display();
    }

    // 注册页展示
    public function regshow(){
        $this->display();
    }

    // 登录
    public function login(){
    	$phone=htmlspecialchars($_POST['phone']);
    	$pwd=MD5($_POST['pwd']);
        $autoLogin=intval($_POST['autoLogin']);
        $db=D('member');
    	$res=$db->where("phone='$phone' AND pwd='$pwd'")->find();
        // print_r($res);die;
    	if($res){
            $id=$res['id'];
            $db->autoLogin=$autoLogin;
            $db->where("id=$id")->save();
            if($autoLogin==1){
                cookie('PHONE',$phone,3600*24*7);
                cookie('PWD',$pwd,3600*24*7);
                cookie('MID',$id,3600*24*7);
            }
            session('PHONE',$phone);
            session('MID',$id);
    		$this->success('登陆成功',U('Mobile/Index/index'));
    	}else{
    		$this->error('账户名或密码错误');
    	}
    }

    // 注册
    public function reg(){
    	$data['phone']=htmlspecialchars($_POST['phone']);
    	$data['yzm']=htmlspecialchars($_POST['yzm']);
    	$data['pwd']=MD5($_POST['pwd']);
    	$data['autoLogin']=intval($_POST['autoLogin']);
    	$data['time']=date('Y-m-d H:i:s');

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
    		if($res){
    			$this->success('注册成功',U('Mobile/Index/loginshow'));
    		}else{
    			$this->error('注册失败');
    		}
    	}
    }

    // 验证是否已经注册
    public function verifyreg(){
        $phone=htmlspecialchars($_GET['phone']);
        $db=D('member');
        $res=$db->where("phone=$phone")->find();

        if($res){
            echo json_encode(array("msg"=>"<span style='color:red'>*该用户已存在</span>","status"=>1));    
        }else{
            echo json_encode(array("msg"=>"<span style='color:green'>√可以注册</span>","status"=>0)); 
        }
        
    }

    // 核心技术
    public function core(){
        // 陶瓷识别
        $db=D('article');
        $tc=$db->where("title='陶瓷识别'")->find();
        $qt=$db->where("title='青铜识别'")->find();
        $tj=$db->where("title='铜镜识别'")->find();
        $ht=$db->where("title='和田玉籽料识别'")->find();
        $tc=htmlspecialchars_decode($tc['content']);
        $qt=htmlspecialchars_decode($qt['content']);
        $tj=htmlspecialchars_decode($tj['content']);
        $ht=htmlspecialchars_decode($ht['content']);
        $this->assign('taoci',$tc);
        $this->assign('qingtong',$qt);
        $this->assign('tongjing',$tj);
        $this->assign('hetian',$ht);
        $this->display();
    }

    // 公司团队
    public function team(){
        $this->display();
    }

    // 帮助中心"title='识别库介绍' or  title='评估库介绍' or title='识别库介绍' or title='识别库介绍'"
    public function help(){
        // $aid=intval($_GET['aid']);
        // $cdb=D('category');
        // $cdata=$cdb->where('pid=11')->field('cid,cname')->order('cid asc')->select();
        // $this->assign('cdata',$cdata);
        // // echo '<pre>';print_r($cdata);die;
        // foreach($cdata as $v){
        //     $where.=$v['cid'].',';
        //     rtrim($where,',');
        // }
        // $map['cid']=array('in',$where);
        // $db=D('article');
        // $data=$db->where($map)->order('cid asc')->select();
        // foreach($data as $k=>$v){
        //     $data[$k]['cname']=$cdata[$k]['cname'];
        //     if($aid==$v['id']){
        //         $content=htmlspecialchars_decode($v['content']);
        //         $this->assign('content',$content);
        //     }
        // }
        // echo '<pre>';print_r($content);die;
        $db=D('article');
        $data=$db->where("title='识别库介绍'")->order('cid asc')->find();
        // echo '<pre>';print_r($data);die;
        $data['content']=htmlspecialchars_decode($data['content']);
        $this->assign('data',$data);
        
        $this->display();
    }

    // 评估库介绍
    public function pgshow(){
        $db=D('article');
        $data=$db->where("title='评估库介绍'")->order('cid asc')->find();
        // echo '<pre>';print_r($data);die;
        $data['content']=htmlspecialchars_decode($data['content']);
        $this->assign('data',$data);
        $this->display();
    }

    // 设备使用
    public function sbuse(){
        $db=D('article');
        $data=$db->where("title='设备使用'")->order('cid asc')->find();
        // echo '<pre>';print_r($data);die;
        $data['content']=htmlspecialchars_decode($data['content']);
        $this->assign('data',$data);
        $this->display();
    }

    // 充值活动
    public function czactive(){
        $db=D('article');
        $data=$db->where("title='充值活动'")->order('cid asc')->find();
        // echo '<pre>';print_r($data);die;
        $data['content']=htmlspecialchars_decode($data['content']);
        $this->assign('data',$data);
        $this->display();
    }

    // 是否cookie一周登录
    public function cookielogin(){
        $k=$_COOKIE;
        $cookiephone=cookie('PHONE');
        $cookiepwd=cookie('PWD');
        // echo $cookiephone;var_dump($k);die;
        $db=D('member');
        if(!($cookiephone==''||$cookiepwd=='')){
            $res=$db->where("phone='$cookiephone' and pwd='$cookiepwd'")->find();
            // var_dump($res);die;
            if($res){
                session('PHONE',$res['phone']);
                session('MID',$res['id']);
            }
        }
    }
}