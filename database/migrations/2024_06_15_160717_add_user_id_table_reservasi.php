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
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('approval_by_admin')->default(0);
            $table->datetime('approval_date_by_admin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('approval_by_admin');
            $table->dropColumn('approval_date_by_admin');
        });
    }
};
