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
            <div class="col-md-12 column">
            <h2>用户管理</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>账号</th>
                            <th>名字</th>
                            <th>性别</th>
                            <th>类型</th>
                            <th>留言</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($date)): foreach($date as $key=>$us): ?><tr>
                                <td><?php echo ($us["id"]); ?></td>
                                <td><?php echo ($us["per_user"]); ?></td>
                                <td><?php echo ($us["per_name"]); ?></td>
                                <td><?php echo ($us["per_sex"]); ?></td>
                                <td><?php echo ($us["per_ty"]); ?></td>
                                <td><?php echo ($us["per_ly"]); ?></td>
                            </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <?php echo ($page); ?>
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
</body>
</html>