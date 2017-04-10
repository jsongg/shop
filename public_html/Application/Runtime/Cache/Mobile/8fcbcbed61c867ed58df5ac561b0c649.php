<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册页</title>

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
<body class="bg-grey">
<div class="head text-center">
    <span class="he1" onclick="window.history.go(-1)">返回</span>

    <div>登录账号</div>
</div>
<div class="container">
    <div class="logo text-center">
        <img src="/Application/Public/mobile/images/logo.png" alt=""/>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo U('/Mobile/Index/reg');?>" method="post">
                <div class="form-group has-feedback">
                    <input type="number" class="form-control" placeholder="请输入手机号" name="phone" id="myphone">
                    <span class="glyphicon glyphicon-phone form-control-feedback" style="color: #BBBBBB"></span>
                    <span id="verifyphone" style="cursor:pointer">*验证手机号</span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="请输入验证码" name="yzm">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"
                                  style="color: #BBBBBB"></span>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="row">
                            <div class="col-xs-12 btn bg-blue text-white" id="sendsms">发送验证码</div>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="请输入密码" name="pwd" id="mypwd">
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="color: #BBBBBB"></span>
                </div>
                <div style="margin-top: 20px">
                    <button class="btn btn-lg col-xs-12 text-white bg-blue" id="myreg">立即注册</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="/Application/Public/mobile/js/jquery-1.11.3.js"></script>
<script src="/Application/Public/mobile/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
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
            // alert(1)
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
    })
</script>

</body>
</html>