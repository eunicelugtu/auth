<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileForm()
    {
        return view('show');
    }

    public function storeProfile(Request $request)
    {
        $validated = $request->validate([
            'birthday' => 'required|date',
            'bio' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        Profile::create([
            'user_id' => Auth::id(),
            'birthday' => $validated['birthday'],
            'bio' => $validated['bio'],
            'contact_number' => $validated['contact_number']
        ]);

        return redirect()->route('dashboard')->with('success', 'Profile created successfully.');
    }
}
