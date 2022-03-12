<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerKulonbseg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER kulonbseg BEFORE INSERT ON MertErtekek 

        FOR EACH ROW 

        BEGIN 

            DECLARE elozo FLOAT DEFAULT NULL; 

            SET elozo = (SELECT mert_ertek from MertErtekek WHERE szenzor_id = new.szenzor_id ORDER BY datum DESC LIMIT 1); 

            IF elozo IS NOT NULL THEN 

                SET new.kulonbseg = (new.mert_ertek - elozo); 

            END IF; 

        END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER kulonbseg');
    }
}
