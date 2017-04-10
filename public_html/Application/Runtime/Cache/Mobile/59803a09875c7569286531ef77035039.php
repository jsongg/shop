<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>

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
<body>
<div class="container">
    <div class="logo text-center">
        <img src="/Application/Public/mobile/images/logo.png" alt=""/>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo U('Mobile/Remote/search');?>" role="form" method="post">
                <input type="text" class="col-xs-9 col-sm-10 search-box" placeholder="请输入您想查询的商品" name="keyword">
                <input type="submit" class="col-xs-3 col-sm-2 search-btn" value="搜  索">
            </form>
        </div>
    </div>
    <div class="row">
        <ul class="list-unstyled img-contrast col-xs-12">
            <form action="<?php echo U('Mobile/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                <li class="col-xs-6">
                    <div>
                        <a data-toggle="modal" href="" class="myup taoci" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>><span
                                class="glyphicon glyphicon-camera"></span><b>·</b><span id="taoci1">陶瓷系列</span></a>
                                <input type="submit" value="上传">
                    </div>
                </li>
                <input type="file" name="taoci[]" style="display:none;" accept="image/png,image/jpg,image/jpeg" id="taoci2" multiple>
                
            </form>
            <form action="<?php echo U('Mobile/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                <li class="col-xs-6">
                    <div>
                        <a data-toggle="modal" href="" class="myup qingtong" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>><span
                                class="glyphicon glyphicon-camera"></span><b>·</b><span id="qingtong1">青铜系列</span></a>
                                <input type="submit" value="上传" >
                    </div>
                </li>
                <input type="file" name="qingtong[]" style="display:none;" accept="image/png,image/jpg,image/jpeg" id="qingtong2" multiple>
                
            </form>
            <form action="<?php echo U('Mobile/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                <li class="col-xs-6">
                    <div>
                        <a data-toggle="modal" href="" class="myup tongjing" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?> ><span
                                class="glyphicon glyphicon-camera"></span><b>·</b><span id="tongjing1">铜镜系列</span></a>
                                <input type="submit" value="上传">
                    </div>
                </li>
                <input type="file" name="tongjing[]" style="display:none;" accept="image/png,image/jpg,image/jpeg" id="tongjing2" multiple>
                
            </form>
            <form action="<?php echo U('Mobile/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                <li class="col-xs-6">
                    <div>
                        <a data-toggle="modal" href="" class="myup hetian" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>><span
                                class="glyphicon glyphicon-camera"></span><b>·</b><span id="hetian1">玉石籽料</span></a>
                                <input type="submit" value="上传">
                    </div>
                </li>
                <input type="file" name="hetian[]" style="display:none;" accept="image/png,image/jpg,image/jpeg" id="hetian2" multiple>
                
            </form>
        </ul>
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">
                    <span style="color: #000;font-size: 30px;" aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <div class="media">
                    <a class="media-left" href="#">
                        <img src="/Application/Public/mobile/images/a.jpg" alt="">
                    </a>

                    <div class="media-body">
                        <h4 class="media-heading">请您先登录E搜藏账号</h4>

                        <p><strong style="color: #264199">·</strong> 还没有E搜藏账号:<a href="<?php echo U('Mobile/Index/regshow');?>" > 立即注册</a></p>

                        <div class="text-right">
                            <button class="btn text-white bg-blue"><a href="<?php echo U('Mobile/Index/loginshow');?>" style="text-decoration:none; out-line: none; color:#fff;">确定登录</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/Application/Public/mobile/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/mobile/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        // dom加载完毕
        var $m_btn = $('#modalBtn');
        var $modal = $('.modal');
        $m_btn.on('click', function () {
            $modal.modal({backdrop: 'static'});
        });
        // 测试 bootstrap 居中
        $modal.on('shown.bs.modal', function () {
            var $this = $(this);
            var $modal_dialog = $this.find('.modal-dialog');
            var m_top = ( $(document).height() - $modal_dialog.height() ) / 2;
            $modal_dialog.css({'margin': m_top + 'px auto'});
        });

        // type=file
        if(!($('.myup').attr('data-target'))){
            $('.taoci').click(function(){
                $('#taoci2').click()
            })
            $('.qingtong').click(function(){
                $('#qingtong2').click()
            })
            $('.tongjing').click(function(){
                $('#tongjing2').click()
            })
            $('.hetian').click(function(){
                $('#hetian2').click()
            })
        }
        // type=file文件名
        
        $('#taoci2').change(function(){
            var file = $("#taoci2").val();
            var fileName = getFileName(file);
            function getFileName(o){
                var pos=o.lastIndexOf("\\");
                return o.substring(pos+1);  
            }
            $('#taoci1').html('<span style="color:red">请上传</span>')
        }) 
        $('#qingtong2').change(function(){
            var file = $("#qingtong2").val();
            var fileName = getFileName(file);
            function getFileName(o){
                var pos=o.lastIndexOf("\\");
                return o.substring(pos+1);  
            }
            $('#qingtong1').html('<span style="color:red">请上传</span>')
        })
        $('#tongjing2').change(function(){
            var file = $("#tongjing2").val();
            var fileName = getFileName(file);
            function getFileName(o){
                var pos=o.lastIndexOf("\\");
                return o.substring(pos+1);  
            }
            $('#tongjing1').html('<span style="color:red">请上传</span>')
        })
        $('#hetian2').change(function(){
            var file = $("#hetian2").val();
            var fileName = getFileName(file);
            function getFileName(o){
                var pos=o.lastIndexOf("\\");
                return o.substring(pos+1);  
            }
            $('#hetian1').html('<span style="color:red">请上传</span>')
        })  
    });
</script>
</body>
</html>