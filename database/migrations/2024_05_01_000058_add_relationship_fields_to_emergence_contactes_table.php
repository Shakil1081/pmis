<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmergenceContactesTable extends Migration
{
    public function up()
    {
        Schema::table('emergence_contactes', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732798')->references('id')->on('employee_lists');
        });
    }
}
