<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToForestStatesTable extends Migration
{
    public function up()
    {
        Schema::table('forest_states', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_9813374')->references('id')->on('statuses');
        });
    }
}
