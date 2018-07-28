<?php

namespace LaravelStubs\Console;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseModelMakeCommand;

class ModelMakeCommand extends BaseModelMakeCommand
{
    protected function qualifyClass($name)
    {
        $folder = config('stubs.model.app_folder');
        $name = str_contains($name, "{$folder}\\") ? $name : "{$folder}/{$name}";

        return parent::qualifyClass($name);
    }

    protected function getStub()
    {
        $stub = $this->option('pivot') ? config('stubs.model.pivot') : config('stubs.model.default');
        return $stub;
    }

}
