<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbcdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abcd', function (Blueprint $table) {
           $table->id('id')->autoIncrement();
            $table->longText('A');
            $table->longText('B');
            $table->longText('C');
            $table->longText('D');
            $table->string('emotions');
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
        Schema::dropIfExists('abcd');
    }
}
