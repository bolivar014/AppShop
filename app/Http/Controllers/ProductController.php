<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{
    //
    public function show($id)
    {
        $product = Product::find($id);
        //$images = $product->images;

        return view('products.show')->with(compact('product'));
    }
}
