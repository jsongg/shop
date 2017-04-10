<?php
return array(
	'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'qinghuaci',          // 数据库名
    'DB_USER'               =>  'qinghuaci',      // 用户名
    'DB_PWD'                =>  'qinghuaci',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'qh_',    // 数据库表前缀

// 开启跟踪
    // 'SHOW_PAGE_TRACE'		=>	true,

	// 'MODULE_ALLOW_LIST' =>  'Home,Mobile',




 //    // 支付宝配置
	// $alipay_config['partner']		= '2088521494051889',

	// //收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
	// $alipay_config['seller_id']	= $alipay_config['partner'],

	// // MD5密钥，安全检验码，由数字和字母组成的32位字符串，查看地址：https://b.alipay.com/order/pidAndKey.htm
	// $alipay_config['key']			= '2vwp60vohzo43jeusiib8pvf7cv2yiru',

	// // 服务器异步通知页面路径  需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
	// $alipay_config['notify_url'] = "http://商户网址/create_direct_pay_by_user-PHP-UTF-8/notify_url.php",

	// // 页面跳转同步通知页面路径 需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
	// $alipay_config['return_url'] = "http://商户网址/create_direct_pay_by_user-PHP-UTF-8/return_url.php",

	// //签名方式
	// $alipay_config['sign_type']    = strtoupper('MD5'),

	// //字符编码格式 目前支持 gbk 或 utf-8
	// $alipay_config['input_charset']= strtolower('utf-8'),

	// //ca证书路径地址，用于curl中ssl校验
	// //请保证cacert.pem文件在当前文件夹目录中
	// $alipay_config['cacert']    = getcwd().'\\cacert.pem',

	// //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
	// $alipay_config['transport']    = 'http',

	// // 支付类型 ，无需修改
	// $alipay_config['payment_type'] = "1",
			
	// // 产品类型，无需修改
	// $alipay_config['service'] = "create_direct_pay_by_user",

	// //↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


	// //↓↓↓↓↓↓↓↓↓↓ 请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
		
	// // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
	// $alipay_config['anti_phishing_key'] = "",
		
	// // 客户端的IP地址 非局域网的外网IP地址，如：221.0.0.1
	// $alipay_config['exter_invoke_ip'] = "",
			
	// //↑↑↑↑↑↑↑↑↑↑请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
	



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
	'notify_url'=>'http://www.cas-zhiwen.com/Member/Pay/notifyurl', 
	//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
	'return_url'=>'http://www.cas-zhiwen.com/Member/Pay/returnurl',
	//支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
	'successpage'=>'Account/successpage',   
	//支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
	'errorpage'=>'Account/errorpage', 
	)


);