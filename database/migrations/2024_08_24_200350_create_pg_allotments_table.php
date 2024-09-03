<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePgAllotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pg_allotments', function (Blueprint $table) {
            $table->id();
            $table->integer('round')->nullable();
            $table->integer('all_india_rank')->nullable();
            $table->integer('state_rank')->nullable();
            $table->integer('neet_score')->nullable();
            $table->string('state')->nullable();
            $table->string('institute')->nullable();
            $table->string('institute_type')->nullable();
            $table->string('course')->nullable();
            $table->string('course_type')->nullable();
            $table->string('quota')->nullable();
            $table->string('category')->nullable();
            $table->string('degree')->nullable();
            $table->bigInteger('seats')->nullable();
            $table->bigInteger('fee')->nullable();
            $table->bigInteger('beds')->nullable();
            $table->bigInteger('stipend_1_year')->nullable();
            $table->bigInteger('bond_years')->nullable();
            $table->bigInteger('bond_penalty')->nullable();
            $table->integer('session')->nullable();
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
        Schema::dropIfExists('pg_allotments');
    }
}
