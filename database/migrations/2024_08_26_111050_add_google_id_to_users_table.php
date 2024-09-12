<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGoogleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< Updated upstream
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('exam_type')->nullable();
            $table->integer('score')->nullable();
            // $table->string('phone')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['exam_type', 'score']);
        });
    }
=======

     public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('google_id')->unique()->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('google_id');
    });
}

    
>>>>>>> Stashed changes
}
