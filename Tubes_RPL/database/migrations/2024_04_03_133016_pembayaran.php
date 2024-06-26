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
        //
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pembayaran');
            $table->string('metode');
            $table->string('status_pembayaran');
            $table->foreignId('id_consumer')->constrained('user')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
