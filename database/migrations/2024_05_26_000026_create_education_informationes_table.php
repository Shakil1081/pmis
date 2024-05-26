<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationInformationesTable extends Migration
{
    public function up()
    {
        Schema::create('education_informationes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('concentration_major_group')->nullable();
            $table->string('school_university_name')->unique();
            $table->integer('passing_year')->nullable();
            $table->string('achivement')->nullable();
            $table->string('exam_degree')->nullable();
            $table->string('cgpa')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
