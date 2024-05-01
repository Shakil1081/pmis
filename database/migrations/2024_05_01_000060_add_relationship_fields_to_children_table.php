<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToChildrenTable extends Migration
{
    public function up()
    {
        Schema::table('children', function (Blueprint $table) {
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id', 'gender_fk_9732843')->references('id')->on('genders');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732850')->references('id')->on('employee_lists');
        });
    }
}
