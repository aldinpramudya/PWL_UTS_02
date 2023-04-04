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
        Schema::table('book', function (Blueprint $table) {
            $table->string('kode_buku',50)->after('id')->unique();
            $table->string('judul',40)->after('kode_buku')->nullable();
            $table->string('pengarang',40)->after('judul')->nullable();
            $table->string('jenis_buku',40)->after('pengarang')->nullable();
            $table->string('harga',40)->after('jenis_buku')->nullable();
            $table->string('qty',40)->after('harga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book', function (Blueprint $table) {
            $table->dropColumn('kode_buku');
            $table->dropoColumn('judul');
            $table->dropoColumn('pengarang');
            $table->dropoColumn('jenis_buku');
            $table->dropoColumn('harga');
            $table->dropoColumn('qty');

        });
    }
};
