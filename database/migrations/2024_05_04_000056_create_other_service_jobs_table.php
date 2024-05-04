<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherServiceJobsTable extends Migration
{
    public function up()
    {
        Schema::create('other_service_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employer')->nullable();
            $table->longText('address')->nullable();
            $table->string('service_type')->nullable();
            $table->string('position')->nullable();
            $table->date('from')->nullable();
            $table->string('to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
