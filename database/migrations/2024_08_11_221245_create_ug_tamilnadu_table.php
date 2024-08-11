<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUgTamilnaduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ug_tamilnadu', function (Blueprint $table) {
            $table->id();
            $table->string('quota')->nullable();
            $table->string('category')->nullable();
            $table->string('state')->nullable();
            $table->string('institute')->nullable();
            $table->string('course')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('stipend_year_1')->nullable();
            $table->integer('bond_years')->nullable();
            $table->integer('bond_penalty')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('CR_2021_1')->nullable();
            $table->integer('CR_2021_2')->nullable();
            $table->integer('CR_2021_3')->nullable();
            $table->integer('CR_2021_4')->nullable();
            $table->integer('CR_2022_1')->nullable();
            $table->integer('CR_2022_2')->nullable();
            $table->integer('CR_2022_3')->nullable();
            $table->integer('CR_2022_4')->nullable();
            $table->integer('CR_2022_5')->nullable();
            $table->integer('CR_2023_1')->nullable();
            $table->integer('CR_2023_2')->nullable();
            $table->integer('CR_2023_3')->nullable();
            $table->integer('CR_2023_4')->nullable();
            $table->integer('CR_2023_5')->nullable();
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
        Schema::dropIfExists('ug_tamilnadu');
    }
}
