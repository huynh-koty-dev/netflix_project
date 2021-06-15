<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_countries', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('country_id');
            $table->timestamps();
        });

        // Schema::table('production_countries', function (Blueprint $table) {
        //     $table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
        //     $table->foreign('country_id')->references('country_id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_countries');
    }
}
