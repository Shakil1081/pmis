<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedBigInteger('resultgroup_id')->nullable();
            $table->foreign('resultgroup_id', 'resultgroup_fk_9818034')->references('id')->on('result_groups');
        });
    }
}
