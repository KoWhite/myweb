<?php
/**
 * Created by PhpStorm.
 * User: MichLiu
 * Date: 2018/10/5
 * Time: 19:47
 */

//将数据入库
$host = '127.0.0.1';
$dbuser = 'root';
$psd = '';
$dbname = 'myweb';

$db = new mysqli($host,$dbuser,$psd,$dbname);
if($db->connect_errno <> 0){
    die('链接数据库失败');
}

//设定数据库数据传输的编码
$db ->query("SET NAMES UTF8");

