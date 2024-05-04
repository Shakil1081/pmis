<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOtherServiceJobsTable extends Migration
{
    public function up()
    {
        Schema::table('other_service_jobs', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9751292')->references('id')->on('employee_lists');
        });
    }
}
