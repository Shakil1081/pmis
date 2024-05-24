<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToForestRangesTable extends Migration
{
    public function up()
    {
        Schema::table('forest_ranges', function (Blueprint $table) {
            $table->unsignedBigInteger('forest_state_id')->nullable();
            $table->foreign('forest_state_id', 'forest_state_fk_9813380')->references('id')->on('forest_states');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_9813383')->references('id')->on('statuses');
            $table->unsignedBigInteger('forest_division_id')->nullable();
            $table->foreign('forest_division_id', 'forest_division_fk_9813430')->references('id')->on('divisions');
        });
    }
}
