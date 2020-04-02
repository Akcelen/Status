<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvartsTypehomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advarts_typehome', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('typeHome')->nullable();
            $table->string('typeHomeG')->nullable();
            $table->string('typeHomeLand')->nullable();
            $table->string('typeHomeOffice')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advarts_typehome');
    }
}
