<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug',255);
            $table->string('entitle',255)->nullable()->default(null);
            $table->string('turtitle',255)->nullable()->default(null);
            $table->string('type',100);
            $table->string('country',100);
            $table->string('encountry',100);
            $table->string('turcountry',100);
            $table->string('city',100);
            $table->string('encity',100);
            $table->string('turcity',100);
            $table->string('zone',100)->nullable()->default(null);
            $table->string('enzone',100)->nullable()->default(null);
            $table->string('turzone',100)->nullable()->default(null);
            $table->string('sellstatus',50);
            $table->unsignedBigInteger('price')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->text('enaddress')->nullable()->default(null);
            $table->text('turaddress')->nullable()->default(null);
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
        Schema::dropIfExists('products');
    }
}
