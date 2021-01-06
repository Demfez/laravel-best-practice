<?php

namespace App\Contracts;

use App\Models\Product;

interface ProductServiceInterface
{
    public function create(array $params): Product;
}
