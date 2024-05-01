<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtracurriculamsTable extends Migration
{
    public function up()
    {
        Schema::create('extracurriculams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('activity_name');
            $table->string('organization')->nullable();
            $table->string('position')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }
}
