<?php

namespace App\Models\Disallow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disallow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','type'
    ];
}
