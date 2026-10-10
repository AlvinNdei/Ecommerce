<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        return view('cart.index', [
            'items' => $cart->content(),
            'total' => $cart->total(),
        ]);
    }

    public function add(Product $product, Cart $cart)
    {
        $cart->add($product->id, $product->name, $product->price);
        return back()->with('success', 'Added to cart');
    }

    public function update(Request $request, int $id, Cart $cart)
    {
        $cart->update($id, (int) $request->qty);
        return back();
    }

    public function remove(int $id, Cart $cart)
    {
        $cart->remove($id);
        return back();
    }
}
