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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('slug')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->string('price')->nullable();
            $table->string('sale_price')->nullable();
            $table->integer('show_price')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->integer('visitor_count')->nullable();
            $table->integer('is_active')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_keywords')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
