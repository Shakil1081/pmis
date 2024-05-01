<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcrMonitoringsTable extends Migration
{
    public function up()
    {
        Schema::create('acr_monitorings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year');
            $table->string('reviewer')->nullable();
            $table->date('review_date')->nullable();
            $table->longText('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
