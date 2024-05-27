<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSocialAssPrAttachmentsTable extends Migration
{
    public function up()
    {
        Schema::table('social_ass_pr_attachments', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_9783509')->references('id')->on('employee_lists');
        });
    }
}
