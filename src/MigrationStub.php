<?php

namespace LaravelStubs;

use Illuminate\Database\Migrations\MigrationCreator as BaseMigrationCreator;

class MigrationStub extends BaseMigrationCreator
{

    protected function getStub($table, $create)
    {
        if (is_null($table)) {
            return file_get_contents(config('stubs.migration.blank'));
        }

        return file_get_contents($create ? config('stubs.migration.create') : config('stubs.migration.update'));
    }
}
