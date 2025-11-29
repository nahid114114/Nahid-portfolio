<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // add this

class HomeController extends Controller
{
    public function index()
    {
        // latest 12 projects দেখাবে — যদি DB ফাঁকা থাকে, placeholders দেখাবে
        $projects = Project::latest()->take(12)->get();
        return view('home', compact('projects'));
    }
}
