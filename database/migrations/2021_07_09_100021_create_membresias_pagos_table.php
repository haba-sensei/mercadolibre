<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresiasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresias_pagos', function (Blueprint $table) {
            $table->id();

            $table->string('reference_id');

            $table->unsignedBigInteger('membresia_id');
            $table->foreign('membresia_id')->references('id')->on('membresias')->onDelete('cascade');

            $table->decimal('price_membresia', 16, 2);

            $table->enum('mode', ['card', 'paypal', 'gratuito']);
            $table->enum('bono', ['usado', 'libre']);
            $table->string('transaction_id');
            $table->enum('status', ['pending', 'approved', 'declined', 'refunded'])->default('pending');
            $table->decimal('tasa_cambio', 16, 2)->nullable();

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
        Schema::dropIfExists('membresias_pagos');
    }
}
