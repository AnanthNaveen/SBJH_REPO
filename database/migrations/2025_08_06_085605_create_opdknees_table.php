<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdkneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opdknees', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->string('age');            
            $table->string('regno');            
            $table->string('sex');
            $table->json('allergies');
            $table->string('type');
            $table->string('consultant');
            $table->json('data');
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
        Schema::dropIfExists('opdknees');
    }
}
