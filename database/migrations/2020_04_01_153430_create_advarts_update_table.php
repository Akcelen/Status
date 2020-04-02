<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvartsUpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advarts_update', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('active')->nullable();
            $table->integer('count')->nullable();
            $table->boolean('success')->comment('Успешность обновления');
            $table->string('message')->nullable()->comment('Сообщение о выполнении обновления записей в БД');
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
        Schema::dropIfExists('advarts_update');
    }
}
