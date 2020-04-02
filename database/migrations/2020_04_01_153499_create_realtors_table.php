<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realtors', function (Blueprint $table) {
            $table->integer('id')->primary();
            //$table->integer('office_id')->nullable();
            $table->timestamp('lastActive')->nullable();
            $table->string('fio')->nullable();
            $table->string('sex')->nullable();
            $table->string('birthday')->nullable();
            $table->string('user')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_work')->nullable();
            $table->string('phone_office')->nullable();
            $table->string('phone_public')->nullable();
            $table->string('email')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('realtors');
    }
}
