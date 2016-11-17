<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>goods</title>
    <link rel="stylesheet" href="/Myphp/Public/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="/Myphp/Public/HomeStatic/public.css"/>
    <script type="text/javascript"  language="javascript" src="/Myphp/Public/jquery/dist/jquery.js" ></script>
    <script type="text/javascript" language="javascript"  src="/Myphp/Public/bootstrap/dist/js/bootstrap.js" ></script>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">简介</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">商品 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('List/goodsAdd');?>">添加</a></li>
                        <li><a href="<?php echo U('List/goodsList');?>">列表</a></li>
                        <li><a href="<?php echo U('List/goodsClass');?>">商品分类</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Login/loginOut');?>">退出</a></li>
        </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<ol class="breadcrumb">
    <li><a href="#">商品</a></li>
    <li><a href="#">商品添加</a></li>
</ol>
<form class="form-inline" method="post" action="<?php echo U('List/goods_Add');?>">
    <div class="input-group">
        <span class="input-group-addon">商品名</span>
        <input type="text" name="goodsName" class="form-control" placeholder="GoodsName">
    </div>

    <div class="input-group">
       <select name="goods_class"  class="form-control">
           <?php if(is_array($goods_class)): $i = 0; $__LIST__ = $goods_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item['class_id']); ?>" selected="<?php echo ($item['class_id']); ?>" ><?php echo ($item['class_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
       </select>
    </div>

    <div class="input-group">
        <span class="input-group-addon">￥</span>
        <input type="text" name="goodsPrice" class="form-control">
        <span class="input-group-addon">.00</span>
    </div>
    <button type="submit" class="btn btn-success">添加</button>
</form>



</body>
</html>