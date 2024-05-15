<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToForeignTravelPersonalsTable extends Migration
{
    public function up()
    {
        Schema::table('foreign_travel_personals', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_9751262')->references('id')->on('countries');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_9751263')->references('id')->on('travel_purposes');
            $table->unsignedBigInteger('leave_id')->nullable();
            $table->foreign('leave_id', 'leave_fk_9751266')->references('id')->on('travel_records');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9783410')->references('id')->on('employee_lists');
        });
    }
}