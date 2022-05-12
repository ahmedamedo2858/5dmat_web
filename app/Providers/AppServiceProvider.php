<?php

namespace App\Providers;

use App\Http\Controllers\backend\categories;
use App\models\category;
use App\models\comment;
use App\models\contact;
use App\models\page;
use App\models\skill;
use App\models\tag;
use App\models\video;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    view()->share('categories',category::get());
    view()->share('skills',skill::get());
    view()->share('pages',page::get());

    view()->share('video_count',video::count());
    view()->share('contact_count',contact::count());
    view()->share('skills_count',skill::count());
    view()->share('tags_count',tag::count());
    view()->share('comment_count',comment::count());

    }
}
