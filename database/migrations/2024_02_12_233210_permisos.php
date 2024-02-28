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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
      
        $table->string('fecha');
            $table->string('estado'); //P = pendiente A = aceptado = N = negado 
            $table->string('motivo'); 
            $table->string('observaciones');
            $table->integer('profesoresid')->constrained('profesores')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
