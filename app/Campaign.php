<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'nama_iklan', 'durasi', 'sosmed', 'gambar', 'developer_id', 'project_id', 'budget', 'status'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'developer_id');
    }

    public function project()
    {
        return $this->belongsTo(Primary::class, 'project_id');
    }
}