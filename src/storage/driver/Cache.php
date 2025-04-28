<?php
declare (strict_types = 1);
namespace think\storage\driver;

use think\storage\Storage;

class Cache implements Storage
{
    //  单例实例
    private static $instance = null;
    //  构造函数，获取位置
    public function __construct(?array $config = null)
    {
        echo 'cache storage driver';
    }

    //  初始化方法
    public static function getInstance(?array $config = null) {
        // 初始化逻辑
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    //  获取存储信息
    public static function get(string $type)
    {
        //  获取存储信息
        return \think\facade\Cache::get($type);
    }

    //  设置存储信息
    public static function set(string $type, $value)
    {
        //  设置存储信息
        \think\facade\Cache::set($type, $value);
    }

    //  删除存储信息
    public static function delete(string $type)
    {
        //  删除存储信息
        \think\facade\Cache::delete($type);
    }

    //  日志文件
    public static function log(string $message)
    {
        //  日志文件
        \think\facade\Log::write($message);
    }

}
