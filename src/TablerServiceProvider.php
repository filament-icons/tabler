<?php

namespace FilamentIcons\Tabler;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('tabler', [
            'path' => __DIR__.'/../resources/icons',
            'prefix' => 'tabler',
        ]);
    }
}
