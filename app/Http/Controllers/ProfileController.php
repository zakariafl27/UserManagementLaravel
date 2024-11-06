<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::paginate(10);
        return view('profile.index', compact('profiles'));
    }

    public function create(){
        $profiles = Profile::all();
        return view('profile.create', compact('profiles'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:profiles,email',
            'password' => 'required|string|min:8',
            'description' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // If validation passes, create the profile
        Profile::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('profile.index')->with('success', 'Profile created successfully!');
    }

    public function show (Request $request){
        $id = $request->id;
        $profiles = Profile::find($id);
        return view('profile.show', compact('profiles'));
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
        return redirect()->route('profile.index');
    }  

    public function destroy(Request $request)
{
    $id = $request->id;
    $profiles = Profile::find($id); // Retrieve the profile by ID
    
    if ($profiles){
        $profiles->delete(); // Delete the profile if it exists
    }

    return redirect()->route('profile.index');
}




}
