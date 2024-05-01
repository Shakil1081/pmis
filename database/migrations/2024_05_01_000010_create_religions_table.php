<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionsTable extends Migration
{
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn')->unique();
            $table->string('name_en');
            $table->timestamps();
        });
    }
}
