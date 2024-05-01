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
            $table->date('promotion_date');
            $table->string('organization_name');
            $table->date('office_order_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
