<?php
declare (strict_types = 1);
namespace think\service\driver;

use think\storage\Storage;
use think\Service\LoginService;

class Douyin implements LoginService
{
    //  单例实例
    private static $instance = null;

    //  存储器实例
    private Storage $storage;

    //  构造函数
    public function __construct(?array$config = null, ?Storage $storage = null)
    {
        // 登录服务初始化   -   存储器实例化
        if ($storage !== null) {
            $this->storage = $storage;
        }

    }

    //  初始化方法
    public static function getInstance (?array $config = null) {
        // 初始化逻辑
        if (self::$instance === null) {
            return self::$instance = new self($config);
        }
    }

    //  登录方法
    public function login()
    {
        // 登录逻辑
    }

    //  注册方法
    public function register()
    {
        // 注册逻辑
    }

    //  激活方法
    public function active()
    {
        // 激活逻辑
    }

    //  修改密码方法
    public function changePassword()
    {
        // 修改密码逻辑
    }

    //  验证方法
    public function verify()
    {
        // 验证逻辑
    }

    //  获取用户信息方法
    public function getUserInfo()
    {
        // 获取用户信息逻辑
    }

    //  存储方法
    public function storage()
    {
        // 存储逻辑
    }

    //  登出方法
    public function logout()
    {
        // 登出逻辑
    }

    //  日志方法
    public function log()
    {
        // 日志逻辑

    }

}