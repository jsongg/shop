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
</head>
<body style="padding-bottom: 80px">
<div class="container">
    <div class="row"><img src="/Application/Public/mobile/images/banner2.jpg" alt="" class="img-responsive"/></div>
</div>
<div class="container">
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

                <div class="col-xs-12">
                    <div class="f-text">
                        <p>
                            <?php echo ($data["content"]); ?>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12">
                    <img src="/Application/Public/mobile/images/f1.jpg" class="img-responsive" alt=""/>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="screw">
                                <div>企业宗旨企业宗旨企业宗旨企业宗旨</div>
                                <div class="text-right">qiyezongzhiqiyezongzhiqiyezongzhi</div>
                            </div>
                        </div>
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
                                    <a href=""> <img src="/Application/Public/mobile/images/f2.jpg" class="img-responsive" alt="..."></a>

                                    <div class="carousel-caption text-center">
                                        团队简介
                                    </div>
                                </div>
                                <div class="item">
                                    <a href=""><img src="/Application/Public/mobile/images/f2.jpg" alt="..."></a>

                                    <div class="carousel-caption text-center">
                                        团队简介
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button"
                               data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button"
                               data-slide="next">
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

                <div class="col-sm-8">
                    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

                    <!--百度地图容器-->
                    <div style="width:100%;height:300px;border:#ccc solid 1px;" id="dituContent"></div>
                    <script type="text/javascript">
                        //创建和初始化地图函数：
                        function initMap() {
                            createMap();//创建地图
                            setMapEvent();//设置地图事件
                            addMapControl();//向地图添加控件
                            addMarker();//向地图中添加marker
                        }

                        //创建地图函数：
                        function createMap() {
                            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                            var point = new BMap.Point(116.295061, 39.96535);//定义一个中心点坐标
                            map.centerAndZoom(point, 17);//设定地图的中心点和坐标并将地图显示在地图容器中
                            window.map = map;//将map变量存储在全局
                        }

                        //地图事件设置函数：
                        function setMapEvent() {
                            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                            map.enableKeyboard();//启用键盘上下左右键移动地图
                        }

                        //地图控件添加函数：
                        function addMapControl() {
                            //向地图中添加缩放控件
                            var ctrl_nav = new BMap.NavigationControl({
                                anchor: BMAP_ANCHOR_TOP_LEFT,
                                type: BMAP_NAVIGATION_CONTROL_LARGE
                            });
                            map.addControl(ctrl_nav);
                            //向地图中添加缩略图控件
                            var ctrl_ove = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1});
                            map.addControl(ctrl_ove);
                            //向地图中添加比例尺控件
                            var ctrl_sca = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
                            map.addControl(ctrl_sca);
                        }

                        //标注点数组
                        var markerArr = [{
                            title: "北京华美加投资咨询有限公司",
                            content: "北京市海淀区长春桥世纪金源购物中心",
                            point: "116.292285|39.965046",
                            isOpen: 1,
                            icon: {w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5}
                        }
                        ];
                        //创建marker
                        function addMarker() {
                            for (var i = 0; i < markerArr.length; i++) {
                                var json = markerArr[i];
                                var p0 = json.point.split("|")[0];
                                var p1 = json.point.split("|")[1];
                                var point = new BMap.Point(p0, p1);
                                var iconImg = createIcon(json.icon);
                                var marker = new BMap.Marker(point, {icon: iconImg});
                                var iw = createInfoWindow(i);
                                var label = new BMap.Label(json.title, {"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)});
                                marker.setLabel(label);
                                map.addOverlay(marker);
                                label.setStyle({
                                    borderColor: "#808080",
                                    color: "#333",
                                    cursor: "pointer"
                                });

                                (function () {
                                    var index = i;
                                    var _iw = createInfoWindow(i);
                                    var _marker = marker;
                                    _marker.addEventListener("click", function () {
                                        this.openInfoWindow(_iw);
                                    });
                                    _iw.addEventListener("open", function () {
                                        _marker.getLabel().hide();
                                    })
                                    _iw.addEventListener("close", function () {
                                        _marker.getLabel().show();
                                    })
                                    label.addEventListener("click", function () {
                                        _marker.openInfoWindow(_iw);
                                    })
                                    if (!!json.isOpen) {
                                        label.hide();
                                        _marker.openInfoWindow(_iw);
                                    }
                                })()
                            }
                        }
                        //创建InfoWindow
                        function createInfoWindow(i) {
                            var json = markerArr[i];
                            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
                            return iw;
                        }
                        //创建一个Icon
                        function createIcon(json) {
                            var icon = new BMap.Icon("http://map.baidu.com/image/us_mk_icon.png", new BMap.Size(json.w, json.h), {
                                imageOffset: new BMap.Size(-json.l, -json.t),
                                infoWindowOffset: new BMap.Size(json.lb + 5, 1),
                                offset: new BMap.Size(json.x, json.h)
                            })
                            return icon;
                        }

                        initMap();//创建和初始化地图
                    </script>
                </div>
                <div class="col-sm-4 contact">
                    <dl>
                        <dt>
                        <h4 class="text-center">北京华美加投资咨询有限公司</h4></dt>
                        <dd class="dd1">地址：北京市海淀区长春桥世纪金源购物中心</dd>
                        <dd class="dd2">电话：010-1234-5678</dd>
                        <dd class="dd3">邮箱：123456789@qq.com</dd>
                    </dl>
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