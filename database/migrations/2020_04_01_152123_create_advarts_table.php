<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advarts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type')->nullable()->comment('Аренда или продажа');
            $table->integer('category')->nullable()->comment('objectType: дом, квартира, участок...');
            $table->timestamp('old')->nullable()->comment('Удаленное лотинфо');
            $table->timestamps();

            $table->integer('systemId')->nullable()->comment('Индификатор в лотинфо.');
            $table->integer('apiIdExchange')->nullable()->comment('Идентификационный номер сторонней юазы для LotInfo.API');
            $table->integer('dogType')->nullable();
            $table->boolean('advStatus')->nullable()->comment('advStatus');
            $table->integer('color' )->nullable()->comment('Цвет легенды. ?????');
            $table->string('homeCoord')->nullable();
            $table->integer( 'typePrice' )->nullable();
            $table->bigInteger('price' )->nullable();
            $table->bigInteger('priceMeter' )->nullable();
            $table->text('images' )->nullable();

            $table->string('systemLink')->nullable();
            $table->string('systemStatus')->nullable();
            $table->string('typeHome' )->nullable();
            $table->string('homeInt' )->nullable();

            $table->integer('regionId')->nullable();
            $table->string('fullAddress' )->nullable();
            $table->string('address' )->nullable();
            $table->integer('cityId')->nullable();
            $table->string('city')->nullable();
            $table->integer('streetId' )->nullable();
            $table->string('street' )->nullable();

            $table->string('material' )->nullable();
            $table->string('plan' )->nullable();
            $table->string('repair' )->nullable();
            $table->integer('floor' )->nullable();
            $table->integer('floors' )->nullable();
            $table->integer('room' )->nullable();
            $table->tinyInteger('ipoteka' )->nullable();

            $table->integer('area' )->nullable()->comment('sumarea: Общая площадь дома/квартиры');
            $table->integer('residential_area' )->nullable()->comment("Площадь участка");
            $table->integer('kitchen_area' )->nullable();

            $table->text('description' )->nullable()->comment('All - Примечание');


            $table->integer('realtor_id' )->nullable()->comment('user - реэлтор');
            $table->text('realtor_comment' )->nullable()->comment('agentComment');
            $table->string('realtor_name' )->nullable();
            $table->string('realtor_phone' )->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advarts');
    }
}
