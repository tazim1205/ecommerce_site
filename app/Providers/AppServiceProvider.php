<?php

namespace App\Providers;

use App\Helpers\MenuHelper;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\categorie;
use App\Models\sub_categorie;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menus = MenuHelper::Menu();

        if (!empty($menus)){
            View::composer('*', function ($view) use ($menus) {
                $view->with(['side_menus' => $menus]);
            });
        }

        Paginator::useBootstrapFive();

        View::composer('*',function($view){
            $view->with('categorie',categorie::orderby('order_by','ASC')->where('status',1)->get());
            $view->with('sub_categorie',sub_categorie::orderby('order_by','ASC')->where('status',1)->get());
            $view->with('lang',\Illuminate\Support\Facades\App::getLocale());
        });
    }
}
