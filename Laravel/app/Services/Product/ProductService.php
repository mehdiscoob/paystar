<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductService
{
    /**
     * get All Products
     *@return  Product
     */
    public function getAllProducts()
    {
        $products=Product::with('image')->get();
        return $products;
    }
}
