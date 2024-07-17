<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiharsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bihars', function (Blueprint $table) {
            $table->id();
            $table->string('counseling_type')->nullable();
            $table->string('quota')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('course_fee')->nullable();
            $table->string('private_mgmt_fee')->nullable();
            $table->string('nri_fee')->nullable();
            $table->string('bond_years')->nullable();
            $table->string('bond_penalty')->nullable();
            $table->string('stripend_year')->nullable();
            $table->string('category')->nullable();
            $table->string('round')->nullable();
            $table->string('rank')->nullable();
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
        Schema::dropIfExists('bihars');
    }
}
