// app/Models/Education.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    // এই কলামগুলো fillable অর্থাৎ ডেটা ইনসার্ট করা যাবে
    protected $fillable = [
        'institution_name',
        'degree',
        'start_date',
        'end_date',
        'description',
    ];

    // টেবিলের নাম যদি 'educations' না হয়ে শুধু 'education' হয়
    // protected $table = 'education'; 
}