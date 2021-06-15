<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('episodes', function (Blueprint $table) {
        //     $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('posters', function (Blueprint $table) {
        //     $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('movies', function (Blueprint $table) {
        //     $table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('movies', function (Blueprint $table) {
        //     $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('movies', function (Blueprint $table) {
        //     $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('movies', function (Blueprint $table) {
        //     $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('movies', function (Blueprint $table) {
        //     $table->foreign('favourite_id')->references('id')->on('favourites')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('favourites', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('actors', function (Blueprint $table) {
        //     $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
