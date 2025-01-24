<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all();
        return view('shop.index', compact('items'));
    }

    public function cartin(Request $request)
    {
        $user = Auth::user();
        $productId = $request->id;
        $quantity = $request->quantity;

        // すでにカートに同じ商品があるか確認
        $cart = Cart::where('user_id', $user->id)->where('product_id', $productId)->first();
        if ($cart) {
            // すでにある場合は数量を更新
            $cart->quantity += $quantity;
            $cart->save();
        } else {
            // 新しいアイテムとして追加
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $productId;
            $cart->quantity = $quantity;
            $cart->save();
        }

        $carts = Cart::where('user_id', $user->id)->get();
        return view('cart.index', compact('carts'));
    }
}
