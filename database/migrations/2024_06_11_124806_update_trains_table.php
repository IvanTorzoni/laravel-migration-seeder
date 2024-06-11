<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * CREATE TABLE 'trains' (
     * ALTER TABLE 'trains',
     * ADD 'data_di_partenza' DATE,
     * );
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->date('data_di_partenza')->nullable()->after('stazione_arrivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('data_di_partenza');
        });
    }
};
