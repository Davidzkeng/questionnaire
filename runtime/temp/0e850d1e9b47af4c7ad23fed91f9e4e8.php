<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpStudy\WWW\questionnaire\public/../application/admin\view\index\index.html";i:1514341148;s:80:"D:\phpStudy\WWW\questionnaire\public/../application/admin\view\common\_head.html";i:1514283778;s:82:"D:\phpStudy\WWW\questionnaire\public/../application/admin\view\common\_footer.html";i:1514283778;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>ERP</title>

    
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="/favicon.ico">
<link href="/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
<link href="/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="/css/animate.min.css" rel="stylesheet">
<link href="/css/style.min.css?v=4.0.0" rel="stylesheet">
<link href="/css/plugins/jsTree/style.min.css" rel="stylesheet">
<link href="/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="/css/plugins/select/select2.css" rel="stylesheet">
<link href="/css/plugins/summernote/summernote.css" rel="stylesheet">
<link href="/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<link href="/css/plugins/chosen/chosen.css" rel="stylesheet">

</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="/img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo session('admin_user.admin_name'); ?></strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo url('admin/login/logout'); ?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            <span><img alt="image" class="img-circle" src="/img/profile_small.jpg" style="width: 40%" /></span>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="<?php echo url('index/main'); ?>"><i class="fa fa-user"></i> <span class="nav-label">首页</span></a>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="">用户管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">基础资料管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo url('admin/Material/index'); ?>">物料表</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        
                        
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo url('admin/login/logout'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="" frameborder="0" data-id="<?php echo url('index/main'); ?>" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2017 <a href="#" target="_blank">ERP</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
       
        <!--右侧边栏结束-->
        <!--mini聊天窗口开始-->
        
    </div>

    <script src="/js/jquery.min.js?v=2.1.4"></script>
<script src="/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/js/plugins/peity/jquery.peity.min.js"></script>
<!--<script src="/js/content.min.js?v=1.0.0"></script>-->
<script src="/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="/js/plugins/layer/layer.min.js"></script>
<script src="/js/plugins/iCheck/icheck.min.js"></script>
<script src="/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="/js/plugins/echarts/echarts-all.js"></script>
<script src="/js/z_function.js"></script>
<script src="/js/plugins/validate/jquery.validate.min.js"></script>
<script src="/js/plugins/validate/additional-methods.js"></script>
<script src="/js/plugins/validate/messages_zh.min.js"></script>
<script src="/js/plugins/layer/laydate/laydate.js"></script>
<script src="/js/plugins/summernote/summernote.min.js"></script>
<script src="/js/plugins/summernote/summernote-zh-CN.js"></script>
<script src="/js/plugins/chosen/chosen.jquery.js"></script>

    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/js/hplus.min.js?v=4.0.0"></script>
    <script type="text/javascript" src="/js/contabs.min.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>
	<script src="/js/com.js"></script>
	<script>
		
	</script>
</body>

</html>