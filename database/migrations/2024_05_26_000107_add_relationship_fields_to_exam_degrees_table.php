<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExamDegreesTable extends Migration
{
    public function up()
    {
        Schema::table('exam_degrees', function (Blueprint $table) {
            $table->unsignedBigInteger('examination_id')->nullable();
            $table->foreign('examination_id', 'examination_fk_9818009')->references('id')->on('examinations');
        });
    }
}
