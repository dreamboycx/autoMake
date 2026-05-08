<?php
namespace dreamboycx\autoMake;
class autoMake
{
    // 测试方法
    public function hello()
    {
        return "ThinkPHP6 Composer 扩展加载成功";
    }

    // 获取数据库用户名
    public function getDbUsername()
    {
        return config('database.connections.mysql.username');
    }

    // 获取扩展自身配置
    public function getExtConfig()
    {
        return config('autoMake.app_name');
    }
}