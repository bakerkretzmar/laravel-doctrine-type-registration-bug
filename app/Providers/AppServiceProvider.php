<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\PostgresGrammar;
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
        Blueprint::macro('xml', function ($name) {
            /** @var \Illuminate\Database\Schema\Blueprint $this */
            return $this->addColumn('xml', $name);
        });

        PostgresGrammar::macro('typeXml', function ($column) {
            return 'xml';
        });
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
