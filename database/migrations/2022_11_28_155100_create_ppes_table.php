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
        Schema::create('ppes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('store_id');
            $table->date('date');
            $table->string('name');
            $table->integer('qty');
            $table->date('out_of_stock_dt')->nullable();
            $table->string('inward')->nullable();
            $table->string('outward')->nullable();
            $table->string('net')->nullable();
            $table->string('placeorder')->nullable();
            $table->date('procurment_date')->nullable();
            $table->string('percentage_of_min_avg');
            $table->string('nature_of_obs')->nullable();
            $table->string('amc')->nullable();
            $table->string('calibrate')->nullable();
            $table->string('issue_frequency')->nullable();
            $table->text('description')->nullable();
            $table->integer('esisn_no')->nullable();
            $table->date('procurmnt_freq_dt')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppes');
    }
};
