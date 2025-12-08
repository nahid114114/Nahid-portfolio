<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Project;
use Carbon\Carbon;

class PersonalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        About::truncate();
        Skill::truncate();
        Education::truncate();
        Project::truncate();

        // Add About Information
        About::create([
            'bio' => 'I am Md Nahid Hasan, an undergraduate student in the Department of Computer Science and Engineering at Daffodil International University, Bangladesh. I have a strong academic background with excellent results and practical experience in software and mobile application development using Flutter. My research interests include healthcare technology, artificial intelligence, machine learning, and data privacy. I am eager to pursue higher studies and contribute to research that enhances secure and intelligent healthcare systems.',
            'location' => 'Dhaka, Bangladesh',
            'email' => 'nahid.cse@diu.edu.bd', // You can update this with your actual email
        ]);

        // Add Skills
        $skills = [
            ['name' => 'Artificial Intelligence', 'level' => 75],
            ['name' => 'Machine Learning', 'level' => 75],
            ['name' => 'Deep Learning', 'level' => 70],
            ['name' => 'Data Preprocessing', 'level' => 80],
            ['name' => 'Regression', 'level' => 75],
            ['name' => 'Classification', 'level' => 75],
            ['name' => 'Flutter', 'level' => 85],
            ['name' => 'Dart', 'level' => 85],
            ['name' => 'Firebase', 'level' => 80],
            ['name' => 'REST API', 'level' => 80],
            ['name' => 'UI Design', 'level' => 75],
            ['name' => 'Cross-platform Development', 'level' => 85],
            ['name' => 'Python', 'level' => 85],
            ['name' => 'C++', 'level' => 80],
            ['name' => 'C', 'level' => 80],
            ['name' => 'Object-Oriented Programming', 'level' => 85],
            ['name' => 'Problem Solving', 'level' => 85],
            ['name' => 'Academic Writing', 'level' => 80],
            ['name' => 'Research', 'level' => 85],
            ['name' => 'Data Privacy', 'level' => 75],
            ['name' => 'Healthcare Systems', 'level' => 70],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Add Education
        Education::create([
            'institution_name' => 'Daffodil International University',
            'degree' => 'Bachelor of Science in Computer Science and Engineering',
            'start_date' => Carbon::parse('2022-06-01'),
            'end_date' => Carbon::parse('2026-06-01'),
            'description' => 'Currently pursuing Bachelor\'s degree with CGPA 3.00. Focused on AI, ML, healthcare technology, and data privacy research.',
        ]);

        Education::create([
            'institution_name' => 'Bangladesh Navy School & College, Khulna',
            'degree' => 'Higher Secondary Certificate (HSC) - Science',
            'start_date' => Carbon::parse('2018-01-01'),
            'end_date' => Carbon::parse('2020-12-31'),
            'description' => 'Completed HSC with GPA 5.00',
        ]);

        Education::create([
            'institution_name' => 'Mirzapur High School',
            'degree' => 'Secondary School Certificate (SSC) - Science',
            'start_date' => Carbon::parse('2016-01-01'),
            'end_date' => Carbon::parse('2018-12-31'),
            'description' => 'Completed SSC with GPA 5.00',
        ]);

        // Add Projects
        Project::create([
            'title' => 'Smart Bucket System Using IoT',
            'description' => 'An IoT-based smart bucket system project developed in 2024. This project demonstrates practical application of Internet of Things technology.',
            'link' => null, // Add GitHub or demo link if available
            'image' => null,
        ]);

        Project::create([
            'title' => 'Explainable Deep Learning for Colorectal Cancer Detection',
            'description' => 'Developed an explainable deep learning model for early detection of colorectal cancer using multiclass histopathology image classification. Published in IEEE 2025 2nd Asia Pacific Conference on Innovation in Technology (APCIT). The research emphasizes both accuracy and interpretability, enabling medical professionals to understand and trust model predictions.',
            'link' => null, // Add publication link if available
            'image' => null,
        ]);
    }
}

