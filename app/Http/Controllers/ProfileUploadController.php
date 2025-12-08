<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileUploadController extends Controller
{
    public function show()
    {
        return view('upload-profile');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $request->file('profile_image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'profile.' . $extension;
        
        // Save to public/images folder
        $file->move(public_path('images'), $filename);

        return response()->json([
            'success' => true,
            'message' => 'Profile picture uploaded successfully!',
            'path' => 'images/' . $filename
        ]);
    }
}

