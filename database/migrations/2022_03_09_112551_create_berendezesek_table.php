<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerendezesekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berendezesek', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->unsignedBigInteger('uzem_id');
            $table->index('uzem_id');
            $table->foreign('uzem_id')->references('id')->on('Uzemek')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berendezesek');
    }
}
