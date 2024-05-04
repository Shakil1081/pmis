<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAddressdetailesTable extends Migration
{
    public function up()
    {
        Schema::table('addressdetailes', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732774')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('thana_upazila_id')->nullable();
            $table->foreign('thana_upazila_id', 'thana_upazila_fk_9732790')->references('id')->on('upazilas');
        });
    }
}
