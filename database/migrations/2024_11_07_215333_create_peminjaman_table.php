<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barang_id');
            $table->date('tanggal_peminjaman')->default(now());
            $table->date('tanggal_kembali'); // Tanggal Kembali
            $table->string('status')->default('pinjam'); // Status peminjaman
            $table->integer('jumlah'); // jumlah
            $table->timestamps();

            // Foreign key untuk user_id yang mengarah ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Foreign key untuk barang_id yang mengarah ke tabel barangs
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
