<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUgMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ug_neet_ranks', function (Blueprint $table) {
            $table->id();
            $table->integer('round')->nullable();
            $table->integer('all_india_rank')->nullable();
            $table->integer('state_rank')->nullable();
            $table->integer('neet_score')->nullable();
            $table->string('state')->nullable();
            $table->string('institute')->nullable();
            $table->string('course')->nullable();
            $table->string('quota')->nullable();
            $table->string('category')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('cr_2023_1')->nullable();
            $table->integer('cr_2023_2')->nullable();
            $table->integer('cr_2023_3')->nullable();
            $table->integer('cr_2023_4')->nullable();
            $table->integer('cr_2023_5')->nullable();
            $table->integer('cr_2023_6')->nullable();
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
        Schema::dropIfExists('ug_neet_ranks');
    }
}
