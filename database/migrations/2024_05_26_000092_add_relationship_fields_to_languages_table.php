<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLanguagesTable extends Migration
{
    public function up()
    {
        Schema::table('languages', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9732974')->references('id')->on('employee_lists');
            $table->unsignedBigInteger('read_id')->nullable();
            $table->foreign('read_id', 'read_fk_9751302')->references('id')->on('language_proficiencies');
            $table->unsignedBigInteger('write_id')->nullable();
            $table->foreign('write_id', 'write_fk_9751303')->references('id')->on('language_proficiencies');
            $table->unsignedBigInteger('speak_id')->nullable();
            $table->foreign('speak_id', 'speak_fk_9751304')->references('id')->on('language_proficiencies');
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id', 'language_fk_9820299')->references('id')->on('language_lists');
        });
    }
}
