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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('other_img1')->after('cover_image')->nullable();
            $table->string('other_img2')->after('cover_image')->nullable();
            $table->string('video1')->after('cover_image')->nullable();
            $table->string('video2')->after('cover_image')->nullable();
            $table->string('video3')->after('cover_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('other_img1');
            $table->dropColumn('other_img2');
            $table->dropColumn('video1');
            $table->dropColumn('video2');
            $table->dropColumn('video3');
        });
    }
};
