<?php
declare (strict_types = 1);
namespace think;

class StorageFactory {
    public static function createStronge(?string $type =null, ?array $config = null) {
        if ($type === null) {
            $type = config('storage.default_type');
        }
        switch ($type) {
            case 'cache':
                return new \think\storage\driver\Cache($config);
            break;
            case 'session':
                return new \think\storage\driver\Session($config);
            break;
            case 'file':
                return new \think\storage\driver\File($config);
            break;
            default:
                throw new \InvalidArgumentException("Invalid storage type: $type");
        }
    }
}