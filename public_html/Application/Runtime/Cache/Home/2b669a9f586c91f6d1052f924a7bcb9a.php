<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>公司与团队</title>
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
    <img src="/Application/Public/images/bg2.jpg" alt=""/>
</div>
<div class="bread">
    <div class="container text-right">
        <ol class="breadcrumb">
            <li><a href="#">网站首页</a></li>
            <li><a href="#">公司与团队</a></li>
        </ol>
    </div>
</div>
<div class="container my-container">
    <div class="h">
        <div class="f1">
            <div class="intro-head">
                <div>
                    <div>
                        <h3><strong>公司介绍</strong></h3>
                        <h4>Company introduction</h4>
                    </div>
                </div>
            </div>
            <div class="intro-body row">
                <div class="col-sm-6">
                    <img src="/Application/Public/images/f1.jpg" class="img-responsive" alt=""/>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="screw">
                                <div>企业宗旨企业宗旨企业宗旨企业宗旨</div>
                                <div class="text-right">qiyezongzhiqiyezongzhiqiyezongzhi</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="f-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi, eum facere id modi nemo reiciendis sunt tenetur! Adipisci animi aut, ex expedita fugit nihil omnis perspiciatis rerum sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequuntur dolor, dolorem est id ipsam magnam, minima nisi placeat quae reiciendis saepe sed suscipit vel veritatis. Eaque nisi nulla voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid commodi cupiditate fuga itaque iusto magni, nobis odit officiis omnis qui, ut voluptate. Blanditiis delectus eos impedit laborum nisi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fuga ipsa maiores nobis quisquam quo repellat repudiandae vel. Blanditiis et fugiat necessitatibus nobis quas quisquam repellendus ullam ut voluptatem voluptatum!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="f2">
            <div class="intro-head">
                <div>
                    <div>
                        <h3><strong>团队介绍</strong></h3>
                        <h4>Team Introduction</h4>
                    </div>
                </div>
            </div>
            <div class="intro-body">
                <h2 class="text-center f2-title">— 我们的团队 —</h2>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a href=""> <img src="/Application/Public/images/f2.jpg" class="img-responsive" alt="..."></a>

                                    <div class="carousel-caption text-center">
                                        团队简介
                                    </div>
                                </div>
                                <div class="item">
                                    <a href=""><img src="/Application/Public/images/f2.jpg" alt="..."></a>

                                    <div class="carousel-caption text-center">
                                       团队简介
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f3">
            <div class="intro-head">
                <div>
                    <div>
                        <h3><strong>团队介绍</strong></h3>
                        <h4>Team Introduction</h4>
                    </div>
                </div>
            </div>
            <div class="intro-body row">
                <div class="col-sm-4 contact">
                    <dl>
                        <dt><h4>北京华美加投资咨询有限公司</h4></dt>
                        <dd class="dd1">地址：北京市海淀区长春桥世纪金源购物中心</dd>
                        <dd class="dd2">电话：010-1234-5678</dd>
                        <dd class="dd3">邮箱：123456789@qq.com</dd>
                    </dl>
                </div>
                <div class="col-sm-8">
                        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

                    <!--百度地图容器-->
                    <div style="width:100%;height:300px;border:#ccc solid 1px;" id="dituContent"></div>
                    <script type="text/javascript">
                        //创建和初始化地图函数：
                        function initMap(){
                            createMap();//创建地图
                            setMapEvent();//设置地图事件
                            addMapControl();//向地图添加控件
                            addMarker();//向地图中添加marker
                        }

                        //创建地图函数：
                        function createMap(){
                            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                            var point = new BMap.Point(116.295061,39.96535);//定义一个中心点坐标
                            map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
                            window.map = map;//将map变量存储在全局
                        }

                        //地图事件设置函数：
                        function setMapEvent(){
                            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                            map.enableKeyboard();//启用键盘上下左右键移动地图
                        }

                        //地图控件添加函数：
                        function addMapControl(){
                            //向地图中添加缩放控件
                            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                            map.addControl(ctrl_nav);
                            //向地图中添加缩略图控件
                            var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
                            map.addControl(ctrl_ove);
                            //向地图中添加比例尺控件
                            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                            map.addControl(ctrl_sca);
                        }

                        //标注点数组
                        var markerArr = [{title:"北京华美加投资咨询有限公司",content:"北京市海淀区长春桥世纪金源购物中心",point:"116.292285|39.965046",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                        ];
                        //创建marker
                        function addMarker(){
                            for(var i=0;i<markerArr.length;i++){
                                var json = markerArr[i];
                                var p0 = json.point.split("|")[0];
                                var p1 = json.point.split("|")[1];
                                var point = new BMap.Point(p0,p1);
                                var iconImg = createIcon(json.icon);
                                var marker = new BMap.Marker(point,{icon:iconImg});
                                var iw = createInfoWindow(i);
                                var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                                marker.setLabel(label);
                                map.addOverlay(marker);
                                label.setStyle({
                                    borderColor:"#808080",
                                    color:"#333",
                                    cursor:"pointer"
                                });

                                (function(){
                                    var index = i;
                                    var _iw = createInfoWindow(i);
                                    var _marker = marker;
                                    _marker.addEventListener("click",function(){
                                        this.openInfoWindow(_iw);
                                    });
                                    _iw.addEventListener("open",function(){
                                        _marker.getLabel().hide();
                                    })
                                    _iw.addEventListener("close",function(){
                                        _marker.getLabel().show();
                                    })
                                    label.addEventListener("click",function(){
                                        _marker.openInfoWindow(_iw);
                                    })
                                    if(!!json.isOpen){
                                        label.hide();
                                        _marker.openInfoWindow(_iw);
                                    }
                                })()
                            }
                        }
                        //创建InfoWindow
                        function createInfoWindow(i){
                            var json = markerArr[i];
                            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                            return iw;
                        }
                        //创建一个Icon
                        function createIcon(json){
                            var icon = new BMap.Icon("http://map.baidu.com/image/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                            return icon;
                        }

                        initMap();//创建和初始化地图
                    </script>
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