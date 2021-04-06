<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // HELPER PARA CONVERSÃO DE NUMEROS MONETÁRIOS
        Blade::directive('money', function ($money) {
            return "<span>R$</span> <?php echo  number_format($money, 2, '.', ',');  ?>";
        });
    }
}
