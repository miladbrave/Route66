<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCosultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosults', function (Blueprint $table) {
            $table->id();
            $table->string('faname');
            $table->string('phone',50)->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('facebook',80)->nullable()->default(null);
            $table->string('twitter',80)->nullable()->default(null);
            $table->string('whatsup',80)->nullable()->default(null);
            $table->string('telegram',80)->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('endes')->nullable()->default(null);
            $table->text('turdes')->nullable()->default(null);
            $table->string('enname')->nullable()->default(null);
            $table->string('turname')->nullable()->default(null);

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
        Schema::dropIfExists('cosults');
    }
}
