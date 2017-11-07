<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('fullname');
            $table->smallInteger('sex');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('identity_number');
            $table->dateTime('birthday');
            $table->dateTime('start_work_time');
            $table->dateTime('end_work_time');
            $table->float('price');
            $table->string('position');
            $table->string('image');
            $table->smallInt('status');
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
        Schema::drop('tbl_staff');
    }
}
