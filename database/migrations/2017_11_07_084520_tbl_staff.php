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
            $table->string('fullname');
            $table->smallInteger('sex');
            $table->integer('phone');
            $table->string('email',100)->unique();
            $table->string('address');
            $table->integer('identity_number');
            $table->dateTime('birthday');
            $table->dateTime('start_work_time');
            $table->dateTime('end_work_time');
            $table->float('price');
            $table->string('position');
            $table->string('image');
            $table->smallInteger('status');
            $table->timestamps();
            $table->softDeletes();
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
