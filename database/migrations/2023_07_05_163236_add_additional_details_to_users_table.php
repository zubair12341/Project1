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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('student');
            $table->string('last_name')->nullable()->after('name');
            $table->date('date_of_birth')->nullable()->after('last_name');
            $table->string('gender')->nullable()->after('date_of_birth');
            $table->string('whatsapp')->nullable()->after('gender');
            $table->string('book_genre')->nullable()->after('whatsapp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('last_name');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('gender');
            $table->dropColumn('whatsapp');
            $table->dropColumn('book_genre');
        });
    }
};
