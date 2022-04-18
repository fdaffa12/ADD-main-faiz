<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'nama_pemilik',
        'ktp',
        'alamat',
        'nohp',
        'unit',
        'sertifikat',
        'lb',
        'lt',
        'alamat_unit',
        'spesifikasi',
        'harga',
        'nego',
        'ketentuan',
        'no_listing',
        'jenis_listing',
        'marketing',
        'referal',
        'gambar',
    ];
}