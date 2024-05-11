<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPurposesTable extends Migration
{
    public function up()
    {
        Schema::create('travel_purposes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn')->unique();
            $table->string('name_en');
            $table->longText('remark')->nullable();
            $table->timestamps();
        });
    }
}
