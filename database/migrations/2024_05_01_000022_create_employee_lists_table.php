<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeListsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employeeid')->unique();
            $table->string('cadreid')->nullable();
            $table->string('fullname_bn')->unique();
            $table->string('fullname_en');
            $table->string('fname_bn');
            $table->string('fname_en')->nullable();
            $table->string('mname_bn')->nullable();
            $table->string('mname_en')->nullable();
            $table->date('date_of_birth');
            $table->string('height');
            $table->string('special_identity')->nullable();
            $table->integer('nid')->unique();
            $table->integer('passport')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->date('fjoining_date');
            $table->string('project_name')->nullable();
            $table->string('fjoiningofficename')->nullable();
            $table->date('date_of_con_serviec')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
