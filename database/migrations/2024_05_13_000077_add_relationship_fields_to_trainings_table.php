<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTrainingsTable extends Migration
{
    public function up()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732890')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('training_type_id')->nullable();
            $table->foreign('training_type_id', 'training_type_fk_9732891')->references('id')->on('training_types');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_9732894')->references('id')->on('countries');
        });
    }
}
