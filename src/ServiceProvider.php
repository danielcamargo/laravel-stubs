<?php

namespace LaravelStubs;

use LaravelStubs\Console\MigrateMakeCommand;
use LaravelStubs\Console\ModelMakeCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/stubs.php' => config_path('stubs.php'),
        ]);

        if (!$this->app->runningInConsole()) {
            return;
        }

        $config = config('stubs');

        $this->model($config);
        $this->migration($config);
    }

    private function model($config)
    {
        if (!isset($config['model'])) {
            return;
        }

        $this->app->extend('command.model.make', function () {
            return $this->app->make(ModelMakeCommand::class);
        });
    }

    private function migration($config)
    {
        if (!isset($config['migration'])) {
            return;
        }

        $this->app->extend('command.migrate.make', function () {
            return $this->app->make(MigrateMakeCommand::class);
        });
    }
}
