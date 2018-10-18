<?php
include('../connect.php');


$mainsql = "SELECT * FROM mainhead ORDER BY id DESC";
$mymainsql_result = $db ->query($mainsql);
if($mymainsql_result === false){
    echo "SQL错误";
    exit;
}

$mains = [];
while($main = $mymainsql_result -> fetch_array(MYSQLI_ASSOC)){
    $mains[] = $main;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header class="header" id="header" >
        <div class="container-inner">
            <a href="#" >
                <h1>
                    <div id = oneHeader>
                    <span class="boxright">宁静</span>
                    <span class="boxleft">MichLiu的个人博客</span>
                </div>
                </h1>
            </a>
        </div>
        <div class="decor-part">
			<div id="particles-js"></div>
		</div>
        <div class="navbar" id="nav-header">
                <ul class="nav navbar-nav">
                <li><a href="..\个人网页设计\index.html">首页</a></li>
                <li><a href="..\个人网页设计\main\life.html">心情随笔</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggel="dropdown">
                        技术杂谈
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">JS</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li><a href="..\个人网页设计\main\message.html">给我留言</a></li>
                <li><a href="..\个人网页设计\main\question.html">提问交流</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
    <div class="row">
        <div class="content-wrap">
            <div class="container-fluid">
                    <div class="col-xs-9">
                            <div class="col-sm-2">
                                <div class="side-bar-card-one"><img src="img/1.png"></div>
                                <div class="side-bar-card-one"><img src="img/2.png"></div>
                                <div class="side-bar-card-one"><img src="img/3.png"></div>
                                <div class="side-bar-card-one"><img src="img/4.png"></div>
                            </div>
                            <div class="col-sm-10 clearfix">
                                <div class="mainbox">
                                    <div class="wrap" style="left: -600px;">
                                      <img src="img/1.png" alt="5">
                                      <img src="img/2.png" alt="1">
                                      <img src="img/3.png" alt="2">
                                      <img src="img/4.png" alt="3">
                                      <img src="img/2.png" alt="4">
                                      <img src="img/3.png" alt="5">
                                      <img src="img/1.png" alt="1">
                                    </div>
                                    <div class="buttons">
                                      <span class="on"></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                    </div>
                                    <a href="javascript:void (0);" rel="external nofollow" class="arrow arrow_left"></a>
                                    <a href="javascript:void (0);" rel="external nofollow" class="arrow arrow_right">></a>
                                  </div>                                
                            </div>        
                        <div class="news-list">
                            <!-- <div class="news-list-item excerpt clearfix excerpt-one">
                            <header>
                                <h2><a title="某个表题" href="#" class="m2">某个标题</a></h2>
                            </header>
                                <div class="col-sm-5">
                                    <img src="img/2.png">
                                </div>
                                <div class="col-sm-7">
                                        <div class="title">最近和几个朋友开发项目，期间使用了一台服务器跑模型，这台服务器是多人公用的，很多人都在上面有自己的账号，互不干涉内政，一切看起来十分井然有序。近期，这个服务器上刚挂载了一块新硬盘，是一位朋友使用 root 账号挂载的，然后将磁盘映射到某个文件夹下。然而挂载好了之后发现使用普通账号... </div>
                                    <div class="info">
                                        <span><span class="avatar"><img src="img/logo.jpg" ></span>王花花</span> ⋅
                                        <span>25k评论</span> ⋅
                                        <span>10分钟前</span>
                                    </div>
                                </div> -->

                            <?php
                            foreach ($mains as $main) {
                                ?>
                                <div class=" news-list-item excerpt clearfix excerpt-one">
                                    <h2><a title="某个表题" href="#" class="m2"><?php echo $main['title'];?></a></h2>
                                    <div class="col-sm-5">
                                        <img src="img/2.png">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="title">
                                            <?php echo $main['headcontent'];?>
                                        </div>
                                        <div class="info">
                                            <span><span class="avatar"><?php echo $main['img'];?></span>MichLiu</span> ⋅
                                            <span>25k评论</span> ⋅
                                            <span><?php echo $main['maintime'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                    </div>
                    <div class="col-xs-3">
                        <div class="side-bar-card-one share" id="share">
                            <div class="share1" v-bind:title="message"><img src="img/share1.png"></div>
                            <div class="share2"><img src="img/share2.png"></div>
                            <div class="share3" v-bind:title="img"><img src="img/share3.png"></div>   
                        </div>
                        <div class="side-bar-card-one">
                            <div class="title-sidebar">
                                <h2>经典专题</h2>
                            </div>
                            <div class="card-sidebar">
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
                                                    <img src="img/3.png" alt="First slide">
                                                    <div class="carousel-caption">标题 1</div>
                                                </div>
                                                <div class="item">
                                                    <img src="img/4.png" alt="Second slide">
                                                    <div class="carousel-caption">标题 2</div>
                                                </div>
                                                <div class="item">
                                                    <img src="img/2.png" alt="Third slide">
                                                    <div class="carousel-caption">标题 3</div>
                                                </div>
                                            </div>
                                            <!-- 轮播（Carousel）导航 -->
                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
                                                <!-- <span class="sr-only">Previous</span> -->
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
                                                <!-- <span class="sr-only">Next</span> -->
                                            </a>
                                        </div>
                            </div>
                        </div>
                        <!-- <div class="side-bar-card-one">
                            <div class="title-sidebar">
                                <h2>历史回顾</h2>
                            </div>
                        <div class="card-body">
                            <div class="list">
                                <div class="item">
                                    <a href="#">
                                        <div class="col-sm-5">
                                            <img src="img/3.png">
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="title"> © 2018 MichLiu 中国互联网举报中心京ICP证1401号京ICP备125439号-3京公网安备</div>
                                                <div class="info">
                                                    <span>2018-10-1/999评论</span>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div> -->

                    </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        © 2018 MichLiu 中国互联网举报中心京ICP证1401号京ICP备125439号-3京公网安备
    </footer>

    <script src="js/vue.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.transit.js"></script>
    <script src="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/main.js"></script>
</body>
</html>