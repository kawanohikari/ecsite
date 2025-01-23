<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //商品注文テーブル（中間テーブル）
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');        //注文番号
            $table->integer('product_id');      //商品番号
            $table->integer('quantity');        //数量
            $table->integer('sub_total');       //小計
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
