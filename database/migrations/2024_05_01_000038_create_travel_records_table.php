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
            $table->date('start_date');
            $table->date('end_date');
            $table->string('travel_type')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }
}
