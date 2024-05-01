<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSpouseInformationesTable extends Migration
{
    public function up()
    {
        Schema::table('spouse_informationes', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732825')->references('id')->on('employee_lists');
        });
    }
}
