<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        return ProductCollection::collection(Product::paginate(5));
    }

    public function show (Product $product)
    {
        return new ProductResource($product);
    }
}
