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
        Schema::create('ppe_re_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ppe_id');
            $table->date('date');
            $table->integer('qty');
            $table->foreign('ppe_id')->references('id')->on('ppes');
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
        Schema::dropIfExists('ppe_re_stocks');
    }
};
