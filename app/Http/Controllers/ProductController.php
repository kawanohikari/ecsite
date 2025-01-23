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

    public function add(Request $request)
    {
        $form = new Product();
        return view('product.add', compact('form'));
    }

    public function create(Request $request)
    {
        $request->validate(Product::$rules, Product::$messages);
        Product::create($request->except('_token'));
        return redirect('/product');
    }

    public function edit(Request $request)
    {
        $form = Product::find($request->id);
        if ($form) {
            //該当データがあったら編集ビューを表示
            return view('product.edit', compact('form'));
        }
        //該当データなしの場合は一覧画面へ戻る
        return redirect('/product');
    }

    public function update(Request $request)
    {
        $request->validate(Product::$rules, Product::$messages);
        $form = Product::find($request->id);
        if ($form) {
            //該当データがあったらデータを更新
            $form->update($request->except('_token'));
        }
        //どちらの場合も一覧画面へ戻る
        return redirect('/product');
    }
}
