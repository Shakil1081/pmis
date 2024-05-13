<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingTypesTable extends Migration
{
    public function up()
    {
        Schema::create('training_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn')->unique();
            $table->string('name_en');
            $table->integer('value')->nullable();
            $table->timestamps();
        });
    }
}
