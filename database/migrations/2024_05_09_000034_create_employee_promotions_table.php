<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePromotionsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('go_issue_date')->nullable();
            $table->date('office_order_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
