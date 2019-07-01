<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function update()
    {
        //$cart = Cart::find($id);
        $cart = auth()->user()->cart;
        $cart->status = 'Pending';
        $cart->save();

        $notification = 'Tu pedido se ha generado correctamente, Nos contactaremos pronto Via MAIL';

        return back()->with(compact('notification'));
    }
}
