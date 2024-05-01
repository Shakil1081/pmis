<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergenceContactesTable extends Migration
{
    public function up()
    {
        Schema::create('emergence_contactes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_person_name');
            $table->string('contact_person_relation');
            $table->string('contact_person_number');
            $table->timestamps();
        });
    }
}
