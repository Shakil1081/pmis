<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCriminalProsecutionesTable extends Migration
{
    public function up()
    {
        Schema::table('criminal_prosecutiones', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732983')->references('id')->on('employee_lists');
        });
    }
}
