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
        Schema::create('vocabulary_pdfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id'); // Foreign key to link with BookDetails
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->string('vocab_name')->nullable();
            $table->string('file_path'); // Store the file path of the PDF
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocabulary_pdfs');
    }
};
