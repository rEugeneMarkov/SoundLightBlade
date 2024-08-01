<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\Commands\InstallLanguagesCommand;

class InstallCommand extends Command
{
    protected $signature = 'install';

    protected $description = 'Install the application';

    public function handle()
    {
        $this->info('Installing...');

        $this->call(InstallLanguagesCommand::class);

        $this->info('Installed successfully!');
    }
}
