<?php

namespace App\Services;

use App\Contracts\ProductServiceInterface;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService implements ProductServiceInterface
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(array $params): Product
    {
        $product = new Product();
        $product->name = $params['name'];
        $product->description = $params['description'];
        $product->price = $params['price'];

        return $this->productRepository->save($product);
    }
}
