<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeListsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('home_district_id')->nullable();
            $table->foreign('home_district_id', 'home_district_fk_9732641')->references('id')->on('districts');
            $table->unsignedBigInteger('marital_statu_id')->nullable();
            $table->foreign('marital_statu_id', 'marital_statu_fk_9732642')->references('id')->on('maritalstatuses');
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id', 'gender_fk_9732643')->references('id')->on('genders');
            $table->unsignedBigInteger('religion_id')->nullable();
            $table->foreign('religion_id', 'religion_fk_9732644')->references('id')->on('religions');
            $table->unsignedBigInteger('blood_group_id')->nullable();
            $table->foreign('blood_group_id', 'blood_group_fk_9732645')->references('id')->on('blood_groups');
            $table->unsignedBigInteger('license_type_id')->nullable();
            $table->foreign('license_type_id', 'license_type_fk_9732658')->references('id')->on('license_types');
            $table->unsignedBigInteger('job_type_id')->nullable();
            $table->foreign('job_type_id', 'job_type_fk_9732670')->references('id')->on('job_types');
            $table->unsignedBigInteger('quota_id')->nullable();
            $table->foreign('quota_id', 'quota_fk_9732701')->references('id')->on('quota');
        });
    }
}
