<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录页</title>

    <!-- Bootstrap -->
    <link href="/Application/Public/mobile/css/bootstrap.css" rel="stylesheet">
    <link href="/Application/Public/mobile/fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
    <link href="/Application/Public/mobile/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond./Application/Public/mobile/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-grey">
<div class="head text-center">
    <span class="he1" onclick="window.history.go(-1)">返回</span>
    <div>登录账号</div>
    <span class="he2"><a href="<?php echo U('Mobile/Index/regshow');?>" >注册</a></span>
</div>
<div class="container">
    <div class="logo text-center">
        <img src="/Application/Public/mobile/images/logo.png" alt=""/>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo U('/Mobile/Index/login');?>" method="post">
                <div class="form-group has-feedback">
                    <input type="number" class="form-control" placeholder="请输入手机号" name="phone">
                    <span class="glyphicon glyphicon-phone form-control-feedback" style="color: #BBBBBB"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="请输入密码" name="pwd">
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="color: #BBBBBB"></span>
                </div>
                <div class="next-login">
                    <input type="checkbox" name="autoLogin" value="1"/><span>下次自动登录</span>
                    <span class="rt"><a class="text-blue" href=""></a></span>
                </div>
                <div style="margin-top: 20px">
                    <button class="btn btn-lg col-xs-12 text-white bg-blue">登录</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="to-register text-center">
    <a class="btn te" href="<?php echo U('Mobile/Index/regshow');?>">立即注册</a>
</div>

<script src="/Application/Public/mobile/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/mobile/js/bootstrap.min.js"></script>
</body>
</html>