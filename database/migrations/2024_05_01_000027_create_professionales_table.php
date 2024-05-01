<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalesTable extends Migration
{
    public function up()
    {
        Schema::create('professionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('qualification_title');
            $table->string('institution');
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->integer('passing_year');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
