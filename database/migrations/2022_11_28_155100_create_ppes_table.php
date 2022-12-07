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
            $table->integer('cat_id');
            $table->date('date');
            $table->string('name');
            $table->integer('qty');
            $table->date('out_of_stock_dt');
            $table->string('inward');
            $table->string('outward');
            $table->string('net');
            $table->string('placeorder');
            $table->date('procurment_date');
            $table->string('percentage_of_min_avg');
            $table->integer('strore_id');
            $table->string('nature_of_obs');
            $table->string('amc');
            $table->string('calibrate');
            $table->string('issue_frequency');
            $table->text('description');
            $table->integer('esisn_no');
            $table->date('procurmnt_freq_dt');
            $table->boolean('status')->nullable();
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
