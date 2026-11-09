<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
   public function index(){
    return view ('cart', ['cart'=>session('cart',[])]);
   }

   public funtion add(Product $product){
    $cart=session()->get('cart',[]);

    if (isset($cart[$product->id])){
        $cart[$product->id]['quantity']++;
    }else{
        $cart[$product->id]=[
            'name'=>$product->name,
            'price'=>$product->price,
            'image'=>$product->image,
            'quantity'=>1,
        ];
    }
    session()->put('cart',$cart);

    return redirect()->route('cart.index');
   }
}
