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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('empid');
            $table->string('area');
            $table->string('name');
            $table->string('position');
            $table->string('fathername');
            $table->string('address');
            $table->string('mobile');
            $table->string('maritalstatus');
            $table->date('dob');
            $table->string('placebirth');
            $table->string('qualification');
            $table->string('exp');
            $table->string('lastcompany');
            

            $table->string('photo')->nullable();       ;
            $table->string('adhar')->nullable();       ;
            $table->string('pan')->nullable();       ;
            $table->string('passbook')->nullable();       ;

            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('employees');
    }
};
