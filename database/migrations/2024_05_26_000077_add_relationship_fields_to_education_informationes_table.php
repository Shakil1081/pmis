<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEducationInformationesTable extends Migration
{
    public function up()
    {
        Schema::table('education_informationes', function (Blueprint $table) {
            $table->unsignedBigInteger('name_of_exam_id')->nullable();
            $table->foreign('name_of_exam_id', 'name_of_exam_fk_9732742')->references('id')->on('examinations');
            $table->unsignedBigInteger('exam_board_id')->nullable();
            $table->foreign('exam_board_id', 'exam_board_fk_9732743')->references('id')->on('exam_boards');
            $table->unsignedBigInteger('result_id')->nullable();
            $table->foreign('result_id', 'result_fk_9818038')->references('id')->on('results');
            $table->unsignedBigInteger('achievement_types_id')->nullable();
            $table->foreign('achievement_types_id', 'achievement_types_fk_9806856')->references('id')->on('achievementschools_universities');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732747')->references('id')->on('employee_lists');
        });
    }
}
