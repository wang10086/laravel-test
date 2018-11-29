<?php
/**
 * Date: 2018/11/29
 * Time: 22:48
 */

function getLastSql(){
    //从5.0开始需要先执行下面这句
    //DB::connection()->enableQueryLog(); // 开启查询日志

    $sql = DB::getQueryLog();

    $query = end($sql);

    return $query;

}