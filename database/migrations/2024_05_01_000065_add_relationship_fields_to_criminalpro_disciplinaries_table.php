<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCriminalproDisciplinariesTable extends Migration
{
    public function up()
    {
        Schema::table('criminalpro_disciplinaries', function (Blueprint $table) {
            $table->unsignedBigInteger('criminalprosecutione_id')->nullable();
            $table->foreign('criminalprosecutione_id', 'criminalprosecutione_fk_9732994')->references('id')->on('criminal_prosecutiones');
        });
    }
}
