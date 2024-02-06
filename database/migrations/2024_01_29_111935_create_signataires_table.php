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
        Schema::create('signataires', function (Blueprint $table) {
            $table->id();
            $table->integer('code_signataire')->unique();
            $table->string('signer');

            $table->unsignedBigInteger('employe_activite_id');
            $table->foreign('employe_activite_id')->references('id')->on('employee_activites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signataires');
    }
};
