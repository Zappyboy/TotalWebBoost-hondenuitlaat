<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hond extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hond', function (Blueprint $table) {
            $table->int('id');
            $table->string('naam');
            $table->string('geslacht');
            $table->string('soort');
            $table->string('ras');
            $table->string('markering');
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
