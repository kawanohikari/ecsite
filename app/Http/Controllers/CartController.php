<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        return view('cart.index', compact('carts'));
    }

    public function calc(Request $request)
    {
        $user = Auth::user();
        $productId = $request->id;
        $quantity = $request->quantity;
        $cart = Cart::where('user_id', $user->id)->where('product_id', $productId)->first();
        $cart->quantity = $quantity;
        $cart->save();

        //ゼロ個以下の商品をカートから削除
        Cart::where('user_id', $user->id)->where('quantity', '<=', 0)->delete();

        //カートデータを再取得
        $carts = Cart::where('user_id', $user->id)->get();
        return view('cart.index', compact('carts'));
    }
}
