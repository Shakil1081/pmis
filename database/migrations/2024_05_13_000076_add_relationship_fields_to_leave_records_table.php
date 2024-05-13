<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLeaveRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('leave_records', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732881')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('leave_category_id')->nullable();
            $table->foreign('leave_category_id', 'leave_category_fk_9751248')->references('id')->on('leave_categories');
            $table->unsignedBigInteger('type_of_leave_id')->nullable();
            $table->foreign('type_of_leave_id', 'type_of_leave_fk_9751247')->references('id')->on('leave_types');
        });
    }
}
