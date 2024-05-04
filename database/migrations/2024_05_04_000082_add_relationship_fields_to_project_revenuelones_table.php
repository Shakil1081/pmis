<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProjectRevenuelonesTable extends Migration
{
    public function up()
    {
        Schema::table('project_revenuelones', function (Blueprint $table) {
            $table->unsignedBigInteger('project_revenue_id')->nullable();
            $table->foreign('project_revenue_id', 'project_revenue_fk_9751156')->references('id')->on('joininginfos');
        });
    }
}
