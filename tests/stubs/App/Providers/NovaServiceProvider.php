<?php

declare(strict_types=1);

namespace Roennie91\NovaPaperclip\Tests\stubs\App\Providers;

use Roennie91\NovaPaperclip\Tests\stubs\App\Nova\Resources\ModelWithFileResource;
use Roennie91\NovaPaperclip\Tests\stubs\App\Nova\Resources\ModelWithImageResource;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    protected function routes(): void
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->register();
    }

    protected function resources(): void
    {
        Nova::resources([
            ModelWithFileResource::class,
            ModelWithImageResource::class,
        ]);
    }

    protected function gate(): void
    {
        Gate::define('viewNova', function () {
            return true;
        });
    }
}
