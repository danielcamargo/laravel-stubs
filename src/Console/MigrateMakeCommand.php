<?php

namespace LaravelStubs\Console;

use Illuminate\Database\Console\Migrations\MigrateMakeCommand as BaseMigrateMakeCommand;
use Illuminate\Support\Composer;

class MigrateMakeCommand extends BaseMigrateMakeCommand
{

    public function __construct(MigrationCreator $creator, Composer $composer)
    {
        parent::__construct($creator, $composer);
    }

}
