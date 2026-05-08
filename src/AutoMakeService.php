<?php
namespace dreamboycx\autoMake;
use think\Service;

class AutoMakeService extends Service {
    public function register()
    {
        // 注册服务到容器
        $this->app->bind('AutoMakeService', AutoMakeService::class);
    }
    public function boot()
    {
        // 启动服务时的逻辑
    }
}