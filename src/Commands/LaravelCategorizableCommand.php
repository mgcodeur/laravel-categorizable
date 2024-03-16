<?php

namespace Mgcodeur\LaravelCategorizable\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LaravelCategorizableCommand extends Command
{
    public $signature = 'laravel-categorizable:install';

    public $description = 'Setup categorizable package';

    public function handle(): int
    {
        $this->warn('Publishing categorizable migrations...');
        Artisan::call('vendor:publish --tag=categorizable-migrations');
        $this->info('Categorizable migrations published.');
        return self::SUCCESS;
    }
}
