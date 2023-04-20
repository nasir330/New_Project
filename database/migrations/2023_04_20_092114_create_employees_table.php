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
            $table->string('userId');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fathersName');
            $table->string('presentAddress');
            $table->string('permanentAddress');
            $table->string('dob');
            $table->string('phone');
            $table->string('referenceName')->nullable();
            $table->string('referencePhone')->nullable();
            $table->string('nationality');
            $table->string('docType')->nullable();
            $table->string('docIdNo')->nullable();
            $table->string('photo');
            $table->string('department');
            $table->string('designation');
            $table->string('joinDate');
            $table->string('leaveDate')->nullable();
            $table->string('manager')->nullable();
            $table->string('status')->nullable();
            $table->string('shift')->nullable();
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
