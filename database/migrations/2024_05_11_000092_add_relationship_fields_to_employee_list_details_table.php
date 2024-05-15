<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeListDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_list_details', function (Blueprint $table) {
            $table->unsignedBigInteger('general_information_id')->nullable();
            $table->foreign('general_information_id', 'general_information_fk_9777161')->references('id')->on('employee_lists');
        });
    }
}
