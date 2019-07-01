<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;


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
        $file = $request->file('photo'); // nombre del input donde buscara el archivo
        $path = public_path() . '/images/products'; // Asignamos la ruta donde almacenara el archivo
        $fileName = uniqid() . $file->getClientOriginalName(); // Convertimo el nombre del archivo
        $moved = $file->move($path, $fileName); // Guardamos el archivo en la ruta deseada...

        if($moved) // True or False, si se ha guardado el archivo correctamente...
        {
            // Crea el registro de la nueva imagen
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            $productImage->featured = false;
            $productImage->product_id = $id;
            $productImage->save(); // Guardamos Registro En La DB.
        }            
            return back();
    }
   
    //
    public function destroy(Request $request, $id)
    {
        $productImage = ProductImage::find($request->input('image_id'));
        if(substr($productImage->image,0 ,4) !== "http")
        {
            $deleted = true;
        }
        else
        {
            $fullPath = public_path() . '/images/products/' . $productImage->image;
            $deleted = File::delete($fullPath);
        }

        if($deleted)
        {
            $productImage->delete();
        }
        return back();
    }
   
    //
    public function index2()
    {
        return view('');
    }
}
