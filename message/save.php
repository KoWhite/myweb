<?php

include('input.php');
include ('../connect.php');
/**
 * Created by PhpStorm.
 * User: MichLiu
 * Date: 2018/9/27
 * Time: 18:11
 */
$content = $_POST['content'];
$user = $_POST['user'];

$input = new input();

//调用函数，检查留言内容
$is = $input->post($content);
if($is == false){
    die("留言内容的数据不正确");
}

//调用函数，检查留言人
$is = $input->post($user);
if($is == false){
    die("留言人的数据不正确");
}
$time = time();
$sql = "INSERT INTO save (content, user, messagetime) values ('{$content}','{$user}','{$time}')";
$is = $db -> query($sql);
header("location:message.php");/* 使原网页刷新，不用加载新网页 */
?>