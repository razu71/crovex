<?php

namespace App\Models\Package;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_day'
    ];
}