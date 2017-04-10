<?php
namespace Mobile\Controller;
use Think\Controller;
class PayController extends Controller{
       //在类初始化方法中，引入相关类库    
    public function _initialize() {
        vendor('Alipay.Notify');
        vendor('Alipay.Submit');    
    }
    
    public function doalipay(){
    	// echo 1;die;
        $vip_name=htmlspecialchars($_POST['vip_name']);
        $vip_tel=htmlspecialchars($_POST['vip_tel']);
        $vip_addr=htmlspecialchars($_POST['vip_addr']);
        $taocan=intval($_POST['taocan']);
        $amount=intval($_POST['amount']);
        $voucher=intval($_POST['voucher']);

        $accnum=date('YmdHis').rand(1000,9999);
        session('ACCNUM',$accnum);

        session('VIP_NAME',$vip_name);
        session('VIP_TEL',$vip_tel);
        session('VIP_ADDR',$vip_addr);
        session('TAOCAN',$taocan);
        session('AMOUNT',$amount);
        session('VOUCHER',$voucher);
        
        // echo 1;die;
       //这里我们通过TP的C函数把配置项参数读出，赋给$alipay_config；
       $alipay_config=C('alipay_config'); 

       // echo '<pre>';print_r($alipay_config);die;
 
        /**************************请求参数**************************/
        $payment_type = "1"; //支付类型 //必填，不能修改
        $notify_url = C('alipay.notify_url'); //服务器异步通知页面路径
        $return_url = C('alipay.return_url'); //页面跳转同步通知页面路径
        $seller_email = C('alipay.seller_email');//卖家支付宝帐户必填

        $out_trade_no = $accnum;//商户订单号 通过支付页面的表单进行传递，注意要唯一！
        // $out_trade_no = $_POST['trade_no'];//商户订单号 通过支付页面的表单进行传递，注意要唯一！

        $subject = '古董鉴别';  //订单名称 //必填 通过支付页面的表单进行传递
        // $subject = $_POST['ordsubject'];  //订单名称 //必填 通过支付页面的表单进行传递

        $total_fee = 0.01;   //付款金额  //必填 通过支付页面的表单进行传递
        // $total_fee = $_POST['ordtotal_fee'];   //付款金额  //必填 通过支付页面的表单进行传递

        $body = $_POST['ordbody'];  //订单描述 通过支付页面的表单进行传递
        $show_url = $_POST['ordshow_url'];  //商品展示地址 通过支付页面的表单进行传递
        $anti_phishing_key = "";//防钓鱼时间戳 //若要使用请调用类文件submit中的query_timestamp函数
        $exter_invoke_ip = get_client_ip(); //客户端的IP地址 
        /************************************************************/
    
        //构造要请求的参数数组，无需改动
    $parameter = array(
        "service" => "create_direct_pay_by_user",
        "partner" => trim($alipay_config['partner']),
        "payment_type"    => $payment_type,
        "notify_url"    => $notify_url,
        "return_url"    => $return_url,
        "seller_email"    => $seller_email,
        "out_trade_no"    => $out_trade_no,
        "subject"    => $subject,
        "total_fee"    => $total_fee,
        "body"            => $body,
        "show_url"    => $show_url,
        "anti_phishing_key"    => $anti_phishing_key,
        "exter_invoke_ip"    => $exter_invoke_ip,
        "_input_charset"    => trim(strtolower($alipay_config['input_charset']))
        );
        //建立请求
        $alipaySubmit = new \Alipay\AlipaySubmit($alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter,"post", "确认");
        echo $html_text;
    }
    
    function notifyurl(){
                
        //这里还是通过C函数来读取配置项，赋值给$alipay_config
        $alipay_config=C('alipay_config');
        //计算得出通知验证结果
        $alipayNotify = new \Alipay\AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyNotify();

        // file_put_contents('noti.txt', $verify_result.'|||'.date('Y-m-d H:i:s').'|||'.$_POST['trade_no'].PHP_EOL.json_encode($_POST).PHP_EOL,FILE_APPEND);
        if($verify_result) {
               //验证成功
                   //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
           $out_trade_no   = $_POST['out_trade_no'];      //商户订单号
           $trade_no       = $_POST['trade_no'];          //支付宝交易号
           $trade_status   = $_POST['trade_status'];      //交易状态
           $total_fee      = $_POST['total_fee'];         //交易金额
           $notify_id      = $_POST['notify_id'];         //通知校验ID。
           $notify_time    = $_POST['notify_time'];       //通知的发送时间。格式为yyyy-MM-dd HH:mm:ss。
           $buyer_email    = $_POST['buyer_email'];       //买家支付宝帐号；
                   $parameter = array(
             "out_trade_no"     => $out_trade_no, //商户订单编号；
             "trade_no"     => $trade_no,     //支付宝交易号；
             "total_fee"     => $total_fee,    //交易金额；
             "trade_status"     => $trade_status, //交易状态
             "notify_id"     => $notify_id,    //通知校验ID。
             "notify_time"   => $notify_time,  //通知的发送时间。
             "buyer_email"   => $buyer_email,  //买家支付宝帐号；
           );
           if($_POST['trade_status'] == 'TRADE_FINISHED') {
                       //
           }else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {                           
                $this->rechargeOver();
                // echo '<pre>';print_r($_POST);die;
                // if($this->rechargeOver()===false){
                //     $this->error('生成订单失败');
                // }
            }
                echo "success";        //请不要修改或删除
         }else {
                //验证失败
                echo "fail";
        }    
    }
    
    function returnurl(){
        $alipay_config=C('alipay_config');
        $alipayNotify = new \Alipay\AlipayNotify($alipay_config);//计算得出通知验证结果
        $verify_result = $alipayNotify->verifyReturn();


        // file_put_contents('retu.txt', $verify_result.'|||'.date('Y-m-d H:i:s').'|||'.$_GET['trade_no'].PHP_EOL.json_encode($_POST).'|||'.json_encode($_GET).PHP_EOL,FILE_APPEND);
        if($verify_result) {
            //验证成功
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
        $out_trade_no   = $_GET['out_trade_no'];      //商户订单号
        $trade_no       = $_GET['trade_no'];          //支付宝交易号
        $trade_status   = $_GET['trade_status'];      //交易状态
        $total_fee      = $_GET['total_fee'];         //交易金额
        $notify_id      = $_GET['notify_id'];         //通知校验ID。
        $notify_time    = $_GET['notify_time'];       //通知的发送时间。
        $buyer_email    = $_GET['buyer_email'];       //买家支付宝帐号；
            
        $parameter = array(
            "out_trade_no"     => $out_trade_no,      //商户订单编号；
            "trade_no"     => $trade_no,          //支付宝交易号；
            "total_fee"      => $total_fee,         //交易金额；
            "trade_status"     => $trade_status,      //交易状态
            "notify_id"      => $notify_id,         //通知校验ID。
            "notify_time"    => $notify_time,       //通知的发送时间。
            "buyer_email"    => $buyer_email,       //买家支付宝帐号
        );
        
            if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                
                // echo '<pre>';print_r($_POST);die;
                if($this->rechargeOver()===false){
                    file_put_contents('ordererror.txt', $verify_result.'|||'.date('Y-m-d H:i:s').'|||'.$_GET['trade_no'].PHP_EOL.json_encode($_POST).'|||'.json_encode($_GET).PHP_EOL,FILE_APPEND);
                    $this->error('生成订单失败',U('Account/balance'));
                }

                // echo "alipay.successpage";
                $this->redirect(C('alipay.successpage'));//跳转到配置项中配置的支付成功页面；
            }else {
                echo "trade_status=".$_GET['trade_status'];

                // echo "alipay.errorpage";
                $this->redirect(C('alipay.errorpage'));//跳转到配置项中配置的支付失败页面；
            }
        }else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            header('content-type:text/html;charset=utf-8');
            echo "支付失败！";
            $this->redirect(C('alipay.errorpage'));
        }
    }




    // 充值成功伪代码，实际对接支付宝
    public function rechargeOver(){
        $mid=session('MID');
        $vip_name=session('VIP_NAME');
        $vip_tel=session('VIP_TEL');
        $vip_addr=session('VIP_ADDR');
        $taocan=session('TAOCAN');
        $amount=session('AMOUNT');
        $voucher=session('VOUCHER');
        
        if(!empty($vip_name) && !empty($vip_tel) && session('TAOCAN')==5){
            $db=M('info');
            $info['name']=$vip_name;
            $info['phone']=$vip_tel;
            $info['addr']=$vip_addr;
            $db->add($info);
        }
        $db=D('account');
        $data['mid']=$mid;
        $data['amount']=$amount;
        // $data['voucher']=$voucher;
        $data['taocan']=$taocan;
        $data['time']=date('Y-m-d H:i:s');

        $ares=$db->where("mid=$mid")->order('id desc')->find();
        $data['balance']=$ares['balance']+$amount;
        $data['voucher']=$ares['voucher']+$voucher;
        $n=session('TAOCAN');
        $data['amovoucher']=C('VOUCHER'.$n);
        $data['accnum']=session('ACCNUM');
        $res=$db->add($data);

        if($res){
            return true;
        }else{
            return false;
        }

        
    }


}
