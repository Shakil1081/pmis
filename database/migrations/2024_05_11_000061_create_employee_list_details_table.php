<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeListDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_list_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('education_informatione')->nullable();
            $table->integer('professionale')->nullable();
            $table->integer('addressdetailes')->nullable();
            $table->integer('emergence_contactes')->nullable();
            $table->integer('spouse_informatione')->nullable();
            $table->integer('children')->nullable();
            $table->integer('job_historie')->nullable();
            $table->integer('employee_promotion')->nullable();
            $table->integer('leave_records')->nullable();
            $table->integer('service_particular')->nullable();
            $table->integer('trainings')->nullable();
            $table->integer('travel_records')->nullable();
            $table->integer('foreign_travel_personals')->nullable();
            $table->integer('social_ass_pr_attachments')->nullable();
            $table->integer('publications')->nullable();
            $table->integer('awards')->nullable();
            $table->integer('other_service_jobs')->nullable();
            $table->integer('languages')->nullable();
            $table->integer('criminal_prosecutiones')->nullable();
            $table->integer('criminalpro_disciplinaries')->nullable();
            $table->integer('acr_monitorings')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
