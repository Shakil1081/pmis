<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialAssPrAttachmentsTable extends Migration
{
    public function up()
    {
        Schema::create('social_ass_pr_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('degree_membership_organization');
            $table->string('description')->nullable();
            $table->string('certificate_achievement')->nullable();
            $table->timestamps();
        });
    }
}
