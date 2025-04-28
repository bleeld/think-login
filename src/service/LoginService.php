<?php
declare (strict_types = 1);
namespace think\service;
//  引入公共函数
require_once(dirname(__DIR__).'/function/common.php');

interface LoginService
{
    //  登录方法
    public function login();

    //  注册方法
    public function register(...$args);

    //  激活方法
    public function active(...$args);

    //  修改密码方法
    public function changePassword(...$args);

    //  验证方法
    public function verify(...$args);

    //  获取用户信息方法
    public function getUserInfo(...$args);

    //  存储方法
    public function storage(...$args);

    //  登出方法
    public function logout(...$args);

    //  日志方法
    public function log(...$args);





    // //  登录方法
    // abstract public function login();

    // //  注册方法
    // abstract public function register(...$args);

    // //  激活方法
    // abstract public function active(...$args);

    // //  修改密码方法
    // abstract public function changePassword(...$args);

    // //  验证方法
    // abstract public function verify(...$args);

    // //  获取用户信息方法
    // abstract public function getUserInfo(...$args);

    // //  存储方法
    // abstract public function storage(...$args);

    // //  登出方法
    // abstract public function logout(...$args);

    // //  日志方法
    // abstract public function log(...$args);


}