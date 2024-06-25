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
        Schema::create('pasiens', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
                $table->string('no_hp');
                $table->date('tanggal_lahir');
                $table->string('alamat');
                $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade');
                $table->foreignId('kunjungan_id')->constrained('kunjungans')->onDelete('cascade');
                $table->foreignId('obat_id')->constrained('obats')->onDelete('cascade');
                $table->decimal('harga', 8, 2);
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
