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
    Schema::create('clases', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('horario');
        $table->string('instructor');
        $table->integer('cupos');
        $table->foreignId('membresia_id')->constrained('membresias');
        $table->timestamps();
    });
    }


    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
