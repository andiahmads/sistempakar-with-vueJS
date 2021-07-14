<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rule_id')->unsigned();;
            $table->integer('user_id')->unsigned();
            $table->integer('saran_id')->unsigned();
            $table->string('usia')->nullable();
            $table->string('gejala_1')->nullable();
            $table->string('gejala_2')->nullable();
            $table->string('gejala_3')->nullable();
            $table->string('gejala_4')->nullable();
            $table->string('gejala_5')->nullable();
            $table->string('gejala_6')->nullable();
            $table->string('gejala_7')->nullable();
            $table->string('gejala_8')->nullable();
            $table->string('gejala_9')->nullable();
            $table->string('gejala_10')->nullable();
            $table->string('gejala_14')->nullable();
            $table->string('hasil_diagnosa')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('diagnosas');
    }
}
