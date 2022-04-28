<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospek extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'nohp', 'rumah', 'status', 'leads_by', 'pr_status', 'note'
    ];
}