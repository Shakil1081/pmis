<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriminalproDisciplinariesTable extends Migration
{
    public function up()
    {
        Schema::create('criminalpro_disciplinaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judgement_type')->nullable();
            $table->string('government_order_no')->nullable();
            $table->longText('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
