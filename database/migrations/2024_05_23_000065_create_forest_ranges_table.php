<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForestRangesTable extends Migration
{
    public function up()
    {
        Schema::create('forest_ranges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('forest_division_bbs_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
