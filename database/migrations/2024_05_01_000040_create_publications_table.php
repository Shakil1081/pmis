<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('publication_type');
            $table->string('publication_media')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('publication_link')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }
}
