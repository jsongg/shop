<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>核心技术</title>
    <!-- Bootstrap -->
    <link href="/Application/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/Application/Public/fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
    <link href="/Application/Public/css/style2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond./Application/Public/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header bg-blue">
    <div class="text-white container">
        <div class="lt">欢迎来到E收藏！</div>
        <?php if(session('MID')): ?><div class="rt">
                <span class="">您好，<?php echo session('PHONE');?></span>

                <div class="dropdown" style="display: inline-block;margin-left: 10px">
                    <a class="text-white" style="display: block;" href="#" data-toggle="dropdown">
                        <span style="border-left: 2px solid #ffffff;padding:0 10px">会员中心</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Member/Index/index');?>">更改资料</a></li>
                        <li><a href="<?php echo U('Member/Order/index');?>">订单信息</a></li>
                        <li><a href="<?php echo U('Member/Account/record');?>">充值记录</a></li>
                        <li><a href="<?php echo U('Member/Account/rechargeTc');?>">账户充值</a></li>
                        <li><a href="<?php echo U('Member/Account/balance');?>">账户余额</a></li>
                        <li><a href="<?php echo U('Member/Index/editPwd');?>">修改密码</a></li>
                        <li><a href="<?php echo U('Member/Index/loginOut');?>">安全退出</a></li>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <span data-toggle="modal" data-target="#myModal" id="login" style="float:right">登录</span><?php endif; ?>
    </div>
</div>
<div class="navbar">
    <div class="container">
        <div class="media">
            <div class="media-left media-middle">
                <img src="/Application/Public/images/logo2.jpg" class="media-object">
            </div>
            <div class="media-body">
                <div class="row text-right">
                    <div class="col-sm-3"><a href="<?php echo U('Index/index');?>"><strong>网站首页</strong></a></div>
                    <div class="col-sm-3"><a href="<?php echo U('Index/core');?>"><strong>核心技术</strong></a></div>
                    <div class="col-sm-3"><a href="<?php echo U('Index/team');?>"><strong>公司与团队</strong></a></div>
                    <div class="col-sm-3"><a href="<?php echo U('Index/help');?>/aid/10"><strong>帮助中心</strong></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <img src="/Application/Public/images/bg3.jpg" alt=""/>
</div>
<div class="bread">
    <div class="container text-right">
        <ol class="breadcrumb">
            <li><a href="#">网站首页</a></li>
            <li><a href="#">核心技术</a></li>
        </ol>
    </div>
</div>
<div class="container my-container">
    <div>

        <!-- Nav tabs -->
        <ul class="nav tab-nav" role="tablist">
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
            <li class="line"></li>
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
<div class="footer">
    <div style="background: #F8F8F8;padding: 30px 0">
        <div class="container" style="position: relative">
            <div class="row">
                <div class="col-sm-10">
                    <div class="row text-center">
                        <div class="col-sm-3"><a href="<?php echo U('Home/Index/index');?>">网站首页</a></div>
                        <div class="col-sm-3"><a href="<?php echo U('Home/Index/core');?>">核心技术</a></div>
                        <div class="col-sm-3"><a href="<?php echo U('Home/Index/team');?>">公司与团队</a></div>
                        <div class="col-sm-3"><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></div>
                    </div>
                </div>
                <div class="col-sm-2 text-center" style="position: absolute;right: 0">
                    <div style="padding:10px 20px;border: 1px solid #C9C9C9;display: inline-block">
                        <div><img src="/Application/Public/images/phone-ma.jpg" alt=""/></div>
                        <div style="margin-top: 5px;color: #999999">手机版</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #F0EFEF;padding: 30px 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 text-center">
                    版权所有 2003-2016 北京华美加投资咨询有限公司 .保留一切权利.京ICP备09064986号
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 弹出层登录 -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="background: #F7F7F7">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><img src="/Application/Public/images/logo-sm.jpg" alt=""/></h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs tab" role="tablist">
                    <li role="presentation" class="active"><a href="javascript:">登录</a></li>
                    <li role="presentation"><a href="javascript:">立即注册</a></li>
                </ul>
                <div style="margin-top: 20px" class="form" role="form">
                    <div class="login">
                        <form action="<?php echo U('/Home/Index/login');?>" method="post">
                                <div class="form-group has-feedback">
                                    <input type="number" class="form-control" placeholder="请输入手机号" name="phone">
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="请输入密码" name="pwd">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="checkbox-inline" name="autoLogin" value="1"> <span
                                        style="vertical-align: middle;display: inline-block">下次自动登录</span>
                                    <a style="float: right;color: #264198" href="">忘记密码？</a>
                                </div>
                                <div>
                                    <button class="btn bg-blue text-white" style="width: 100%">登录</button>
                                </div>
                            </form>
                    </div>
                    <div class="register" style="display: none">
                        <form action="<?php echo U('/Home/Index/reg');?>" method="post">
                                <div class="form-group has-feedback">
                                    <input type="number" class="form-control" placeholder="请输入手机号" name="phone">
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback" style="overflow: hidden">
                                    <div style="width: 60%;float: left">
                                        <input type="text" class="form-control" placeholder="请输入验证码" name="yzm">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                                    <div style="width: 35%;float: left;margin-left: 5%">
                                        <button class="btn bg-blue text-white" style="width: 100%">发送验证码</button>
                                    </div>

                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="请输入密码" name="pwd">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="checkbox-inline" name="autoLogin" value="1"> <span
                                        style="vertical-align: middle;display: inline-block">下次自动登录</span>
                                </div>
                                <div>
                                    <button class="btn bg-blue text-white" style="width: 100%">注册</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/Application/Public/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $(".my-panel-head ul li span input[type=checkbox]").click(function () {
            if ($(this).prop("checked") == true) {
                $(this).parent("span").siblings(".price").addClass("price-checked")
            } else if ($(this).prop("checked") == false) {
                $(this).parent("span").siblings(".price").removeClass("price-checked")
            }
        })
        $(".tab-img>div").hover(function () {
            $(".show-img>img").eq($(this).index()).show().siblings().hide()
        })

        $(".nav-tabs>li").click(function () {
            $(this).addClass("active").siblings().removeClass("active")
            $(".form>div").eq($(this).index()).show().siblings().hide()
        })
    })
</script>
</body>
</html>