<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('empresa');
            $table->string('document_type');
            $table->string('document_number')->unique();
            $table->string('nom');
            $table->string('llinatgePrimer');
            $table->string('llinatgeSegon');
            $table->string('pais');
            $table->timestamp('provincia');
            $table->string('municipio');
            $table->string('status');
            $table->string('telefono')->unique();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('tutores');
    }
}
