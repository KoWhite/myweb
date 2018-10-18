<?php
/**
 * Created by PhpStorm.
 * User: MichLiu
 * Date: 2018/10/5
 * Time: 15:58
 */
class input{
    //定义函数，对数据进行检查
    function post($content){
        if($content == ''){
            return false;
        }

        //禁止使用的关键字词
        $not_say = [
            '张三',
            '李四',
            '王五',
        ];
        foreach ($not_say as $name){
            if($content == $name){
                return false;
            }
        }
        return true;
    }
}
?>