<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpouseInformationesTable extends Migration
{
    public function up()
    {
        Schema::create('spouse_informationes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn');
            $table->string('name_en')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('occupation')->nullable();
            $table->string('office_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->longText('present_addess')->nullable();
            $table->longText('permanent_addess')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
