<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatastudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datastudios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Theater_id')->unsigned();
            $table->string('namaStudio', 50);
        });

        Schema::table('datastudios', function (Blueprint $table) {
            $table->foreign('Theater_id')->references('id')->on('datatheaters')
            ->onDeelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datastudios');
    }
}
