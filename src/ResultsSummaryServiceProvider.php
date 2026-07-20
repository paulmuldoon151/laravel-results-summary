<?php

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use PaulMuldoon\ResultsSummary\View\Components\ResultsSummary;

class ResultsSummaryServiceProvider extends ServiceProvider
{
    public function boot(Application $app): void
    {
        $this->loadViewsFrom(
            __DIR__.'/../resources/views',
            'results-summary'
        );

        Blade::component(
            'results-summary',
            ResultsSummary::class
        );

        $this->publishes([
            __DIR__.'/../resources/views' => $app->resourcePath('views/vendor/results-summary'),
        ], 'results-summary-views');
    }
}
