<?php
declare (strict_types = 1);

namespace think;

class Login
{
    private $config = [
        'storage' => [
           'default_type' => 'file',
           'path' => './storage/',
           'prefix' => 'think_',
           'expire' => 0,
        ],
        'service' => [
           'default_type' => 'account',
           'file' => [
               'account' => 'think',
               'password' => 'think123',
           ],
           'phone' => [
               'account' => '13800138000',
               'password' => 'think123',
           ],
           'email' => [
               'account' => 'think@thinkphp.cn',
               'password' => 'think123',
           ],
           'wechat' => [
               'account' => 'wechat',
               'password' => 'wechat123',
           ],
           'douyin' => [
               'account' => 'douyin',
               'password' => 'douyin123',
           ],
       ],
    ];

    //  服务对象
    private $service;

    //  存储对象
    private $storage;

    //  构造函数
    public function __construct(?array $config = null)
    {
        // 登录服务初始化   -   先获取配置文件
        if ($config && is_array($config)) {
            $this->config = array_merge($this->config, $config);
        }

        //  初始化存储服务
        $storage = StorageFactory::createStronge('file', $this->config['storage']);
        $this->storage = $storage->getInstance();


        //  初始化登录服务
        $this->service = ServiceFactory::createService('account', $this->config['service'], $storage);

    }

    public function index()
    {

        $this->service->login('account', 'think123');

    }


}