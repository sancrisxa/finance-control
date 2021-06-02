<?php

namespace App\Providers;


use App\View\Components\Customer;
use App\View\Components\Customers;
use App\View\Components\Forms\Formulario;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            'App\Repositories\Interfaces\CustomerRepositoryInterface',
            'App\Repositories\CustomerRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\InvoiceRepositoryInterface',
            'App\Repositories\InvoiceRepository'
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('package-customer', Customer::class);
        Blade::component('package-customers', Customers::class);
        Blade::component('package-form-customer',FormCustomer::class);
        Blade::componentNamespace('App\\Views\\Components\\Forms', 'forms');

    }
}

