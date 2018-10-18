<?php
include('../connect.php');

$lifesql = "SELECT * FROM lifesave ORDER BY id DESC";
$mylifesql_result = $db ->query($lifesql);
if ($mylifesql_result === false){
    echo "SQL错误";
    exit;
}

$lifes = [];
while($life = $mylifesql_result->fetch_array(MYSQLI_ASSOC)){
    $lifes [] = $life;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <div class="container-inner">
            <a href="#" class="header">
                <h1>
                    <span>宁静</span>
                    <span>MichLiu的个人博客</span>
                </h1>
            </a>
        </div>
        <div class="navbar" id="nav-header">
                <ul class="nav navbar-nav">
                <li><a href="D:\个人网页设计\index.html">首页</a></li>
                <li><a href="D:\个人网页设计\main\life.html">心情随笔</a></li>
                <li><a href="/">技术杂谈</a></li>
                <li><a href="/">给我留言</a></li>
                <li><a href="/">提问交流</a></li>
            </ul>
        </div>
    </header>
    <div class="container clearfix">
        <div class="location">您现在的位置：个人心情</div>
        <div class="col-sm-9">
            <?php
            foreach ($lifes as $life){
            ?>
            <div class="panel panel-success life-wrap">
                <div class="panel-heading">
                    <div class="panel-title"><?php echo $life['lifetime'];?></div>
                </div>
                <div class="panel-body"><?php echo $life['content'];?></div>
            </div>
        <?php
        }
        ?>
        </div>
        <div class="col-sm-3">
                <div id="share" class="side-bar-card-one share">
                        <div class="share1"><img src="../img/share1.png"></div>
                        <div class="share2"><img src="../img/share2.png"></div>
                        <div class="share3"><img src="../img/share3.png"></div>   
                    </div>
                    <div class="side-bar-card-one">
                        <div class="title-sidebar">
                            <h2>经典专题</h2>
                        </div>
                        <img src="../img/2.png">
                    </div>
        </div>
    </div>

    <script src="../js/vue.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>