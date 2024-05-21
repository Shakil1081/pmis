<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('travel_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }
}
