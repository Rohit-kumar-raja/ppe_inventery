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
        Schema::create('ppe_request_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ppe_id');
            $table->unsignedBigInteger('pee_requested_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('request_qty');
            $table->integer('received_qty');
            $table->text('remarks');
            $table->timestamps();
            $table->foreign('ppe_id')->references('id')->on('ppes');
            $table->foreign('pee_requested_id')->references('id')->on('ppp_requests');
            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppe_request_items');
    }
};
