<?php
include('../connect.php');

/* 查询数据库save表内容 */
$sql = "SELECT * FROM save ORDER BY id DESC";
$mysqli_result = $db ->query($sql);
if( $mysqli_result === false){
    echo "SQL错误";
    exit;
}
/* 将表内容放入数组当中 */
$rows = [];
while($row = $mysqli_result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
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
            <a href="/" class="header">
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
                <li><a href="D:\个人网页设计\main\technique.html">技术杂谈</a></li>
                <li><a href="D:\个人网页设计\main\resources.html">个人归档</a></li>
                <li><a href="D:\个人网页设计\main\message.html">给我留言</a></li>
                <li><a href="D:\个人网页设计\main\question.html">提问交流</a></li>
            </ul>
        </div>
    </header>
    <div class="container" id="box">
        <div class="location">您现在的位置：给我留言</div>
        <form role="form clearfix" action="save.php" method="post">
            <div class="form-group ">
                <textarea name="content" class="form-control" rows="5"></textarea>
            </div>
            <input name="user" class="user" type="text"/>
            <div class="btn-group btn-left" data-toggle="button-checkbox">
                <button class="btn btn-blue">图片</button>
                <button class="btn btn-green">表情</button>
            </div>
            <div class="btn-group btn-right" data-toggle="button-checkbox">
                <button class="btn btn-primary" type="submit">确认</button>
                <button class="btn btn-warning">取消</button>
            </div>
        </form>
        <hr>
        <!-- 使用foreach循环的方法，将数组中的内容分割输出，获得数据库中的所有需要的数据 -->
            <?php
            foreach ($rows as $row) {
                ?>
        <div class="wrap clearfix" id="app">
                <div class="col-sm-1"><img src="../img/2.png"></div>
                <div class="col-sm-11">
                <div class="info">
                    <span class="username"><?php echo $row['user'];?></span>
                    <span class="time-message"><?php echo date("Y/m/d H:i:s",$row['messagetime']);?></span>
                    </div>
                    <span class="message-box content"><?php echo $row['content'];?></span>
                    <div class="message-method">
                        <button class = "btn btn-blue">回复</button>
                        <like></like>
                        <dislike></dislike>
                    </div>
                </div>
        </div>
                <?php
            }
            ?>

    <script src="../js/vue.js"></script>
    <script src="../js/main.js"></script>
    <script src="message.js"></script>

        <footer class="footer">
            © 2018 MichLiu 中国互联网举报中心京ICP证1401号京ICP备125439号-3京公网安备
        </footer>
</body>
</html>