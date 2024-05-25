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
            $table->string('level_1')->nullable();
            $table->date('joining_date');
            $table->date('release_date');
            $table->string('level_2')->nullable();
            $table->string('level_3')->nullable();
            $table->string('level_4')->nullable();
            $table->string('level_5')->nullable();
            $table->string('institutename')->nullable();
            $table->string('academy_type')->nullable();
            $table->string('acadaylocation')->nullable();
            $table->string('posting_in_circle')->nullable();
            $table->string('postingindivision')->nullable();
            $table->string('posting_in_range')->nullable();
            $table->timestamps();
        });
    }
}
