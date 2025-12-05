// database/seeders/EducationSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('education')->insert([ // টেবিলের নাম 'education' ব্যবহার করা হয়েছে
            // ১. চলমান শিক্ষা (University)
            [
                'institution_name' => 'Daffodil International University',
                'degree' => 'B.Sc. in Computer Science and Engineering (CSE)',
                'start_date' => '2022-06-01',
                'end_date' => null, // null সেট করুন
                'description' => 'Currently pursuing a B.Sc. in CSE. Focusing on web technologies like Laravel and Vue.js.',
                'created_at' => now(), 'updated_at' => now(),
            ],
            // ২. সমাপ্ত শিক্ষা (HSC)
            [
                'institution_name' => 'Bangladesh Navy School and College, Khulna',
                'degree' => 'Higher Secondary Certificate (HSC)',
                'start_date' => '2018-07-01',
                'end_date' => '2020-06-30', 
                'description' => 'Science Group. Achieved a good result in the final examination. (HSC Period: 2018-2020)',
                'created_at' => now(), 'updated_at' => now(),
            ],
            // ৩. সমাপ্ত শিক্ষা (SSC)
            [
                'institution_name' => 'Mirzapur Secondary School',
                'degree' => 'Secondary School Certificate (SSC)',
                'start_date' => '2014-01-01',
                'end_date' => '2018-12-31', 
                'description' => 'Science Group.',
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }
}