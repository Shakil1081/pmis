<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToForestDivisionsTable extends Migration
{
    public function up()
    {
        Schema::table('forest_divisions', function (Blueprint $table) {
            $table->unsignedBigInteger('forest_state_id')->nullable();
            $table->foreign('forest_state_id', 'forest_state_fk_9817337')->references('id')->on('forest_states');
        });
    }
}
