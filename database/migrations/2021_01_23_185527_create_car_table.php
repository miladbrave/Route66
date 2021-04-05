<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title',250);
            $table->string('country')->nullable()->default(null);
            $table->string('encountry')->nullable()->default(null);
            $table->string('turcountry')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('encity')->nullable()->default(null);
            $table->string('turcity')->nullable()->default(null);
            $table->string('brand')->nullable()->default(null);
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('kilometer');
            $table->unsignedTinyInteger('type');
            $table->string('slug',255);
            $table->string('year',50)->nullable()->default(null);
            $table->string('cartype',50);
            $table->longText('description')->nullable()->default(null);
            $table->longText('endescription')->nullable()->default(null);
            $table->longText('turdescription')->nullable()->default(null);
            $table->unsignedTinyInteger('status');
            $table->unsignedBigInteger('cosult_id')->nullable()->default(null);

            $table->foreign('cosult_id')->references('id')->on('cosults')->onUpdate('cascade');
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
        Schema::dropIfExists('cars');
    }
}
