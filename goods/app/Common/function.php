<?php
/**
 * Date: 2018/12/2
 * Time: 15:39
 */

/**
 * 获取最后一条sql语句
 * 从5.0开始需要先执行下面这句
 * DB::connection()->enableQueryLog(); // 开启查询日志
 */
function getlastsql(){
    $sql = DB::getQueryLog();
    $query = end($sql);
    return $query;
}