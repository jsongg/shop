<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>属性详情</title>

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
    <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 15px;color: #264198"><?php echo ($data["data"]["name"]); ?> <a
                style="font-size: 14px;color: #264198" class="rt" href="<?php echo U('Mobile/Remote/piclist');?>" >返回图片识别结果</a></div>
        <div class="panel-body">
            <div class="row" style="margin-top: 20px">
                <div class="col-xs-12 shuxing-img">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        	<?php if(is_array($piclist)): foreach($piclist as $k=>$v): ?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($k); ?>" <?php if($k == 0): ?>class="active"<?php endif; ?>></li><?php endforeach; endif; ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" key="k">
	                        <?php if(is_array($piclist)): foreach($piclist as $k=>$v): ?><div class="item text-center  <?php if($k == 0): ?>active<?php endif; ?>">
	                                <img src="http://59.110.67.18:8080/images/<?php echo ($v["url"]); ?>" class="img-thumbnail img-responsive" alt="...">
	                                <div class="carousel-caption">
	                                    <!-- <?php echo ($v["desc"]); ?> -->
	                                </div>
	                            </div><?php endforeach; endif; ?>    
                        </div>

                        <!-- Controls -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-bordered detail-table">
                                <caption class="bg-grey text-center" style="color: #2D479B;border: 1px solid #DDDDDD;border-bottom: 0;font-size: 16px">
                                    <?php echo ($infos[0][1]); ?>
                                </caption>
                                <tbody>
                                <?php if(is_array($infos)): foreach($infos as $key=>$v): ?><tr>
                                    <td class="bg-grey col-xs-3"><?php echo ($v["0"]); ?></td>
                                    <td class="col-xs-9"><?php echo ($v["1"]); ?></td>
                                </tr><?php endforeach; endif; ?>
                                </tbody>
                            </table>
                        </div>
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