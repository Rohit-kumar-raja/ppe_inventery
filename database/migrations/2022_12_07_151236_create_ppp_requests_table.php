<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppp_requests', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('employee_id');
            $table->date('required_by_which_date');
            $table->unsignedBigInteger('approved_by');
            $table->date('approved_date');
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('approved_by')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppp_requests');
    }
};
