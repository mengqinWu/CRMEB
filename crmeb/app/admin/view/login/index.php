<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <title>登录管理系统 -  Powered by love124!</title>
    <meta name="generator" content="love124! v2.5" />
    <meta name="author" content="love124! Team and love124 UI Team" />
    <link href="{__FRAME_PATH}css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="{__PLUG_PATH}layui/css/layui.css" rel="stylesheet">
    <link href="{__FRAME_PATH}css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="{__FRAME_PATH}css/animate.min.css" rel="stylesheet">
    <link href="{__FRAME_PATH}css/style.min.css?v=3.0.0" rel="stylesheet">
    <script>
        top != window && (top.location.href = location.href);
    </script>
</head>
<body class="gray-bg login-bg">
<!-- <canvas id="canvas" width="900" height="300" style="position: fixed;top: -50px;width: 60%;left: 20%"></canvas> -->
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div class="login-group">
        <h3 class="login-logo">
        love124
            <!-- <img src="{__ADMIN_PATH}images/logo.png"> -->
        </h3>
        <form role="form" action="{:url('verify')}" method="post" id="form" onsubmit="return false">
            <div class="form-group">
                <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-user"></i> </span>
                    <input type="text" id="account" name="account" placeholder="用户名" placeholder="用户名" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-unlock-alt"></i> </span>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="密码" required="">
                </div>

            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" id="verify" name="verify" placeholder="验证码" required="">
                    <span class="input-group-btn" style="padding: 0;margin: 0;">
                        <img id="verify_img" src="{:Url('captcha')}" alt="验证码" style="padding: 0;height: 34px;margin: 0;">
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            <?php /*  <p class="text-muted text-center"> <a href="{:url('./forgetpwd')}"><small>忘记密码了？</small></a> | <a href="{:url('./register')}">注册一个新账号</a>
              </p>  */ ?>
        </form>
    </div>
</div>

<!-- 全局js -->
<script src="{__PLUG_PATH}jquery-1.10.2.min.js"></script>
<script src="{__FRAME_PATH}js/bootstrap.min.js?v=3.4.0"></script>
<script src="{__MODULE_PATH}login/flaotfont.js"></script>
<script src="{__MODULE_PATH}login/ios-parallax.js"></script>
<script src="{__PLUG_PATH}layui/layui.all.js"></script>
<script src="{__MODULE_PATH}login/index.js"></script>
<!--统计代码，可删除-->
<!--点击刷新验证码-->
</body>
</html>