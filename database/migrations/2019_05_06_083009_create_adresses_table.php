<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('achternaam');
            $table->string('tussenvoegsel')->nullable();
            $table->string('voornaam');
            $table->string('mailadres');
            $table->bigInteger('telefoonnummer');
            $table->string('adres');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('afdeling');
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
//        Schema::dropIfExists('adresses');
    }
}
