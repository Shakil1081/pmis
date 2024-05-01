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
            $table->string('natureof_offence')->nullable();
            $table->string('government_order_no')->nullable();
            $table->date('government_order_date')->nullable();
            $table->string('court_name')->nullable();
            $table->longText('remzrk')->nullable();
            $table->timestamps();
        });
    }
}
