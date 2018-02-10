<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\WWW\questionnaire\public/../application/index\view\index\search.html";i:1518173151;}*/ ?>
<!doctype html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="description" content="">
	  <meta name="keywords" content="">
	  <meta name="viewport"
	        content="width=device-width, initial-scale=1">
	  <title>广东省岭南天使志愿者联盟人力资源信息</title>
	
	  <!-- Set render engine for 360 browser -->
	  <meta name="renderer" content="webkit">
	
	  <!-- No Baidu Siteapp-->
	  <meta http-equiv="Cache-Control" content="no-siteapp"/>
	
	  <!-- <link rel="icon" type="image/png" href="{{assets}}i/favicon.png"> -->
	
	  <!-- Add to homescreen for Chrome on Android -->
	  <meta name="mobile-web-app-capable" content="yes">
	  <!-- <link rel="icon" sizes="192x192" href="{{assets}}i/app-icon72x72@2x.png"> -->
	
	  <!-- Add to homescreen for Safari on iOS -->
	  <meta name="apple-mobile-web-app-capable" content="yes">
	  <meta name="apple-mobile-web-app-status-bar-style" content="black">
	  <!-- <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png"> -->
	
	  <!-- Tile icon for Win8 (144x144 + tile color) -->
	  <!-- <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png"> -->
	  <meta name="msapplication-TileColor" content="#0e90d2">

	  <link rel="stylesheet" href="/css/bootstrap.min.css" />
	  <link rel="stylesheet" href="/css/index.css" />
	  <script src="/js/jquery.min.js"></script>
	</head>
<style>
	.list-group-item{
		overflow: hidden;
	}
	.list-group-item label{
		text-align: center;
	}
</style>
<body>
	<div class="head" id="name">广东省岭南天使志愿者联盟人力资源信息查询</div>
	<div style="text-align: center;margin-top: 50px;">
		<form action="<?php echo url('index/search'); ?>" method="get" id="form1">
			<label>输入姓名：</label>
			<input type="text" name="c_3[]">
			<button style="color: #fff;background-color: #09c1f9;border: 0;" class="search">查询</button>
		</form>
	</div>
	<ul class="list-group" style="margin-top: 10px;">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?>
	    <li class="list-group-item">
		    <label class="col-sm-4"><?php echo $li['c_3']; ?></label>
		    <label class="col-sm-4"><?php echo $li['c_37'][0]; ?></label>
		    <!-- <label class="col-sm-4">教授</label> -->
	    </li>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</body>
<script>
	
</script>
</html>