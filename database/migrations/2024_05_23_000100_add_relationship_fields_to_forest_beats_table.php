<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToForestBeatsTable extends Migration
{
    public function up()
    {
        Schema::table('forest_beats', function (Blueprint $table) {
            $table->unsignedBigInteger('forest_range_id')->nullable();
            $table->foreign('forest_range_id', 'forest_range_fk_9813432')->references('id')->on('forest_ranges');
        });
    }
}
