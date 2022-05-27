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
        Schema::create('trips', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('riderType');
            // $table->string('firstName');
            // $table->string('lastName');
            // $table->array('frequency');
            // $table->string('facebook');
            // $table->string('instagram');
            // $table->string('linkedin');
            // $table->string('emailAddress');
            // $table->string('workInterests');
            // $table->string('travelInterests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
};
