<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //注文テーブル
        Schema::create('orders', function (Blueprint $table) {
            $table->id();                                   //注文番号
            $table->datetime('order_time')->nullable();     //注文日時
            $table->integer('user_id')->default(0);         //ユーザーID
            $table->integer('total')->default(0);           //合計金額
            $table->datetime('deposit_time')->nullable();   //入金日時
            $table->integer('deposit')->default(0);         //入金額
            $table->integer('shipping_time')->nullable();   //出荷日時
            $table->integer('arrival_time')->nullable();    //到着日時
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
