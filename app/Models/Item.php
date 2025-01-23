<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'order_id' => 'reqired|integer|exists:orders,id',
        'product_id' => 'reqired|integer|exists:products,id',
        'quantity' => 'required|integer',
    ];

    public static $messages = [
        'order_id, reqired' => 'order_idは必須入力です。',
        'order_id, integer' => 'order_idは数値で入力してください。',
        'order_id, exists' => 'order_idが見つかりません。',
        'product_id, reqired' => 'product_idは必須入力です。',
        'product_id, integer' => 'product_idは数値で入力してください。',
        'product_id, exists' => 'product_idが見つかりません。',
        'quantity, reqired' => 'quantityは必須入力です。',
        'quantity, integer' => 'quantityは数値で入力してください。',
    ];
}
