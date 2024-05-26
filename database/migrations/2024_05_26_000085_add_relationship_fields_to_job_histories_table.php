<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToJobHistoriesTable extends Migration
{
    public function up()
    {
        Schema::table('job_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('designation_id')->nullable();
            $table->foreign('designation_id', 'designation_fk_9732855')->references('id')->on('designations');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9733003')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->foreign('grade_id', 'grade_fk_9789447')->references('id')->on('grades');
            $table->unsignedBigInteger('circle_list_id')->nullable();
            $table->foreign('circle_list_id', 'circle_list_fk_9817370')->references('id')->on('forest_states');
            $table->unsignedBigInteger('division_list_id')->nullable();
            $table->foreign('division_list_id', 'division_list_fk_9817371')->references('id')->on('forest_divisions');
            $table->unsignedBigInteger('range_list_id')->nullable();
            $table->foreign('range_list_id', 'range_list_fk_9817372')->references('id')->on('forest_ranges');
            $table->unsignedBigInteger('beat_list_id')->nullable();
            $table->foreign('beat_list_id', 'beat_list_fk_9817373')->references('id')->on('forest_beats');
            $table->unsignedBigInteger('office_unit_id')->nullable();
            $table->foreign('office_unit_id', 'office_unit_fk_9817374')->references('id')->on('office_units');
        });
    }
}
