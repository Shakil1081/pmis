<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotaTable extends Migration
{
    public function up()
    {
        Schema::create('quota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn')->unique();
            $table->string('name_en')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }
}
