<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_index"); ?>
<!-- 轮播图 -->
<style type="text/css">
    #index>a {
        color: #e6212a;
        background: #fff;
    }
    .carousel-control.left,.carousel-control.right{
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0) 0,rgba(0,0,0,.0001) 100%);
        top:42%
    }
    .carousel-indicators .active {
        background-color: #e6212a;
    }
    .carousel-indicators li {
        background-color: rgba(0, 0, 0, 0.4);
        border: 1px solid #fff;
    }
</style>
<div class="container-default">
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <a href=""><img src="<?php echo S;?>bs/img/index/index_1.jpg" alt="First slide"></a>
            </div>
            <div class="item">
                <a href=""><img src="<?php echo S;?>bs/img/index/index_1.jpg" alt="First slide"></a>
            </div>
            <div class="item">
                <a href=""><img src="<?php echo S;?>bs/img/index/index_1.jpg" alt="First slide"></a>
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel" 
       data-slide="prev"><!--  <span class="glyphicon glyphicon-chevron-left
"></span> --><img src="http://www.bc100.com/phpcms/templates/bc/content/bootstrap/images/index/chevron-left.png"></a>
    <a class="carousel-control right" href="#myCarousel" 
       data-slide="next"><img src="http://www.bc100.com/phpcms/templates/bc/content/bootstrap/images/index/chevron-right.png"><!-- <span class="glyphicon glyphicon-chevron-right
"></span> --></a>
    </div>
</div>


<script type="text/javascript">
    $('#myCarousel').carousel({
        // interval: 2000
    })
</script>
<!-- 弹框 -->
<style type="text/css">
    .zhuzhu{
        width: 150px;
        height: 150px;
        margin-top:-250px;
        z-index: 2;
        position: fixed;
        right: 10
    }
    .zhuzhu img{
        width: 100%;
        height: 100%
    }
   
</style>
<style> 
    .zhuzhu
    {
    
        position:relative;
        animation:myfirst 10s;
        -moz-animation:myfirst 10s; /* Firefox */
        -webkit-animation:myfirst 10s; /* Safari and Chrome */
        -o-animation:myfirst 10s; /* Opera */
    }

    @keyframes myfirst
    {
        0%   { right:-50px; top:0px;}
        25%  {right:-200px; top:0px;}
        50%  {right:-200px; top:200px;}
        75%  {right:0px; top:200px;}
        100% { right:0px; top:0px;}
        0% {transform: scale(1.4,1.4);}
        10% {transform: scale(1,1);}
        25% {transform: scale(1.2,1.2);}
        50% {transform: scale(1,1);}
        70% {transform: scale(1.2,1.2);}
        100% {transform: scale(1,1);}
    }

 
</style>
<div class="container-default">
    <div class="zhuzhu"><img src="<?php echo S;?>bs/img/index/zhuzhu.png"></div>   
</div>
<img src="http://www.bc100.com/phpcms/templates/bc/content/bootstrap/images/index/zxglbj.png" class="img-responsive">
<?php include template("content","footer_index"); ?>