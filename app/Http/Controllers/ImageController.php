<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ImageController extends Controller
{
    //
    public function index($id)
    {
        $product = Product::find($id);
        $images = $product->images;
        return view('admin.products.images.index')->with(compact('product','images'));
    }
   
    //
    public function store(Request $request, $id)
    {
        // Recuperamos el archivo que se esta cargando
        $file = $request->file('photo');
        $path = public_path() . '/images/products'; // Asignamos la ruta donde almacenara el archivo
        $fileName = uniqid() . $file->getClientOriginalName(); // Convertimo el nombre del archivo
        $file->move($path, $fileName); // Guardamos el archivo en la ruta deseada...

        $productImage = new ProductImage();
        $productImage->image = $fileName;
        $productImage->featured = false;
        $productImage->product_id = $id;
        $productImage->save(); // Guardamos Registro En La DB.
        
        return back();
    }
   
    //
    public function destroy()
    {
        return view('');
    }
   
    //
    public function index2()
    {
        return view('');
    }
}
