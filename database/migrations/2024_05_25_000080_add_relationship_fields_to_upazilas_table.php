<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUpazilasTable extends Migration
{
    public function up()
    {
        Schema::table('upazilas', function (Blueprint $table) {
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id', 'district_fk_9742469')->references('id')->on('districts');
            $table->unsignedBigInteger('forest_state_id')->nullable();
            $table->foreign('forest_state_id', 'forest_state_fk_9813378')->references('id')->on('forest_states');
        });
    }
}
