<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>

    <!-- Bootstrap -->
    <link href="/Application/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/Application/Public/fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
    <link href="/Application/Public/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.<?php echo COMMON_PUBLIC;?>js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="height: 100%">
<div class="main">
    <div class="header text-right">
        <span><strong><a href="<?php echo U('Index/index');?>">网站首页</a></strong></span>
        <span><strong><a href="<?php echo U('Index/core');?>">核心技术</a></strong></span>
        <span><strong><a href="<?php echo U('Index/team');?>">公司与团队</a></strong></span>
        <span><strong><a href="<?php echo U('Index/help');?>/aid/10">帮助中心</a></strong></span>
        <?php if(session('MID') ): ?><span><a href="<?php echo U('Member/Index/index');?>" style="text-decoration:none;font-size: 10px;font-weight:bold;">欢迎，<?php echo session('PHONE');?></a></span>
        <?php else: ?>
            <span><a href="javascript:" data-toggle="modal" data-target="#myModal" id="login">登录</a></span><?php endif; ?>
    </div>
    <div class="container">
        <div class="logo text-center"><a href=""><img src="/Application/Public/images/logo.jpg" alt=""/></a></div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
                <form action="<?php echo U('Home/Remote/search');?>" role="form" class="row" method="post">
                    <input type="text" class="col-xs-9 col-sm-10 search-box" placeholder="请输入您想查询的商品" name="mykeyword">
                    <input type="submit" class="col-xs-3 col-sm-2 search-btn" value="搜  索"/>
                </form>
            </div>
        </div>
        <div class="row img-contrast">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div style="border: 1px solid #DFDFDF;background: #F1F1F1">
                    <div class="text-center" style="color: #000;padding: 5px 0">图片对比专区</div>
                    <table style="width: 100%;table-layout: fixed">
                        <tr>
                        <form action="<?php echo U('Home/Remote/searchimgs');?>" method="post" enctype="multipart/form-data">
                            <td>
                                <div class="bg-blue text-white taoci-head">· 陶瓷系列</div>
                                <div class="s-text">
                                    <small>上传图片进行对比</small>
                                </div>
                                <div class="img-upload">
                                    <button type="button" class="btn btn-sm" data-toggle="modal" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>>
                                        <span class="glyphicon glyphicon-cloud-upload" id="taoci1">本地选择图片</span> 
                                        <input type="file" name="taoci[]" style="display:none;"  accept="image/jpeg,image/jpg,image/png" id="taoci2" multiple>
                                    </button>
                                        <input type="submit" value="上传" style="display: block;">
                                </div>

                            </td>
                        </form>
                        <form action="<?php echo U('Home/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                            <td>
                                <div class="bg-blue text-white taoci-head">· 青铜系列</div>
                                <div class="s-text">
                                    <small>上传图片进行对比</small>
                                </div>
                                <div class="img-upload">
                                    <button type="button" class="btn btn-sm" data-toggle="modal" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>>
                                        <span class="glyphicon glyphicon-cloud-upload" id="qingtong1">本地选择图片</span> 
                                        <input type="file" name="qingtong[]" style="display:none;" accept="image/jpeg,image/jpg,image/png" id="qingtong2" multiple>
                                    </button>
                                    <input type="submit" value="上传" style="display: block;">
                                </div>
                            </td>
                        </form>
                        <form action="<?php echo U('Home/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                            <td>
                                <div class="bg-blue text-white taoci-head">· 铜镜系列</div>
                                <div class="s-text">
                                    <small>上传图片进行对比</small>
                                </div>
                                <div class="img-upload">
                                    <button type="button" class="btn btn-sm" data-toggle="modal" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>>
                                        <span class="glyphicon glyphicon-cloud-upload" id="tongjing1">本地选择图片</span>
                                        <input type="file" name="tongjing[]" style="display:none;" accept="image/jpeg,image/jpg,image/png" id="tongjing2" multiple>
                                    </button>
                                    <input type="submit" value="上传" style="display: block;">
                                </div>
                            </td>
                        </form>
                        <form action="<?php echo U('Home/Remote/searchimgs');?>" enctype="multipart/form-data" method="post">
                            <td>
                                <div class="bg-blue text-white taoci-head">· 和田玉籽料系列</div>
                                <div class="s-text">
                                    <small>上传图片进行对比</small>
                                </div>
                                <div class="img-upload">
                                    <button type="button" class="btn btn-sm" data-toggle="modal" <?php if(session('MID')): else: ?>data-target="#myModal2"<?php endif; ?>>
                                        <span class="glyphicon glyphicon-cloud-upload" id="hetian1">本地选择图片</span>
                                        <input type="file" name="hetian[]" style="display:none;" accept="image/jpeg,image/jpg,image/png"  id="hetian2" multiple>
                                    </button>
                                    <input type="submit" value="上传" style="display: block;">
                                </div>
                            </td>
                        </form>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div>
            <img src="/Application/Public/images/ma.jpg" alt=""/>
            <p><strong>手机版</strong></p>
        </div>
        <div>版权所有 2003-2016 北京华美加投资咨询有限公司.保留一切权利.京ICP备09064986号</div>
    </div>
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
                                    <input type="number" class="form-control" placeholder="请输入手机号" name="phone" id="myphone">
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                    <span id="verifyphone" style="cursor:pointer">*验证手机号</span>
                                </div>
                                <div class="form-group has-feedback" style="overflow: hidden">
                                    <div style="width: 60%;float: left">
                                        <input type="text" class="form-control" placeholder="请输入验证码" name="yzm">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                                    <div style="width: 35%;float: left;margin-left: 5%">
                                        <div class="btn bg-blue text-white" style="width: 100%" id="sendsms">发送验证码</div>
                                    </div>

                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="请输入密码" name="pwd" id="mypwd">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="checkbox" class="checkbox-inline" name="autoLogin" value="1"> <span
                                        style="vertical-align: middle;display: inline-block">下次自动登录</span>
                                </div> -->
                                <div>
                                    <button class="btn bg-blue text-white" style="width: 100%" id="myreg">注册</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                            <img src="/Application/Public/images/a.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">请您先登录E搜藏账号</h4>
                            <p><strong style="color: #264199">·</strong> 还没有E搜藏账号:<a data-dismiss="modal" style="color:#264198" href="javascript:" data-toggle="modal" data-target="#myModal"> 立即注册</a></p>
                            <div class="text-right">
                                <button data-dismiss="modal" class="btn text-white bg-blue" href="javascript:" data-toggle="modal" data-target="#myModal">确定登录</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/Application/Public/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/js/bootstrap.min.js"></script>
<script>
    $(".search-box").focus(function () {
        $(this).addClass("border")
    })
    $(".search-box").blur(function () {
        $(this).removeClass("border")
    })
    $(".nav-tabs>li").click(function () {
        $(this).addClass("active").siblings().removeClass("active")
        $(".form>div").eq($(this).index()).show().siblings().hide()
    })
</script>
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
        if(!($('.btn-sm').attr('data-target'))){
            $('#taoci1').click(function(){
                $('#taoci2').click()
            })
            $('#qingtong1').click(function(){
                $('#qingtong2').click()
            })
            $('#tongjing1').click(function(){
                $('#tongjing2').click()
            })
            $('#hetian1').click(function(){
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

        //验证码
        $('#sendsms').click(function(){
            var phone=$('#myphone').val();
            var verifyphone=$('#verifyphone').text()
            // alert(verifyphone)
            if(!(phone.length==12||phone.length==11)){
                return false
            }
            if(verifyphone!="√可以注册"){
                return false
            }
            // alert(phone);
            $.ajax({
                type:"get",
                url:"<?php echo U('Member/Submail/dosms');?>?phone="+phone,
                dataType:"json",
                success:function(data){
                    if(data.xsend.status!="success"){
                        alert("短信发送失败，请重发")
                    }
                }
            })
        })

        // 验证是否注册
        // $('#verifyphone').click(function(){
        //     verifyajax()
        // })
        $('#myphone').blur(function(){
            verifyajax()
        })

        function verifyajax(phone){
            var phone=$('#myphone').val()
            if(!(phone.length==12||phone.length==11)){
                return false
            }
            $.ajax({
                url:"<?php echo U('Home/Index/verifyreg');?>?phone="+phone,
                type:"get",
                dataType:"json",
                success:function(data){
                    $('#verifyphone').html(data.msg)
                }
            })
        }
        
        // 密码验证mypwd
        $('#mypwd').blur(function(){
            var mypwd=$('#mypwd').val()
            if(mypwd.length<6){
                alert("密码必须大于6位")
                return false
            }
        })
        $('#myreg').click(function(){
            var mypwd=$('#mypwd').val()
            if(mypwd.length<6){
                alert("密码必须大于6位")
                return false
            }
        })


    });
</script>

</body>
</html>