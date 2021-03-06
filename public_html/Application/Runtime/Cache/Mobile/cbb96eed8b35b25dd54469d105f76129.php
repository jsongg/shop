<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>更改资料</title>

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
    <div class="row"><img src="/Application/Public/mobile/images/banner4.jpg" alt="" class="img-responsive"/></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="m-title">
                <span>修改密码</span>
            </div>
            <div class="my-form">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="请输入当前登录密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="请输入新密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" id="Password3" placeholder="请确认新密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-right">
                            <a class="btn btn-lg bg-blue col-xs-12" style="color: #ffffff">确认</a>
                        </div>
                    </div>
                </form>
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
                    <li class="text-center"><a href="#">网站首页</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">核心技术</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">公司与团队</a></li>
                </ul>
            </li>
            <li class="col-xs-4 dropup" style="border-left: 1px solid #E4E4E4;border-right: 1px solid #E4E4E4">
                <a class="dropdown-toggle text-blue" type="button" id="dropdownMenu2" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" href="javascript:">个人中心</a>
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu2">
                    <li class="text-center checked"><a href="#">更改资料</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">订单信息</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">充值记录</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">账户充值</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">修改密码</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">安全退出</a></li>
                </ul>
            </li>
            <li class="col-xs-4 dropup">
                <a class="dropdown-toggle text-blue" type="button" id="dropdownMenu3" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" href="javascript:">帮助中心</a>
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu3">
                    <li class="text-center"><a href="#">识别库介绍</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">评估库介绍</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">设备使用</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><a href="#">充值活动</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script src="/Application/Public/mobile/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/mobile/js/bootstrap.min.js"></script>
</body>
</html>