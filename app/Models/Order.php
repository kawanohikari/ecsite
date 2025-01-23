<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'order_time' => 'date',
        'user_id' => 'required|integer|exists:users,id',
        'total' => 'required|integer',
        'deposit' => 'integer',
        'deposit_date' => 'date',
        'shipping_time' => 'date',
        'arrival_time' => 'date',
    ];

    public static $messages = [
        'order_date, date' => '注文日は日時形式で入力してください。',
        'user_id, required' => 'user_idは必須入力です。',
        'user_id, integer' => 'user_idは数値で入力してください。',
        'user_id, exists' => 'user_idが見つかりません。',
        'total, required' => 'totalは必須入力です。',
        'total, integer' => 'totalは数値で入力してください。',
        'deposit, integer' => '入金額は数値で入力してください。',
        'deposit_date, date' => '入金日は日時形式で入力してください。',
        'shipping_date, date' => '出荷日は日時形式で入力してください。',
        'arrival_date, date' => '到着日は日時形式で入力してください。',
    ];
}
