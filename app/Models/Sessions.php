<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'ip_addres', 'user_agent','payload',
    ];
}
