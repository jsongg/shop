<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>文字搜索</title>

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
<body style="padding-bottom: 80px">
<div class="container">
    <div class="panel search panel-default">
        <div class="panel-heading" style="font-size: 20px;color: #264198">支付成功</div>
        <div class="panel-body" style="padding: 60px 0">
            <div>
                <div class="text-center">
                    <div>
                        <img style="vertical-align: middle" src="/Application/Public/mobile/images/b.jpg" alt="">
                        <h3 style="display: inline-block;vertical-align: middle" class="media-heading"><strong>您已成功支付<?php echo $price;?>元!</strong></h3>
                    </div>
                    <div class="text-center" style="margin-top: 20px">
                        <div style="display: inline-block;">  <span><strong>·</strong> 您已支付成功！ 现在您可以: </span><?php if($price == 20): ?><a href="<?php echo U('Mobile/Remote/piclist');?>/flag/20" style="color:red">查看识别藏品信息</a><?php elseif($price == 50): ?><a href="<?php echo U('Mobile/Remote/piclist');?>/flag/50" style="color:red">查看评估藏品信息</a><?php endif; ?></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-bottom">
    <div class="container">
        <ul class="list-unstyled text-center row bg-grey">
            <li class="col-xs-4 dropup">
                <a class="dropdown-toggle text-blue" type="button" id="dropdownMenu1" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" href="javascript:">网站栏目</a>
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu1">
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/index');?>">网站首页</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/core');?>">核心技术</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/team');?>">公司与团队</a></li>
                </ul>
            </li>
            <li class="col-xs-4 dropup" style="border-left: 1px solid #E4E4E4;border-right: 1px solid #E4E4E4">
                <a class="dropdown-toggle text-blue" type="button" id="dropdownMenu2" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" href="javascript:">个人中心</a>
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu2">
                    <li class="text-center checked"><a href="<?php echo U('Mobile/Member/index');?>">更改资料</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Order/index');?>">订单信息</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Account/record');?>">充值记录</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Account/rechargeTc');?>">账户充值</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Member/editPwd');?>">修改密码</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Member/loginOut');?>">安全退出</a></li>
                </ul>
            </li>
            <li class="col-xs-4 dropup">
                <a class="dropdown-toggle text-blue" type="button" id="dropdownMenu3" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" href="javascript:">帮助中心</a>
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu3">
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/help');?>">识别库介绍</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/pgshow');?>">评估库介绍</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/sbuse');?>">设备使用</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="<?php echo U('Mobile/Index/czactive');?>">充值活动</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script src="/Application/Public/mobile/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/mobile/js/bootstrap.min.js"></script>
</body>
</html>