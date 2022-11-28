<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        Request::macro('isAdmin', function () {
            // return $this->getHost() === adminUrl();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('quidax', function ($user_id = 'me') {
            return Http::baseUrl(
                sprintf('https://www.quidax.com/api/v1/users/%s/', $user_id)
            )->withToken(config('services.quidax.secret'));
        });

        Http::macro('basqet', function () {
            return Http::baseUrl(
                sprintf('https://api.basqet.com/v1/')
            )->withToken(config('services.basqet.public'));
        });

        Schema::defaultStringLength(255);
    }
}
