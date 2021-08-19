<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserlogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_userlogin', function (Blueprint $table) {
            $table->id('ID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('EmailID');
            $table->string('Pass');
            $table->string('Home_Loan');
            $table->string('Working_Real_Estate');
            $table->string('Agent_First_Name');
            $table->string('Agent_Email');
            $table->string('Agent_Number');
            $table->string('Mortgage_Options');
            $table->string('Covid_19_Disclosure');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_userlogin');
    }
}
