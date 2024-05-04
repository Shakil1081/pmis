<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceParticularsTable extends Migration
{
    public function up()
    {
        Schema::create('service_particulars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('designation_status')->nullable();
            $table->string('office_organization_institute')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('release_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
