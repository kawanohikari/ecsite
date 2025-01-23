<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all();
        return view('product.index', compact('items'));
    }

    public function edit(Request $request)
    {
        $form = Product::find($request->id);
        if ($form) {
            //該当データがあったら編集ビューを表示する。
            return view('product.edit',compact('form'));
        }
        //該当データなしの場合は何もせず復帰する
        return redirect('/product');
    }

    public function update(Request $request)
    {
        //$request->validate(Product::$rules, Product::$messages);
        $form = Product::find($request->id);
        if ($form) {
            //該当データがあったらデータを更新する。
            


        $form = Product::find($request->id);
        if ($form) {
            //該当データがあったら編集ビューを表示する。
            return view('product.edit',compact('form'));
        }
        //該当データなしの場合は何もせず復帰する
        return redirect('/product');
    }


}