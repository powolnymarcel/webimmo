<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationOffresPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offre_id')->unsigned();
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->string('chemin');
            $table->string('nom');
            $table->string('thumbnail_path');

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
        Schema::drop('offres_photos');
    }
}
