<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'referrer_id',
        'active',
    ];
}