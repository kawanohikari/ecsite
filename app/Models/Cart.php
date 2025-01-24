<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'user_id' => 'required|integer|exists:users,id',
        'product_id' => 'required|integer|exists:products,id',
        'quantity' => 'required|integer',
    ];

    public static $messages = [
        'user_id.required' => 'user_idは必須入力です。',
        'user_id.integer' => 'user_idは数値で入力してください。',
        'user_id.exists' => 'user_idが見つかりません。',
        'product_id.required' => 'product_idは必須入力です。',
        'product_id.integer' => 'product_idは数値で入力してください。',
        'product_id.exists' => 'product_idが見つかりません。',
        'quantity.required' => 'quantityは必須入力です。',
        'quantity.integer' => 'quantityは数値で入力してください。',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,  'product_id', 'id');
    }
}
