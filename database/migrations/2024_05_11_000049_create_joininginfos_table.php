<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoininginfosTable extends Migration
{
    public function up()
    {
        Schema::create('joininginfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_revenue_bn')->unique();
            $table->string('project_revenue_en')->nullable();
            $table->timestamps();
        });
    }
}
