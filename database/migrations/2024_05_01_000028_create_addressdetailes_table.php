<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressdetailesTable extends Migration
{
    public function up()
    {
        Schema::create('addressdetailes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address_type');
            $table->string('flat_house')->unique();
            $table->string('road_no')->nullable();
            $table->string('village_town')->nullable();
            $table->string('post_office')->nullable();
            $table->string('post_code');
            $table->string('phone_number')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
