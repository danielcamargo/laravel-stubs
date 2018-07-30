<?php

namespace LaravelStubs;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseModelMakeCommand;

class ModelStub extends BaseModelMakeCommand
{

    protected function getStub()
    {
        return $this->option('pivot') ? config('stubs.model.pivot') : config('stubs.model.default');
    }

}
