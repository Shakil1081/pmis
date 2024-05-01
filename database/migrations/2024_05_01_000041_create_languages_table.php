<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('language')->nullable();
            $table->boolean('read')->default(0);
            $table->boolean('write')->default(0)->nullable();
            $table->boolean('speak')->default(0)->nullable();
            $table->timestamps();
        });
    }
}
