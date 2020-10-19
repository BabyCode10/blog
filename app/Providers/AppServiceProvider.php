<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Comment;
use App\Observers\CommentObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Comment::observe(CommentObserver::class);
    }
}
