<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // creo la tabella e  la modifico 
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address',255);
            $table->string('city',255);
            $table->text('description')->nullable();
            $table->float('price',10,2);
            $table->tinyInteger('square_meters')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // elimino la tabella
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
