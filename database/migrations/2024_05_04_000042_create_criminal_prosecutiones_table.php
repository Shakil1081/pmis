<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriminalProsecutionesTable extends Migration
{
    public function up()
    {
        Schema::create('criminal_prosecutiones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judgement_type')->nullable();
            $table->string('natureof_offence')->nullable();
            $table->string('government_order_no')->nullable();
            $table->longText('remzrk')->nullable();
            $table->timestamps();
        });
    }
}
