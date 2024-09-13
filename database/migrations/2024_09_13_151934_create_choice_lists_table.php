<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoiceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice_lists', function (Blueprint $table) {
            $table->id();
            $table->string('priority');
            $table->string('exam_type');
            $table->string('state');
            $table->string('institute');
            $table->string('institute_type');
            $table->string('course');
            $table->string('quota');
            $table->string('category');
            $table->integer('fee');
            $table->integer('beds');
            $table->integer('session');
            $table->integer('user_id');
            $table->string('cr_2023_1')->nullable();
            $table->string('cr_2023_2')->nullable();
            $table->string('cr_2023_3')->nullable();
            $table->string('cr_2023_4')->nullable();
            $table->string('cr_2023_5')->nullable();
            $table->string('cr_2023_6')->nullable();
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
        Schema::dropIfExists('choice_lists');
    }
}
