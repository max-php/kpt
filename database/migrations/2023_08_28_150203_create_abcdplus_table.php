<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbcdplusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abcdplus', function (Blueprint $table) {
          $table->id();
    	  $table->foreignId('abcd_id')->constrained('abcd');
    	    $table->longText('A');
            $table->longText('B');
            $table->longText('C');
            $table->longText('D');
             $table->longText('target');
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
        Schema::dropIfExists('abcdplus');
    }
}
