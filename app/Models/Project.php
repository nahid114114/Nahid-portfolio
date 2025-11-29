<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // নিরাপদ উপায়: যেই ফিল্ডগুলো mass-assignable সেগুলো এখানে যুক্ত করো
    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
    ];

    // alternative: যদি তুমি সব ফিল্ড অ্যাসাইনেবল করতে চাও (development only)
    // protected $guarded = [];
}
