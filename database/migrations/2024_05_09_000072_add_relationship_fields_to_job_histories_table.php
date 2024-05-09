<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToJobHistoriesTable extends Migration
{
    public function up()
    {
        Schema::table('job_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('job_type_id')->nullable();
            $table->foreign('job_type_id', 'job_type_fk_9732854')->references('id')->on('job_types');
            $table->unsignedBigInteger('designation_id')->nullable();
            $table->foreign('designation_id', 'designation_fk_9732855')->references('id')->on('designations');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9733003')->references('id')->on('employee_lists');
        });
    }
}
