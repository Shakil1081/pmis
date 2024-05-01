<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDistrictsTable extends Migration
{
    public function up()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->unsignedBigInteger('divisions_id')->nullable();
            $table->foreign('divisions_id', 'divisions_fk_9742470')->references('id')->on('divisions');
        });
    }
}
