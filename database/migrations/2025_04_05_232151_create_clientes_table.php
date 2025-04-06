<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); //int
            $table->string('nome'); //string
            $table->string('cpf'); //string 777.777.777-77
            $table->string('email'); //string b3ntt0.filho@gmail.com
            $table->string('fone'); //string (74) 99999-9999)
            $table->date('nascimento'); //date 1989-12-29
            $table->datetime('data'); //datetime 1989-12-29 17:00:00
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
