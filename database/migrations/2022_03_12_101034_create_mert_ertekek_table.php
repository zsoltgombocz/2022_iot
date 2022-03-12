<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMertErtekekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mertErtekek', function (Blueprint $table) {
            $table->id();
            $table->float('mert_ertek');
            $table->timestamp('datum');
            $table->float('kulonbseg')->nullable();
            $table->unsignedBigInteger('szenzor_id');

            $table->foreign('szenzor_id')->references('id')->on('szenzorok')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mertErtekek');
    }
}
