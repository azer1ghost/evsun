<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('website.pages.products');
    }

    public function productDetail(Product $product)
    {
        return view('website.pages.product-detail', compact('product'));
    }
}
