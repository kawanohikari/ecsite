<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //商品テーブル
        Schema::create('products', function (Blueprint $table) {
            $table->id();                                   //商品番号
            $table->string('image_url')->nullable();        //画像URL
            $table->string('maker')->nullable();            //メーカー
            $table->string('name')->nullable();             //品名
            $table->string('description')->nullable();      //説明
            $table->integer('price')->nullable();           //売価
            $table->integer('cost')->nullable();            //原価
            $table->integer('stock')->nullable();           //在庫数
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
