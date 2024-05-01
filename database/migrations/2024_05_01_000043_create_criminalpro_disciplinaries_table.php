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
            $table->string('government_order_no')->nullable();
            $table->string('court_name')->nullable();
            $table->date('date_of_prosecution')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
