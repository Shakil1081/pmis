<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('training_name')->nullable();
            $table->string('institute_name')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('grade')->nullable();
            $table->string('position')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
