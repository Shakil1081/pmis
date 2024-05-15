<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('job_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institute_name');
            $table->date('joining_date');
            $table->date('release_date')->nullable();
            $table->string('level_1')->nullable();
            $table->string('level_2')->nullable();
            $table->string('level_3')->nullable();
            $table->string('level_4')->nullable();
            $table->string('level_5')->nullable();
            $table->timestamps();
        });
    }
}
