<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvartsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advarts_type', function (Blueprint $table) {
            $table->integer('id')->primary()->comment('ID category');
            $table->string('category',255)->unique();
            $table->string('category_name',255);
            $table->integer('type_id')->index();
            $table->string('type',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advarts_type');
    }
}
