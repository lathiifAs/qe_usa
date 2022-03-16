<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issued_by extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'issued_by'
    ];
}
