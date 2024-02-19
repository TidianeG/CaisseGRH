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
        Schema::create('employe_retraites', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->date('depart_retraite');

            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe_retraites');
    }
};
