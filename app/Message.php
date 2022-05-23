<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['leads_id', 'judul', 'pesan'];

    public function leads()
    {
        return $this->belongsTo('App\Lead');
    }
}