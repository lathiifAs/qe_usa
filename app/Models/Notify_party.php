<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify_party extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'notify_party'
    ];
}
