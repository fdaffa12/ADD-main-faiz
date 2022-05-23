<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'nama_cus', 'kota', 'tanggal', 'status', 'nohp', 'minat', 'image', 'keterangan', 'campaign_id'
    ];

    public function campaign()
    {
        return $this->belongsTo('App\Campaign');
    }

    public function message()
    {
        return $this->hasMany('App\Message');
    }
}