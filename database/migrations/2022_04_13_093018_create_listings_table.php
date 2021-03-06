<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('ktp');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('unit');
            $table->string('sertifikat');
            $table->string('lb');
            $table->string('lt');
            $table->string('alamat_unit');
            $table->string('spesifikasi');
            $table->string('harga');
            $table->string('nego');
            $table->string('ketentuan');
            $table->string('no_listing');
            $table->string('jenis_listing');
            $table->string('marketing');
            $table->string('referal');
            $table->string('komisi');
            $table->string('gambar');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}