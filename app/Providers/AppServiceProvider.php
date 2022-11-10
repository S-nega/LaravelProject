<?php

namespace App\Providers;

use App\Services\CallBackListService;
use App\Services\DesignService;
use App\Services\Impl\CallBackListServiceImpl;
use App\Services\Impl\DesignServiceImpl;
use App\Services\Impl\QuestionsListServiceImpl;
use App\Services\Impl\ServiceListServiceImpl;
use App\Services\Impl\UserServiceImpl;
use App\Services\QuestionsListService;
use App\Services\ServiceListService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DesignService::class, DesignServiceImpl::class);
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(QuestionsListService::class, QuestionsListServiceImpl::class);
        $this->app->bind(ServiceListService::class, ServiceListServiceImpl::class);
        $this->app->bind(CallBackListService::class, CallBackListServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
