<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToInfoSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_section', function (Blueprint $table) {
            $table->string('image')->nullable(); // Adding the image field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_section', function (Blueprint $table) {
            $table->dropColumn('image'); // Dropping the image field if rolling back migration
        });
    }
}
