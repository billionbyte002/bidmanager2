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
        Schema::table('manage', function (Blueprint $table) {
            DB::table('manage')->whereNull('phone')->update(['phone' => 'default_phone']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('manage', function (Blueprint $table) {
            DB::table('manage')->where('phone', 'default_phone')->update(['phone' => null]);
        });
    }
};
