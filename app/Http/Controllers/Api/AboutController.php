<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return About::first() ?? new About();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'bio' => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
            'location' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('about', 'public');
        }

        $about = About::first();
        if ($about) {
            $about->update($data);
            return response()->json($about);
        }

        return response()->json(About::create($data), 201);
    }

    public function show(About $about)
    {
        return $about;
    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'bio' => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
            'location' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('about', 'public');
        }

        $about->update($data);
        return response()->json($about);
    }

    public function destroy(About $about)
    {
        $about->delete();
        return response()->noContent();
    }
}
