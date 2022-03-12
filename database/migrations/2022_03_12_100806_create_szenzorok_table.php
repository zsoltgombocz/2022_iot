<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzenzorokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szenzorok', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->unsignedBigInteger('berendezes_id');

            $table->foreign('berendezes_id')->references('id')->on('berendezesek')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szenzorok');
    }
}
