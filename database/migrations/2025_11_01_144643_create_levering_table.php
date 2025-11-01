<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Levering', function (Blueprint $table) {
            $table->id('Id'); // omdat jij overal Id gebruikt
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('LeverancierId')->nullable();
            $table->date('DatumLaatste')->nullable();
            $table->date('VerwachteEerstvolgende')->nullable();
            $table->integer('Aantal')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Levering');
    }
};
