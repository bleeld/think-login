<?php
declare (strict_types = 1);
namespace think\storage;
//  引入公共函数
require_once(dirname(__DIR__).'/function/common.php');

interface Storage
{
    //  获取存储信息
    public static function get(string $type);

    //  设置存储信息
    public static function set(string $type, $value);

    //  删除存储信息
    public static function delete(string $type);

    //  日志文件
    public static function log(string $message);
    
}
