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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            // peminjam & buku (1 loan = 1 buku)
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();

            // admin yang memproses (nullable)
            $table->foreignId('admin_id')->nullable()->constrained('users')->nullOnDelete();

            // tanggal
            $table->date('loan_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('returned_date')->nullable();

            // status
            $table->enum('status', [
                'pending',
                'approved',
                'borrowed',
                'returned',
                'overdue',
                'cancelled'
            ])->default('pending');

            // denda total untuk loan ini (perhitungan optional)
            $table->decimal('fine_amount', 10, 2)->default(0);

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
