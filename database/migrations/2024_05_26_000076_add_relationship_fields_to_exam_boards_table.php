<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExamBoardsTable extends Migration
{
    public function up()
    {
        Schema::table('exam_boards', function (Blueprint $table) {
            $table->unsignedBigInteger('examination_id')->nullable();
            $table->foreign('examination_id', 'examination_fk_9818007')->references('id')->on('exam_degrees');
        });
    }
}
