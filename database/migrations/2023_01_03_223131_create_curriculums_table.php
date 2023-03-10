<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('curriculums', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->dateTime('end_date');
    //         $table->dateTime('class_date');
    //         $table->unsignedBigInteger('course_id');
    //        $table->timestamps();



    //        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
    //     });
    // }
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('week_day');
            $table->time('class_time');
            $table->date('end_date');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums');
    }
};
