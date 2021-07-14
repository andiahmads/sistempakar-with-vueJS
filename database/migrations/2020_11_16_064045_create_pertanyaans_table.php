<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pernyataan_usia');
            $table->string('pernyataan_G1');
            $table->string('pernyataan_G2');
            $table->string('pernyataan_G3');
            $table->string('pernyataan_G4');
            $table->string('pernyataan_G5');
            $table->string('pernyataan_G6');
            $table->string('pernyataan_G7');
            $table->string('pernyataan_G8');
            $table->string('pernyataan_G9');
            $table->string('pernyataan_G10');
            $table->string('pernyataan_G14');
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
        Schema::dropIfExists('pertanyaans');
    }
}
