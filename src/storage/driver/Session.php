<?php
declare (strict_types = 1);
namespace think\storage\driver;

use think\storage\Storage;

class Session implements Storage
{
    //  单例实例
    private static $instance = null;

    //  构造函数，获取位置
    public function __construct(?array $config = null)
    {
        echo 'session storage driver';
    }

    //  初始化方法
    public static function getInstance(?array $config = null) {
        // 初始化逻辑
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    //  获取数据
    public static function get(string $type)
    {
        //  获取数据
        return session($type);
    }

    //  设置数据
    public static function set(string $type, $value)
    {
        //  设置数据
        session($type, $value);
    }

    //  删除数据
    public static function delete(string $type)
    {
        
        session($type, null);
        return true;
    }

    //  日志文件
    public static function log(string $message)
    {
        //  日志文件
        \think\facade\Log::write($message);
    }

}