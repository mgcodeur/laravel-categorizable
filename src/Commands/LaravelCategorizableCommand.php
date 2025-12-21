<?php

namespace Mgcodeur\LaravelCategorizable\Commands;

use Illuminate\Console\Command;

class LaravelCategorizableCommand extends Command
{
    public $signature = 'categorizable:install';

    public $description = 'Install the LaravelCategorizable package';

    public function handle(): int
    {
        $this->call('vendor:publish', [
            '--provider' => "Mgcodeur\LaravelCategorizable\LaravelCategorizableServiceProvider",
            '--tag' => 'categorizable-config',
        ]);

        $this->call('vendor:publish', [
            '--provider' => "Mgcodeur\LaravelCategorizable\LaravelCategorizableServiceProvider",
            '--tag' => 'categorizable-migrations',
        ]);

        $this->comment('All done');

        return self::SUCCESS;
    }
}
