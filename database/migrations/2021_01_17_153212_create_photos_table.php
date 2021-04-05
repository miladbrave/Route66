<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('path',255);
            $table->string('original_name',255);
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->bigInteger('slider_id')->unsigned()->nullable();
            $table->bigInteger('blog_id')->unsigned()->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('car_id')->unsigned()->nullable();
            $table->bigInteger('consult_id')->unsigned()->nullable();

            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('car_id')->references('id')->on('cars')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('consult_id')->references('id')->on('cosults')
                ->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('photos');
    }
}
