<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('overview');
            $table->string('img');
            $table->string('background');
            $table->string('release_date');
            $table->integer('runtime');
            $table->integer('num_view');
            $table->integer('votes_avg');
            $table->integer('type_movie');
            $table->string('author');
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('favourite_id');
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
        Schema::dropIfExists('movies');
    }
}
