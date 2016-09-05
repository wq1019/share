<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登陆 - E8资料分享</title>
    <link href="/share/Public/Home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/share/Public/Home/css/login.css" rel="stylesheet">
    <link href="/share/Public/Home/css/comm.css" rel="stylesheet">
</head>
<body>
<!--登陆-->
<a href="<?php echo U('Index/index');?>" class="center-block logo"><img src="/share/Public/Home/pic/logo.jpg" class="img-circle center-block"/></a>
<h3 class="text-center title">Sign in to E8Share</h3>
<div class="login_main container">
    <div class="login_body">
        <form method="POST" action="<?php echo U('Passport/doLogin');?>">
            <div class="form-group">
                <label for="account">Account number</label>
                <input type="text" name="username" class="form-control" id="account" placeholder="请输入账号">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="请输入密码">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" checked name="checkbox">Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-sm btn-block" id="my_button" data-loading-text="Loading..." autocomplete="off">登 陆</button>
        </form>
    </div>
</div>
<a class="center-block text-center sign_up " href="#">Create an account!</a>
<!--底部-->
<footer class="footer">
    <p class="text-center">E8net-3t小组</p>
</footer>
<!--js-->
<script src="/share/Public/Home/js/jquery-2.1.4.js"></script>
<script src="/share/Public/Home/js/bootstrap.min.js"></script>
</body>
</html>