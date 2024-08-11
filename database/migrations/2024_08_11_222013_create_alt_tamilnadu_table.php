<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltTamilnaduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_tamilnadu', function (Blueprint $table) {
            $table->id();
            $table->string('round')->nullable();
            $table->string('state_rank')->nullable();
            $table->string('neet_score')->nullable();
            $table->string('state')->nullable();
            $table->string('institute')->nullable();
            $table->string('course')->nullable();
            $table->string('quota')->nullable();
            $table->string('category')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('beds')->nullable();
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
        Schema::dropIfExists('alt_tamilnadu');
    }
}
