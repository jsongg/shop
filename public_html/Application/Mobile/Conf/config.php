<?php
return array(
	//充值金额
	'AMOUNT1'=>'100.00',
	'AMOUNT2'=>'300.00',
	'AMOUNT3'=>'600.00',
	'AMOUNT4'=>'1000.00',
	'AMOUNT5'=>'3000.00',
	'AMOUNT6'=>'1000.00',
	'AMOUNT7'=>'2000.00',
	'AMOUNT8'=>'3000.00',
	'AMOUNT9'=>'',
	// 代金券
	'VOUCHER1'=>'200.00',
	'VOUCHER2'=>'600.00',
	'VOUCHER3'=>'1000.00',
	'VOUCHER4'=>'2000.00',
	'VOUCHER5'=>'3000.00',
	'VOUCHER6'=>'',
	'VOUCHER7'=>'',
	'VOUCHER8'=>'',
	'VOUCHER9'=>'',



	'alipay_config'=>array(
		'partner' =>'2088521494051889',   //这里是你在成功申请支付宝接口后获取到的PID；
	    'key'=>'2vwp60vohzo43jeusiib8pvf7cv2yiru',//这里是你在成功申请支付宝接口后获取到的Key
	    'sign_type'=>strtoupper('MD5'),
	    'input_charset'=> strtolower('utf-8'),
	    'cacert'=> getcwd().'\\cacert.pem',
	    'transport'=> 'http',
	      ),
	     //以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；
	    
		'alipay'   =>array(
		 //这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
		'seller_email'=>'1974066643@qq.com',
		//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
		//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
		'notify_url'=>'http://www.cas-zhiwen.com/Mobile/Pay/notifyurl', 
		//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
		'return_url'=>'http://www.cas-zhiwen.com/Mobile/Pay/returnurl',
		//支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
		'successpage'=>'Account/successpage',   
		//支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
		'errorpage'=>'Account/errorpage', 
		),
);