<?php

namespace Revolution\Fortify\Bootstrap4;

use Illuminate\Support\ServiceProvider;

class Bootstrap4ServiceProvider extends ServiceProvider
{
    protected const TAG = 'fortify-bootstrap4';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', self::TAG);

        $this->publishes(
            [
                __DIR__.'/../views' => $this->app->resourcePath('views/vendor/'.self::TAG),
            ],
            self::TAG
        );
    }
}
