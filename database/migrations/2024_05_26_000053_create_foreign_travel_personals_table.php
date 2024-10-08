<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignTravelPersonalsTable extends Migration
{
    public function up()
    {
        Schema::create('foreign_travel_personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->timestamps();
        });
    }
}
