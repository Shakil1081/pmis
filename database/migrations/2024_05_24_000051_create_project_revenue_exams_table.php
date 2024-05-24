<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRevenueExamsTable extends Migration
{
    public function up()
    {
        Schema::create('project_revenue_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exam_name_bn')->unique();
            $table->string('exam_name_en')->unique();
            $table->timestamps();
        });
    }
}
