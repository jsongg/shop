<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>公司与团队</title>

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
    <style>
        .tab-content img{
            width:100%;
            height:auto;
        }
    </style>
</head>
<body style="padding-bottom: 80px">
<div class="container">
    <div class="row"><img src="/Application/Public/mobile/images/banner3.jpg" alt="" class="img-responsive"/></div>
</div>
<div class="container">
    <div>

        <!-- Nav tabs -->
        <ul class="nav tab-nav nav-pills nav-stacked" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">陶瓷识别</a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">青铜识别</a>
            </li>
            <li role="presentation">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">铜镜识别</a>
            </li>
            <li role="presentation">
                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">和田玉籽料识别</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <p id="taoci">
                    <?php echo ($taoci); ?>
                </p>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile"><?php echo ($qingtong); ?></div>
            <div role="tabpanel" class="tab-pane" id="messages"><?php echo ($tongjing); ?></div>
            <div role="tabpanel" class="tab-pane" id="settings"><?php echo ($hetian); ?></div>
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