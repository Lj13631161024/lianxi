<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<html lang="zh-CN">
<head>
<title><?php echo $SEO['site_title'];?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="baidu-site-verification" content="ikevaCJxTE" /><!--添加检测代码-->
<meta name="sogou_site_verification" content="7aS1pdTYoS"/><!--网站验证代码-->
<meta property="qc:admins" content="45712371776231006375"/><!--qq登录验证-->
<meta property="wb:webmaster" content="a3a19606205b2818" /><!--微博登陆验证-->
<base target='_blank'>
<link rel="shortcut icon" href="http://www.kb.com/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo S;?>bs/css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo S;?>bs/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo S;?>bs/js/bootstrap.min.js"></script>
</head>
<!-- 导航栏 -->
<style type="text/css">
    body {
        font-family: "微软雅黑"
    }
    ul li {
        display: inherit;
    }
    
    .nav_index{
        height: 90px;
        width: 100%;
        /*background: #fee504*/
        background: #e6212a
    }
    @media (min-width: 768px){
        .nav_index .navbar-nav {
            height: 90px;
        }
    }
    @media (min-width: 768px){
        .nav_index .navbar-nav>li {
            width: 130px;
        } 
    }
    .navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
        height: 90px;
        color: #e6212a;
        background-color: #fff;
    }
    .navbar-default .navbar-nav>li>a {
        /*color: #666;*/
        color: #fff;
        font-size: 18px;
        line-height: 60px;
        text-align: center;
    }
    .navbar-brand>img{
        margin-top: -10px;
    }
    @media (min-width: 768px){
        .container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header {
            width: 160px;
        }        
    }
    .dropdown-menu {
        min-width: 130px;
        font-size: 18px;
        /*height: 255px;*/
        border: 0;
        padding: 0;
    }
    .navbar-default .navbar-nav>li>a:hover{
        background: #fff;
        color: #e6212a
    }
    .dropdown-menu>li {
        border-bottom: 1px solid #999;
        height: 50px;
    }
    .dropdown-menu>li>a {
        text-align: center;
        color:#e6212a;
        line-height: 40px;
    }
    .dropdown-menu>li>a:hover{
        color: #fff;
        background: #e6212a;
        height: 50px
    }
    .navbar-default {
        margin-bottom: 40px;
        z-index: 10;
        position: fixed;
        width: 100%;   
    }
    .clear-0 {
        margin-top: 0px
    }
    .clear-10 {
        margin-top: 10px
    }
    .clear-20 {
        margin-top: 20px
    }
    .clear-30 {
        margin-top: 30px
    }
    .clear-40 {
        margin-top: 40px
    }
    .clear-50 {
        margin-top: 50px
    }.clear-60 {
        margin-top: 60px
    }
    .clear-70 {
        margin-top: 70px
    }
    .clear-80 {
        margin-top: 80px
    }.clear-90 {
        margin-top: 90px
    }
    .clear-100 {
        margin-top: 100px
    }
    .kg{
        margin-top: 20px;
        width: 100%;
        height: 71px;
        float: left;
    }
</style>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid nav_index">      
        <div class="container">
             <div class="navbar-header">
                <a class="navbar-brand" href="http://www.kb.com-list-9-1.html" target="_self"> <img src="http://www.kb.com/statics/images/admin_img/logo.png"></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown" id="index">
                    <a href="http://www.kb.com/list-9-1.html" target="_self">
                        首页
                        <!-- <b class="caret"></b> -->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="ppjj" id="ppjj"><a href="#" target="_self">品牌简介</a></li>
                        <li class="ppsp" id="ppsp"><a href="#" target="_self">品牌视频</a></li>
                        <li class="zzjd" id="zzjd"><a href="#" target="_self">种植基地</a></li>
                        <li class="fzlc" id="fzlc"><a href="#" target="_self">发展历程</a></li>
                        <li class="wdcx" id="wdcx"><a href="#" target="_self">网点查询</a></li>
                    </ul>
                </li>
                <li class="zsjm" id="zsjm"><a href="http://www.kb.com/list-10-1.html" target="_self">招商加盟</a></li>
                <li class="hyzq" id="hyzq"><a href="#" target="_self">会员专区</a></li>
                <li class="news" id="news"><a href="http://www.kb.com/list-11-1.html" target="_self">新闻资讯</a></li>
                <li class="rczp" id="rczp"><a href="#" target="_self">人才招聘</a></li>
                <li class="glxy" id="glxy"><a href="#" target="_self">管理学院</a></li>
                <li class="gyshz" id="gyshz"><a href="#" target="_self">供应商合作</a></li>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript">
    $(function () {
       $(".dropdown").mouseover(function () {
           $(this).addClass("open");
       });
       $(".dropdown").mouseleave(function(){
           $(this).removeClass("open");
       })
    })
</script>
<div class="kg"></div> 