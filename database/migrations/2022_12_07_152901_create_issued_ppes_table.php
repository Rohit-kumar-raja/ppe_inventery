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
        Schema::create('issued_ppes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('issued_by');
            $table->unsignedBigInteger('issue_to');
            $table->date('date');
            $table->unsignedBigInteger('ppe_request_item_id');
            $table->integer('qty');
            $table->text('description');
            $table->string('prof_images');
            $table->timestamps();
            $table->foreign('issued_by')->references('id')->on('employees');
            $table->foreign('issue_to')->references('id')->on('employees');
            // $table->foreign('ppe_request_item_id')->references('id')->on('ppe_request_items');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issued_ppes');
    }
};
