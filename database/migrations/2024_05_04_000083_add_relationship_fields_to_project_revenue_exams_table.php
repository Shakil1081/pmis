<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProjectRevenueExamsTable extends Migration
{
    public function up()
    {
        Schema::table('project_revenue_exams', function (Blueprint $table) {
            $table->unsignedBigInteger('exam_id')->nullable();
            $table->foreign('exam_id', 'exam_fk_9751184')->references('id')->on('project_revenuelones');
        });
    }
}
