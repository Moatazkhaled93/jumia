<?php

namespace App\Providers;

//classes
use App\Repository\Eloquent\PhoneRepository;

//interfaces
use App\Repository\Interfaces\PhoneRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {

        // App Repository
        $this->app->bind(PhoneRepositoryInterface::class, PhoneRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        //
    }

}
