<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ImageProduct;

class ProductController extends Controller
{
    // Carga Vista ProductsIndex Con una lista
    public function index()
    {
        $products = Product::paginate(15);
        return view('admin.products.index')->with(compact('products'));
    }
    
    // Carga vista Crear Producto
    public function create()
    {
        return view('admin.products.create');
    }
    
    //
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save();

        return redirect('/admin/products');
    }

    //
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
    }

    //
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); // Update

        return redirect('/admin/products');
    }

    //
    public function destroy($id)
    {
       
            $product = Product::find($id); // Buscamos el producto
            $product->delete(); // Eliminar Producto
            
        
            return redirect('/admin/products');
       
        
        // return back();
    }
}
