<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Opdracht extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opdracht', function (Blueprint $table) {
            $table->int('id');
            $table->timestamp('start_tijd')->nullable()->default(time());
            $table->timestamp('eind_tijd')->nullable()->default(time());
            $table->text('opmerkingen')->nullable()->default('text');
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
        //
    }
}
