<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会员中心-账户充值2</title>
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
            <li><a href="#">账户充值</a></li>
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
                        <dd><a href="<?php echo U('Order/index');?>">订单信息</a></dd>
                        <dd><a href="<?php echo U('Account/Record');?>">充值记录</a></dd>
                        <dd class="checked"><a href="<?php echo U('Account/rechargeTc');?>">账户充值</a></dd>
                        <dd><a href="<?php echo U('Account/balance');?>">账户余额</a></dd>
                        <dd><a href="<?php echo U('Index/editPwd');?>">修改密码</a></dd>
                        <dd><a href="<?php echo U('Index/loginOut');?>">安全退出</a></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
        <form action="<?php echo U('Account/recharge');?>" method="post">
            <div class="m-title">
                <span>账户充值</span>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <table class="table table-bordered s3">
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-2 text-center bg-grey">
                                会员充值
                            </td>
                            <td>
                                <div>
                                    <ul class="taocan list-unstyled list-inline">
                                        <li>
                                            <input type="radio" name="taocan" value="1" class="z"/>
                                    <span>
                                        套餐一：<span>100元 <span>(赠200代金券)</span></span>
                                    </span>
                                        </li>
                                        <li>
                                    <span class="ot">&nbsp;&nbsp; &nbsp;&nbsp;</span><input type="radio" name="taocan" value="2" class="z"/>
                                    <span>
                                        套餐二：<span>300元 <span>(赠600代金券)</span></span>
                                    </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="taocan" value="3" class="z"/>
                                    <span>
                                        套餐三：<span>600元 <span>(赠1000代金券)</span></span>
                                    </span>
                                        </li>
                                        <li>
                                            <span class="ot">&nbsp;&nbsp; </span><input type="radio" name="taocan" value="4" class="z"/>
                                    <span>
                                        套餐四：<span>1000元 <span>(赠2000代金券)</span></span>
                                    </span>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-2 text-center bg-grey">
                                VIP充值
                            </td>
                            <td>
                                <div>
                                    <div class="vip">
                                        <input type="radio" name="taocan" value="5" class="z"/><span>VIP充值： <span>3000元</span></span>
                                    </div>
                                    <div style="color: #707070;line-height: 22px">
                                        (注：充值成功，即成为公司VIP会员，将获得5988元智能电子识别仪一台；<br class="ot"/>
                                        <span class="ot">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>还将获得价值3000元充值卷)
                                    </div>
                                    <div>
                                        <table class="vip-a">
                                            <tr>
                                                <td class="text-right"><span>*</span>姓名：</td>
                                                <td><input type="text" class="form-control input-sm" name="vip_name" /></td>
                                            </tr>
                                            <tr>
                                                <td><span>*</span>联系电话：</td>
                                                <td><input type="text" class="form-control input-sm" name="vip_tel"/></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top"><span>*</span>收货地址：</td>
                                                <td><textarea class="form-control" cols="30" rows="5" name="vip_addr"></textarea></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-2 text-center bg-grey">
                                季度充值
                            </td>
                            <td>
                                <div>
                                    <div>
                                        <ul class="taocan list-unstyled">
                                            <li>
                                                <input type="radio" name="taocan" value="6" class="z"/>
                                    <span>
                                        季度充值：<span>1000元</span>
                                    </span>
                                            </li>
                                            <li>
                                                <input type="radio" name="taocan" value="7" class="z"/>
                                    <span>
                                        半年充值：<span>2000元</span>
                                    </span>
                                            </li>
                                            <li>
                                                <input type="radio" name="taocan" value="8" class="z"/>
                                    <span>
                                        年度充值：<span>3000元</span></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-2 text-center bg-grey">
                                自助充值
                            </td>
                            <td>
                                <div>
                                    <div class="form-inline zizhu">
                                        <input type="radio" class="y" name="taocan" value="9" />
                                        <span style="color: #29449A">请输入充值的金额</span>
                                        <input type="text" class="form-control input-sm x" name="price" />
                                        <span style="color: #BF2C3E">元</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div><input type="submit" value="确认充值" class="btn bg-blue text-white btnn"/></div>
        </form>
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
        $(".zhifubao>span").click(function () {
            $(this).toggleClass("bg")
        })
        $(".x").focus(function(){
            $(".y").prop("checked",true)
            $(".z").prop("checked",false)
        })
        $(".z").click(function(){
            $(".y").prop("checked",false)
        })
    })
</script>
</body>
</html>