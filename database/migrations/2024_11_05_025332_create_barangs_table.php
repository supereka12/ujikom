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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama_barang');
            $table->string('merek');
            $table->integer('stock');
            $table->float('rating', 2,);
            $table->timestamps(); 
        });

        Schema::table('barangs', function (Blueprint $table) {
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');

        Schema::table('barangs', function (Blueprint $table) {
            $table->dropColumn('stock');
            $table->dropColumn('image');
        });
    }
};
