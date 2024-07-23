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
        Schema::create('jetons', function (Blueprint $table) {
            $table->id();
            $table->string('intitule', 255);
            $table->date('delivre_le');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('personnel_id')->constrained('users');
            $table->foreignId('etudiant_id')->constrained('users');
            $table->foreignId('frais_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jetons');
    }
};
