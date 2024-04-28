<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('slug')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->text('keywords')->nullable();
            $table->string('price')->nullable();
            $table->string('sale_price')->nullable();
            $table->integer('show_price')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->integer('visitor_count')->nullable();
            $table->integer('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
