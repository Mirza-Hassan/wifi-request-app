<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Approval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval', function (Blueprint $table) {
            $table->increments('id');
             $table->string('time')->nullable();
             $table->string('username')->nullable();
             $table->string('password')->nullable();
            $table->timestamp('created_at');
            $table->unsignedInteger('student_id');
            $table->string('approved');

            $table->foreign('student_id')->references('id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approval');
    }
}
