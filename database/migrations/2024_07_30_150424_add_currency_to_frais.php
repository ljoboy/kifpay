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
        Schema::table('frais', function (Blueprint $table) {
            $table->enum('currency', ['CDF', 'USD'])->default('CDF')->after('montant')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('frais', function (Blueprint $table) {
            $table->dropColumn('currency');
        });
    }
};
