<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::paginate(9);
        return view('profile.index', compact('profiles'));
    }

    public function create(){
        $profiles = Profile::all();
        return view('profile.create', compact('profiles'));
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $description = $request->description;
        $profile = new Profile();
        $profile->name = $name;
        $profile->email = $email;
        $profile->password = $password;
        $profile->description = $description;
        $profile->save();
        return redirect()->rout('Profile.index');
    }

    public function show (Profile $profile){
        return view('profile.show', compact('profile'));
    }

    public function edit (Profile $profile){
        $profiles = Profile::all();
        return view('profile.edit', compact('profiles'));
    }

    public function update (Request $request, Profile $profile){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $description = $request->description;
        $profile = new Profile();
        $profile->name = $name;
        $profile->email = $email;
        $profile->password = $password;
        $profile->description = $description;   
        $profile->update();
        return redirect()->route('Profile.index');
    }  


}
