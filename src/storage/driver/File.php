<?php
declare (strict_types = 1);
namespace think\storage\driver;

use think\storage\Storage;

class File implements Storage
{
    //  单例实例
    private static $instance = null;

    //  定义配置项
    private $config = [];
    //  构造函数，获取位置
    public function __construct(?array $config = null)
    {
        //  合并配置文件
        $commonConfig = config('storage');

        if ($config === null) {
            $config = config('storage.file');
        }

        $this->config =  empty($config) ? array_merge($this->config, $commonConfig)  : array_merge($this->config, $commonConfig, $config);
    }

    //  初始化方法，获取实例
    public static function getInstance(?array $config = null)
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    //  获取数据
    public static function get(string $key)
    {
        //  获取数据
        return "{$key} :" . $key;
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

    //  处理配置文件
}