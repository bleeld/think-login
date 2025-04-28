<?php
declare (strict_types = 1);
namespace think;

use think\storage\Storage;

class ServiceFactory
{
    public static function createService(?string $type =null, ?array $config = null, ?Storage $storage = null) {
        if ($type === null) {
            $type = config('service.default_type');
        }
        switch ($type) {
            case 'account':
                return new \think\service\driver\Account($config, $storage);
            break;
            case 'phone':
                return new \think\service\driver\Phone($config, $storage);
            break;
            case 'email':
                return new \think\service\driver\Email($config, $storage);
            break;
            case 'wechat':
                return new \think\service\driver\Wechat($config, $storage);
            break;
            case 'douyin':
                return new \think\service\driver\Douyin($config, $storage);
            break;
            default:
                throw new \InvalidArgumentException("Invalid storage type: $type");
        }
    }
}