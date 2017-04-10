<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>图片项目</title>
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
        <div class="lt">欢迎登录E收藏！</div>
        <div class="rt">
            <span class="">您好，xxx</span>

            <div class="dropdown" style="display: inline-block;margin-left: 10px">
                <a class="text-white" style="display: block;" href="#" data-toggle="dropdown">
                    <span style="border-left: 2px solid #ffffff;padding:0 10px">会员中心</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="">更改资料</a></li>
                    <li><a href="">订单信息</a></li>
                    <li><a href="">充值记录</a></li>
                    <li><a href="">账户充值</a></li>
                    <li><a href="">账户余额</a></li>
                    <li><a href="">修改密码</a></li>
                    <li><a href="">安全退出</a></li>
                </ul>
            </div>
        </div>
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
                    <div class="col-sm-3"><a href=""><strong>网站首页</strong></a></div>
                    <div class="col-sm-3"><a href=""><strong>核心技术</strong></a></div>
                    <div class="col-sm-3"><a href=""><strong>公司与团队</strong></a></div>
                    <div class="col-sm-3"><a href=""><strong>帮助中心</strong></a></div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container my-container">
    <ol class="breadcrumb">
        <li><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
        <!-- <li><a href="#">上传图片</a></li> -->
        <li>请选择您需要的图片选项</li>
    </ol>
    <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 20px;color: #264198">请选择您需要的图片项目</div>
        <div class="panel-body">
            <div style="color: #FF0F14;line-height: 24px">
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                <form action="<?php echo U('Home/Remote/picpay');?>" method="post" >
                    <div class="my-panel">
                        <div class="my-panel-head">
                            <ul class="list-unstyled">
                                <li>
                                    <span><input type="radio" name="price" value="20" /></span>
                                    <span>识别图片项目</span>
                                    <span class="price">20元</span>
                                </li>
                                <li>
                                    <span><input type="radio" name="price" value="50" /></span>
                                    <span>评估图片项目</span>
                                    <span class="price">50元</span>
                                </li>
                            </ul>
                        </div>
                        <div class="my-panel-foot">
                            <div class="row">
                                <input class="col-sm-4 col-sm-offset-4" type="submit" value="确认支付"/>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div style="background: #F8F8F8;padding: 30px 0">
        <div class="container" style="position: relative">
            <div class="row">
                <div class="col-sm-10">
                    <div class="row text-center">
                        <div class="col-sm-3"><a href="">网站首页</a></div>
                        <div class="col-sm-3"><a href="">核心技术</a></div>
                        <div class="col-sm-3"><a href="">公司与团队</a></div>
                        <div class="col-sm-3"><a href="">帮助中心</a></div>
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
    })
</script>
</body>
</html>