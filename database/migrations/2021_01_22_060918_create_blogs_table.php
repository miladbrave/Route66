<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titlefa',255)->nullable()->default(null);
            $table->string('titleen',255)->nullable()->default(null);
            $table->string('titletur',255)->nullable()->default(null);
            $table->string('textfa',255)->nullable()->default(null);
            $table->string('texten',255)->nullable()->default(null);
            $table->string('texttur',255)->nullable()->default(null);
            $table->unsignedTinyInteger('status');
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
        Schema::dropIfExists('blogs');
    }
}
