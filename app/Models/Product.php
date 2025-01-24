<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required',
        'price' => 'required|integer',
        'cost' => 'required|integer',
        'stock' => 'integer',
    ];

    public static $messages = [
        'name.required' => '品名は必須入力です。',
        'price.required' => '売価は必須入力です。',
        'price.integer' => '売価は数値で入力してください。',
        'cost.required' => '原価は必須入力です。',
        'cost.integer' => '原価は数値で入力してください。',
        'stock.integer' => '在庫数は数値で入力してください。',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id', 'product_id');
    }
}
