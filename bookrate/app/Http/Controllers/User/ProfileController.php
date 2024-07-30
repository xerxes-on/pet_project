<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function show()
    {
        //
    }

    public function edit()
    {
        return view('layouts.edit_profile');
    }

    public function update(Request $request)
    {
           $request->validate([
            'username' => ['string','nullable', 'lowercase',  'max:255', 'unique:'.User::class],
            'profile_picture' =>['nullable', 'image', 'mimes:jpg,png,webp', 'max:2048'],
        ]);
           Auth::user()->update((array)$request);


    }

}
