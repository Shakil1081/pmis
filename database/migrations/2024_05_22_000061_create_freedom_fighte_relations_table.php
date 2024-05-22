<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreedomFighteRelationsTable extends Migration
{
    public function up()
    {
        Schema::create('freedom_fighte_relations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_bn')->unique();
            $table->string('name_en')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
