<?php

namespace kapitanpulido\StorageFile;

use Illuminate\Support\ServiceProvider;

class StorageFileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->make('kapitanpulido\StorageFile\StorageFile');
    }
}
