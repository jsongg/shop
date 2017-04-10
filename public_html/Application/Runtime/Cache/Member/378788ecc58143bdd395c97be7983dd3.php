<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会员中心-更改资料</title>
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
            <span><a href="javascript:" style="color:white;float:right;">登录</a></span><?php endif; ?>
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
                    <div class="col-sm-3"><a href="<?php echo U('Home/Index/index');?>"><strong>网站首页</strong></a></div>
                    <div class="col-sm-3"><a href="<?php echo U('Home/Index/core');?>"><strong>核心技术</strong></a></div>
                    <div class="col-sm-3"><a href="<?php echo U('Home/Index/team');?>"><strong>公司与团队</strong></a></div>
                    <div class="col-sm-3"><a href="<?php echo U('Home/Index/help');?>"><strong>帮助中心</strong></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <img src="/Application/Public/images/bg1.jpg" alt=""/>
</div>
<div class="bread">
    <div class="container text-right">
        <ol class="breadcrumb">
            <li><a href="#">网站首页</a></li>
            <li><a href="#">会员中心</a></li>
            <li><a href="#">订单信息</a></li>
        </ol>
    </div>
</div>
<div class="container my-container">
    <div class="row h">
        <div class="col-sm-3 col-md-2">
            <div class="row help">
                <div class="col-sm-10 text-center">
                    <dl class="bg-grey aside-nav">
                        <dt>
                        <h3>会员中心</h3></dt>
                        <dd><a href="<?php echo U('Index/index');?>">更改资料</a></dd>
                        <dd class="checked"><a href="<?php echo U('Order/index');?>">订单信息</a></dd>
                        <dd><a href="<?php echo U('Account/Record');?>">充值记录</a></dd>
                        <dd><a href="<?php echo U('Account/rechargeTc');?>">账户充值</a></dd>
                        <dd><a href="<?php echo U('Account/balance');?>">账户余额</a></dd>
                        <dd><a href="<?php echo U('Index/editPwd');?>">修改密码</a></dd>
                        <dd><a href="<?php echo U('Index/loginOut');?>">安全退出</a></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
            <div class="m-title">
                <span>订单信息</span>
            </div>
            <div class="my-table">
                <table class="table">
                    <thead>
                    <tr class="bg-grey">
                        <th>订单编号</th>
                        <th class="text-center">识别名称</th>
                        <th class="text-center">日期</th>
                        <th class="text-center">消费金额（元）</th>
                        <th class="text-center">删除记录</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                            <td>
                                <span><?php echo ($v["ordernum"]); ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo ($v["goodname"]); ?></span>
                            </td>
                            <td class="text-center">
                                <span>
                                    <?php echo ($v["time"]); ?>
                                </span>
                            </td>
                            <td  class="text-center">
                                <span><?php echo ($v["amount"]); ?></span>
                            </td>
                            <td class="text-center">
                                <span><a href="">删除</a></span>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation" class="text-center my-pagination">
                    <ul class="pagination">
                        <?php echo ($page); ?>
                    </ul>
                </nav>
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
    })
</script>
</body>
</html>