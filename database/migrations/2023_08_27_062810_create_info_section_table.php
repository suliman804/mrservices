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
        Schema::create('info_section', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('heading')->nullable();
            $table->string('site_title')->nullable();
            $table->text('description')->nullable();
            $table->text('box_1_heading')->nullable();
            $table->text('box_1_description')->nullable();
            $table->text('box_1_image')->nullable();
            $table->text('box_2_heading')->nullable();
            $table->text('box_2_description')->nullable();
            $table->text('box_2_image')->nullable();
            $table->text('box_3_heading')->nullable();
            $table->text('box_3_description')->nullable();
            $table->text('box_3_image')->nullable();
            $table->longText('about_us')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('footer_about')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('address')->nullable();
            $table->integer('events_participated')->nullable();
            $table->integer('classes_completed')->nullable();
            $table->integer('awards_won')->nullable();
            $table->integer('student_enrolled')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_section');
    }
};
