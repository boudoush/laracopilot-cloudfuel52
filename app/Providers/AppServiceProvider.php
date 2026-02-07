<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ensure storage directories exist with correct permissions
        $this->ensureStorageDirectories();
    }

    /**
     * Ensure storage directories exist
     */
    private function ensureStorageDirectories(): void
    {
        $directories = [
            storage_path('logs'),
            storage_path('framework/cache'),
            storage_path('framework/sessions'),
            storage_path('framework/views'),
            storage_path('app/temp'),
            storage_path('app/public'),
        ];

        foreach ($directories as $directory) {
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0775, true);
            }
        }

        // Create laravel.log if it doesn't exist
        $logFile = storage_path('logs/laravel.log');
        if (!File::exists($logFile)) {
            File::put($logFile, '');
            chmod($logFile, 0664);
        }
    }
}