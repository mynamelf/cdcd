<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的博客后台登录</title>
    <link rel="stylesheet" href="/bbs/Public/css/bootstrap.min.css">
    <script src="/bbs/Public/js/jquery-1.12.4.min.js"></script>
    <script src="/bbs/Public/js/bootstrap.min.js"></script>
    <style>
    body{
        background: url("/bbs/Public/img/bj.gif");
    }
    .wai{
        background: #fff;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="row clearfix">
    <br><br><br><br><br><br><br><br><br>
        <div class="col-md-5 col-md-offset-2 column wai">
        <h1>博客后台登录</h1>
        <br>
            <form class="form-horizontal" role="form" action="<?php echo U('Admin/a');?>" method="post">
                <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">账号：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="name" />
                    </div>
                </div>
                <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">密码：</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name="password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-default">就这样登录</button><span style="color:red"><?php echo ($m); ?></span>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
</body>
</html>