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
            $table->bigIncrements('movie_id');
            $table->string('title');
            $table->string('img');
            $table->text('overview'); // tong quan
            $table->string('popularity'); // pho bien
            $table->string('release_date')->default(null); // ngay ra mat
            $table->integer('runtime')->default(0); // thoi luong
            $table->string('movie_status')->default(0);
            $table->string('background');
            $table->bigInteger('votes_avg')->default(0);
            $table->bigInteger('votes_count')->default(0);
            $table->unsignedBigInteger('favourite_id');
            $table->integer('vip')->default(0);
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
