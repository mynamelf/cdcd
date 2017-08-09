<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的博客首页</title>
    <link rel="stylesheet" href="/bbs/Public/css/bootstrap.min.css">
    <script src="/bbs/Public/js/jquery-1.12.4.min.js"></script>
    <script src="/bbs/Public/js/bootstrap.min.js"></script>
    <style>
    .bg{
        height:600px;
        width:100%;
        filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')";
        -moz-background-size:100% 100%; 
        background-size:100% 100%;
    }
    a{
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="container">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 column">
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
            <div class="jumbotron" style="background: #000;color:#fff">
                <h1>
                    凉风博客，Hello, world!
                </h1>
                <p>
                    After contacting PHP, I thought the language was simple, rude and wonderful, so I used it to do this blog.
                </p>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h2 class="text-left">
            我的博文最新选读
            </h2><hr>
        </div>
        <?php if(is_array($data)): foreach($data as $key=>$wz): ?><div class="col-md-4 column">
            <h3>
                “<?php echo ($wz["w_title"]); ?>”
            </h3>
            <small>作者：<?php echo ($wz["w_name"]); ?> | 时间：<?php echo ($wz["time"]); ?> | <span class="glyphicon glyphicon-eye-open"> <?php echo ($wz["read"]); ?></span></small>
            <p style="color:#ccc">
                <?php echo ($wz["jjie"]); ?>
            </p>
            <p>
                 <a class="btn" onclick="onRD(<?php echo ($wz["id"]); ?>)">阅读 点击 »</a>
            </p>
        </div><?php endforeach; endif; ?>
        <div class="col-md-12 column">
            <h2 class="text-left">
            热门博文最新选读
            </h2><hr>
        </div>
        <?php if(is_array($dada)): foreach($dada as $key=>$w): ?><div class="col-md-4 column">
            <h3>
                “<?php echo ($w["w_title"]); ?>”
            </h3>
            <small>作者：<?php echo ($w["w_name"]); ?> | 时间：<?php echo ($w["time"]); ?> | <span class="glyphicon glyphicon-eye-open"> <?php echo ($w["read"]); ?></span></small>
            <p style="color:#ccc">
                <?php echo ($w["jjie"]); ?>
            </p>
            <p>
                 <a class="btn" onclick="onRD(<?php echo ($w["id"]); ?>)">阅读 点击 »</a>
            </p>
        </div><?php endforeach; endif; ?>
        <script>
            function onRD(id){
                window.location.href="<?php echo U('Home/Blo/d/i/"+id+"');?>";
            }
        </script>
        <div class="col-md-12 column" >
            <h2 class="text-left">
            美图秀秀
            </h2><hr>
            <div class="col-md-12 column" >
                <div class="carousel slide " id="carousel-201580">
                    <div class="carousel-inner">
                        <div class="item active bg">

                            <img src="/bbs/Public/img/2.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                             
                            </div>
                        </div>
                        <?php $__FOR_START_30896__=3;$__FOR_END_30896__=8;for($i=$__FOR_START_30896__;$i < $__FOR_END_30896__;$i+=1){ ?><div class="item col-md-12 bg" >
                            <img src="/bbs/Public/img/<?php echo ($i); ?>.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                            
                            </div>
                        </div><?php } ?>
                    </div> 
                    <a class="left carousel-control" href="#carousel-201580" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a> 
                    <a class="right carousel-control" href="#carousel-201580" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div style="background:#000; color:#fff" class="col-md-12 text-center">
<hr>
<br><br><br>
    粤ICP备：17059378号
<br><br>
</div>

</body>
</html>