<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>账户充值</title>

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
<form action="<?php echo U('Account/recharge');?>" method="post">
    <div>
        <div>
            <div class="m-title">
                <span>账户充值</span>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                
                    <table class="table table-bordered s3">
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-3 text-center bg-grey">
                                会员充值
                            </td>
                            <td>
                                <div>
                                    <ul class="taocan list-unstyled list-inline">
                                        <li>
                                            <input type="radio" class="z" name="taocan" value="1" name="taocan"/>
                                    <span>
                                        套餐一：<span>100元 <span>(赠200代金券)</span></span>
                                    </span>
                                        </li>
                                        <li>
                                            <input type="radio" class="z" name="taocan" value="2" name="taocan"/>
                                    <span>
                                        套餐二：<span>300元 <span>(赠600代金券)</span></span>
                                    </span>
                                        </li>
                                        <li>
                                            <input type="radio" class="z" name="taocan" value="3" name="taocan"/>
                                    <span>
                                        套餐三：<span>600元 <span>(赠1000代金券)</span></span>
                                    </span>
                                        </li>
                                        <li>
                                            <input type="radio" class="z" name="taocan" value="4" name="taocan"/>
                                    <span>
                                        套餐四：<span>1000元 <span>(赠2000代金券)</span></span>
                                    </span>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-3 text-center bg-grey">
                                VIP充值
                            </td>
                            <td>
                                <div>
                                    <div class="vip">
                                        <input type="radio" class="z" value="5" name="taocan"/><span>VIP充值： <span>3000元</span></span>
                                    </div>
                                    <div style="color: #707070;line-height: 22px">
                                        (注：充值成功，即成为公司VIP会员，将获得5988元智能电子识别仪一台；还将获得价值3000元充值卷)
                                    </div>
                                    <div>
                                        
                                            <ul class="list-unstyled vip-a">
                                                <li>
                                                    <div><span>*</span>姓名：</div>
                                                    <input class="form-control input-sm" type="text"/>
                                                </li>
                                                <li>
                                                    <div><span>*</span>联系电话：</div>
                                                    <input class="form-control input-sm" type="text"/>
                                                </li>
                                                <li>
                                                    <div><span>*</span>收货地址：</div>
                                                    <textarea class="form-control" name="" id="" cols="30"
                                                              rows="5"></textarea>
                                                </li>
                                            </ul>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-3 text-center bg-grey">
                                季度充值
                            </td>
                            <td>
                                <div>
                                    <div>
                                        <ul class="taocan list-unstyled">
                                            <li>
                                                <input type="radio" class="z" name="taocan" value="6"/>
                                    <span>
                                        季度充值：<span>1000元</span>
                                    </span>
                                            </li>
                                            <li>
                                                <input type="radio" class="z" name="taocan" value="7"/>
                                    <span>
                                        半年充值：<span>2000元</span>
                                    </span>
                                            </li>
                                            <li>
                                                <input type="radio" class="z" name="taocan" value="8"/>
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
                            <td style="color: #304B9E;vertical-align: middle" class="col-xs-3 text-center bg-grey">
                                自助充值
                            </td>
                            <td>
                                <div>
                                    <div class="zizhu">
                                        <input type="radio" class="y" value="9" name="taocan"/>
                                        <span style="color: #29449A">请输入充值的金额</span>

                                        <div class="row">
                                            <div class="col-xs-8 col-xs-offset-1">
                                                <input type="text" class="form-control input-sm x" name="price"/>
                                            </div>
                                            <span style="color: #BF2C3E;margin-top: 5px;display: inline-block">元</span>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div><input type="submit" value="确认充值" class="btn bg-blue text-white btnn"/></div>
        </div>
    </div>
</form>
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
<script>
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
</script>
</body>
</html>