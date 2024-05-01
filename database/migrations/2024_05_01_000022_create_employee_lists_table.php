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
            $table->string('fname_en');
            $table->string('mname_bn');
            $table->string('mname_en');
            $table->date('date_of_birth');
            $table->string('height')->nullable();
            $table->string('special_identity')->nullable();
            $table->integer('nid');
            $table->string('passport')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number');
            $table->date('fjoining_date');
            $table->string('project_name')->nullable();
            $table->string('fjoiningofficename')->nullable();
            $table->date('date_of_con_serviec')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
