<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;

class CartDetailController extends Controller
{
    //
    public function store(Request $request)
    {
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id;
        $cartDetail->product_id = $request->input('product_id');
        $cartDetail->quantity = $request->input('quantity');
        $cartDetail->save();

        return back();
    }

    //
    public function destroy(Request $request)
    {
        $cartDetail = CartDetail::find($request->cart_detail_id);
        // Condición para verificar que el Dato a eliminar si pertenezca al usuario autenticado
        if($cartDetail->cart_id == auth()->user()->cart->id)
        {
            $cartDetail->delete();
        }

        return back();
    }

}
