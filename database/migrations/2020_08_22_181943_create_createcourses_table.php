<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createcourses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('introduction')->default('Introduction');
            $table->longText('description')->nullable();
            $table->string('course_url1')->nullable();
            $table->string('course_url2')->nullable();
            $table->string('course_url3')->nullable();
            $table->string('course_url4')->nullable();
            $table->string('course_url5')->nullable();
            $table->string('exam_url')->nullable();
            $table->longText('resources')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('createcourses');
    }
}
