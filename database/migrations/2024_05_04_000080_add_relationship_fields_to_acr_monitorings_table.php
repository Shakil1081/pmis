<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAcrMonitoringsTable extends Migration
{
    public function up()
    {
        Schema::table('acr_monitorings', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9733006')->references('id')->on('employee_lists');
        });
    }
}
