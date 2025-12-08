<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'bio',
        'profile_image',
        'location',
        'email',
        'phone',
    ];
}
