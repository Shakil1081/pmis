<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForestStatesTable extends Migration
{
    public function up()
    {
        Schema::create('forest_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn');
            $table->string('name_en')->unique();
            $table->string('bbs_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
