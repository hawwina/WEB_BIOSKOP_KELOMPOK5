<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_movies', function (Blueprint $table) {
            $table->id();
            $table->string('movieCover', 150);
            $table->string('movieTitle', 100);
            $table->string('movieSynopsis');
            $table->string('movieGenre', 50);
            $table->string('movieDuration', 11);
            $table->date('movieRealdate');
            $table->string('movieDirector', 50);
            $table->string('movieActors', 150);
            $table->string('movieTrailer',250);
            $table->string('upload');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_movies');
    }
}
