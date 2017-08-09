<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
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
               <div class="jumbotron" style="background:#000;color:#fff">
        <h1>博客后台管理系统</h1>
        <p>管理员：<?php echo session('per_name') ?></p> 
        <a href="<?php echo U('Log/esc');?>" type="button" class="btn btn-default">退出</a>
   </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-3 column">
            <div class="col-md-12 column">
    <div class="list-group">
        <a style="background:#000" class="list-group-item active">管理列表</a>
         <div class="list-group-item">
          <a href="<?php echo U('Admin/admin');?>">用户信息</a>
         </div>
         <div class="list-group-item">
          <a href="<?php echo U('Admin/ud');?>">增加用户</a>
         </div>
         <div class="list-group-item">
          <a href="<?php echo U('LY/y');?>">留言信息</a>
         </div>
         <div class="list-group-item">
          <a href="<?php echo U('BW/w');?>">博文信息</a>
         </div>
         <div class="list-group-item">
          <a href="<?php echo U('BW/add');?>">添加博文</a>
         </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
</div>
<script>
</script>
        </div>
        <div class="col-md-9 column">
        <h2>发表博文</h2>
            <div class="col-md-12 column">
                <form class="form-horizontal" role="form" id="add">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="标题" name="title">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="作者" value="小凉" name="uname">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="简介" name="jjie"></textarea>
                  </div>
                  <button type="button" class="btn btn-default" id="dl">段落</button>
                  <div class="form-group">
                      <textarea class="form-control" rows="15" placeholder="正文" name="text" id="tex"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-default" onclick="getadd()">提交</button>
                    </div><span id="p" ></span>
                  </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div style="background:#000; color:#fff" class="col-md-12 text-center">
<hr>
<br><br><br>
    粤ICP备：17059378号
<br><br>
</div>
<script>
$(function (){
    $("[data-toggle='popover']").popover();
    $("#dl").click(function(){
        $("#tex").val($("#tex").val()+"<br>");
        $("#tex").focus();
    });
});
function getadd(){
    $.get('<?php echo U("BW/doadd");?>',$('#add').serialize(),function(data){
        alert("***"+data+"***");
        location.reload();
    });
}
</script>
</body>
</html>