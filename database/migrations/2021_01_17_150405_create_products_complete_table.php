<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsCompleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productCompletes', function (Blueprint $table) {
            $table->id();
            $table->string('meter', 50);
            $table->string('age', 50)->nullable()->default(null);
            $table->string('room', 30)->nullable()->default(null);
            $table->string('bath', 30)->nullable()->default(null);
            $table->string('floor', 30)->nullable()->default(null);
            $table->string('heating', 30)->nullable()->default(null);
            $table->unsignedBigInteger('product_id')->unsigned();

            $table->foreign('product_id')->references('id')->on('products')
                                                ->onDelete('cascade')
                                                ->onUpdate('cascade');
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
        Schema::dropIfExists('productCompletes');
    }
}
