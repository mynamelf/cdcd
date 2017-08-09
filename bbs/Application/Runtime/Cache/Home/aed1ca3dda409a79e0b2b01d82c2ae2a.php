<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的博客博文-<?php echo ($rwz[0]["w_title"]); ?></title>
    <link rel="stylesheet" href="/bbs/Public/css/bootstrap.min.css">
    <script src="/bbs/Public/js/jquery-1.12.4.min.js"></script>
    <script src="/bbs/Public/js/bootstrap.min.js"></script>
    <style>
    a{
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default " role="navigation" style="background: #000;color:#fff">
        <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
             <span class="sr-only">凉风的博客</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button> 
             <a style="color:#fff" class="navbar-brand" href="<?php echo U('Index/index');?>">凉风的博客</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <center>
            <ul class="nav navbar-nav ">
                <li>
                     <a style="color:#fff" href="<?php echo U('Index/index');?>">首页</a>
                </li>
                <li>
                     <a style="color:#fff" href="<?php echo U('Blo/b');?>">博文</a>
                </li>
                <li>
                     <a style="color:#fff" href="<?php echo U('LY/l');?>">留言</a>
                </li>
            </ul>
            </center>
            <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" />
                </div> <button type="submit" class="btn btn-default">索索</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                     <!-- <a style="color:#fff" href="<?php echo U('Index/index');?>">注册/登录</a> -->
                </li>
            </ul>
        </div>
        
    </nav>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ol class="breadcrumb" style="background:#fff">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Blo/b');?>">博文</a></li>
                <li class="active"><?php echo ($rwz[0]["w_title"]); ?></li>
            </ol>
            <hr>
        </div>
        <div class="col-md-9 column">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h1>
                        <?php echo ($rwz[0]["w_title"]); ?> 
                        <br><small><?php echo ($rwz[0]["w_name"]); ?>__<?php echo ($rwz[0]["time"]); ?>__<span class="glyphicon glyphicon-eye-open"> <?php echo ($rwz[0]["read"]); ?></span></small>
                    </h1>
                </div>
                <h4 style="line-height:30px">
                    <?php echo ($rwz[0]["text"]); ?>
                    <hr>
                    <center>    
                    “完”
                    </center>
                    <hr>
                </h4>
            </div>

        </div>

        <div class="col-md-3 column">
            <div class="col-md-12 column">
    <div class="list-group">
        <a style="background:#000" class="list-group-item active">管理</a>
        <!-- <div class="list-group-item">
         <img height="50" width="50" src="/bbs/Public/img/1.jpg" alt='' /><br>
         phper
         &nbsp;&nbsp;&nbsp;
         <span style="color:#60CAD9 " class="glyphicon glyphicon-tint"></span>
         </div>
         <div class="list-group-item">
         男
         </div>
         <div class="list-group-item">
          留言：123456
         </div> --> 
         <div class="list-group-item">
          游客
         </div>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item active">最新博文</a>
        <?php if(is_array($data)): foreach($data as $i=>$wz): ?><div class="list-group-item">
            <span style="background:#60CAD9" class="badge"><?php echo ($i+1); ?></span>
                <a onclick="onRD('<?php echo ($wz["id"]); ?>')"><?php echo ($wz["w_title"]); ?></a>
            </div><?php endforeach; endif; ?>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item active">最热博文</a>
        <?php if(is_array($dae)): foreach($dae as $i=>$wz): ?><div class="list-group-item">
            <span style="background:#6cCcc0" class="badge"><?php echo ($wz["read"]); ?></span>
                <a onclick="onRD('<?php echo ($wz["id"]); ?>')"><?php echo ($wz["w_title"]); ?></a>
            </div><?php endforeach; endif; ?>
    </div>
</div>
<script>
    function onRD(id){
        window.location.href="<?php echo U('Home/Blo/d/i/"+id+"');?>";
    }
</script>
        </div>

    </div>
</div>
<div style="background:#000; color:#fff" class="col-md-12 text-center">
<hr>
<br><br><br>
    粤ICP备：17059378号
<br><br>
</div>
</body>
</html>