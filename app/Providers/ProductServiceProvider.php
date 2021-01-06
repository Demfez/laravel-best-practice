<?php

namespace App\Providers;

use App\Contracts\ProductServiceInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerProductService();
        $this->registerProductRepository();
    }

    private function registerProductService(): void
    {
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
    }

    private function registerProductRepository(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
