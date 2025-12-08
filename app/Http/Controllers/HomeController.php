<?php

namespace App\Http\Controllers;

use App\Models\Education; // Education মডেলটি ইম্পোর্ট করা হলো
use App\Models\Project; 
use App\Models\About; 
use App\Models\Skill; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // বিদ্যমান ডেটা লোড করা
        $projects = Project::all();
        $about = About::first();
        $skills = Skill::all(); 

        // নতুন: Education ডেটা লোড করা 
        // ডেটাবেস থেকে সব শিক্ষাগত তথ্য লোড করে start_date অনুযায়ী নতুন থেকে পুরাতন ক্রমে সাজানো হলো
        $educations = Education::orderBy('start_date', 'desc')->get(); 
        
        // ভিউতে সব ডেটা পাঠানো হলো। 
        return view('portfolio', [ 
            'projects' => $projects,
            'about' => $about,
            'skills' => $skills,
            'educations' => $educations, // <-- Education ডেটা ভিউতে পাঠানো হলো
        ]);
    }
}