<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TestService;
use App\Contracts\TestContract;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 使用 singleton 绑定单例.
        $this->app->singleton('test', function () {
            return new TestService();
        });

        // 使用 bind 绑定实例到接口以便依赖注入
        $this->app->bind(TestContract::class, function () {
            return new TestService();
        });
    }
}
