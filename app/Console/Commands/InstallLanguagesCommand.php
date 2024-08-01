<?php

namespace App\Console\Commands;

use App\Models\Language;
use Illuminate\Console\Command;

class InstallLanguagesCommand extends Command
{
    protected $signature = 'languages:install';

    protected $description = 'Install languages';

    public function handle()
    {
        $this->info('Installing languages...');

        $this->createLanguages();

        $this->info('Languages installed successfully!');
    }

    protected function createLanguages()
    {
        $templates = [
            [
                'id' => 'en',
                'name' => 'English',
                'active' => true,
                'default' => true,
                'fallback' => false,
            ],
            [
                'id' => 'ru',
                'name' => 'Русский',
                'active' => true,
                'default' => false,
                'fallback' => false,
            ],
            [
                'id' => 'lv',
                'name' => 'Latviesu',
                'active' => true,
                'default' => false,
                'fallback' => true,
            ],
        ];

        Language::query()->upsert($templates, ['id'], ['name', 'active', 'default', 'fallback']);
    }
}
