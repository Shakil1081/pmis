<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeePromotionsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_promotions', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732871')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('new_designation_id')->nullable();
            $table->foreign('new_designation_id', 'new_designation_fk_9732872')->references('id')->on('designations');
        });
    }
}
