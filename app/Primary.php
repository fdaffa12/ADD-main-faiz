<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primary extends Model
{
    protected $fillable = ['title', 'description', 'image', 'fasilitas', 'lb', 'lt', 'kt', 'km', 'lokasi', 'kategori', 'list_id', 'harga', 'type', 'dev_id', 'status'];

    public function categoryitem()
    {
        return $this->hasMany('App\PrimaryItem');
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'dev_id');
    }

    public function listing()
    {
        return $this->belongsTo(Listing::class, 'list_id');
    }
}