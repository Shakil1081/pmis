<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn')->unique();
            $table->string('name_en');
            $table->string('salary_range')->nullable();
            $table->string('current_basic_pay')->nullable();
            $table->string('basic_pay_scale');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}