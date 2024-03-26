<?php

namespace XtendPackages\RESTPresenter;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use XtendPackages\RESTPresenter\Base\RESTPresenter;
use XtendPackages\RESTPresenter\Commands\Generator\MakeController;
use XtendPackages\RESTPresenter\Commands\Generator\MakePresenter;
use XtendPackages\RESTPresenter\Commands\Generator\MakeResource;
use XtendPackages\RESTPresenter\Commands\RESTPresenterSetupCommand;
use XtendPackages\RESTPresenter\Commands\XtendStarterKit;

class RESTPresenterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('rest-presenter')
            ->hasRoute('api')
            ->hasViews()
            ->hasConfigFile()
            ->publishesServiceProvider('RESTPresenterServiceProvider')
            ->hasCommands([
                RESTPresenterSetupCommand::class,
                XtendStarterKit::class,
                MakeResource::class,
                MakePresenter::class,
                MakeController::class,
            ]);
    }

    public function registeringPackage()
    {
        $this->app->singleton('rest-presenter', function () {
            return new RESTPresenter();
        });

        Route::macro('xtendResource', function ($name, $controller) {
            $namespace = config('rest-presenter.generator.namespace');
            $xtendController = Str::of($controller)->replace('XtendPackages\RESTPresenter', $namespace)->value();
            class_exists($xtendController)
                ? Route::apiResource($name, $xtendController)
                : Route::apiResource($name, $controller);
        });

        Route::macro('xtendAuthResource', function (string $httpVerb, string $uri, string $controller, string $name, ?array $middleware = null) {
            $namespace = config('rest-presenter.generator.namespace');
            $xtendController = Str::of($controller)->replace('XtendPackages\RESTPresenter', $namespace)->value();
            $controller = class_exists($xtendController) ? $xtendController : $controller;

            Route::match([$httpVerb], $uri, [$controller, 'store'])
                ->middleware($middleware)
                ->name($name);
        });
    }
}
