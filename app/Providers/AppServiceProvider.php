<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use \App\Models\Language;
use Illuminate\Support\Facades\Blade;


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
        /**
         * Share the languages across all views 
         *so we can disable 'em in several pages.
        */
        View::share('languages', Language::all());

        /**
         * Create Blade Directive to show the products.
        */
        Blade::directive('products', function ($data) {
            return "<?php foreach($data as \$product): ?>";
        });

        Blade::directive('endproducts', function () {
            return "<?php endforeach; ?>";
        });
    }
}
