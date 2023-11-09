<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CustomStorageLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:storage-link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a custom storage link';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating custom storage link...');

        // Define the source and target paths
        $source = storage_path('app');
        $target = public_path('storage');

        // Create the symbolic link
        if (!File::exists($target)) {
            File::link($source, $target);
            $this->info('Custom storage link created.');
        } else {
            $this->error('Custom storage link already exists.');
        }
    }
}
