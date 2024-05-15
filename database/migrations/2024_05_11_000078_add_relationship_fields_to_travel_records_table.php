<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTravelRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('travel_records', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732930')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_9732931')->references('id')->on('countries');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_9732934')->references('id')->on('travel_purposes');
        });
    }
}
