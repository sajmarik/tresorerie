<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;




class ProfileController extends Controller
{



// Afficher tous les profils
public function apiIndex()
{
    $profiles = Profile::all(); // ou Profile::paginate(10);
    return response()->json(
         $profiles
    );
}

// Afficher un profil par ID
public function apiShow(Profile $profile)
{
    return response()->json([
        'status' => 'success',
        'data' => $profile
    ]);
}





public function index ()
{
    $profiles = Profile::paginate(9);
    return view('profile.index', compact('profiles'));
}
public function show(Profile $profile)
{
 //   $profile = $id;
// $id = (int)$request->id;
// $profile = Profile::findOrFail($id); 

return view('profile.show',compact('profile'));
}
public function create()
{
    return view("profile.create");
}
public function store(Request $request)
{
 //  $name = $request->name;
 //  $password = $request->password;
  // $email = $request->email;
  // $bio = $request->bio;

    //validation
    $formFields = $request->validate(
        [
          "name"=> "required|between:3,10",
           "email"=>  'required|email|unique:profiles,email',
           "password"=> "required|min:9|max:50|confirmed",
           "bio"=> "required",
      ]
        );

        //Hash
$formFields['password']= Hash::make($request->password);

    
        //Insertion
     Profile::create($formFields);
   //  [  'name'=>$name,
     //   'email'=>$email,
      //   'password'=>$password,
      //  'bio'=>$bio ,
    // ]);

    // redirection 
    //redirect
    //redirect()->route(...) ou bien to_route(...)
    //redirect()->action(...)
    //back

     return redirect()->route('profiles.index',['id'=> 1])->with('success','Votre compte est bien créer.') ;
   
}

public function destroy(Profile $profile)
{
   $profile->delete();

   return to_route('profiles.index')->with('success','Le profil est suprimé avec succées.');
}

public function edit(Profile $profile)
{
    return view('profile.edit',compact('profile'));
}


public function update(Request $request, Profile $profile)
{
    $formFields = $request->validate([
        "name" => "required|between:3,10",
        "email" => 'required|email|unique:profiles,email,' . $profile->id,
        "password" => "nullable|min:9|max:50|confirmed",
        "bio" => "required",
    ]);

    if ($request->filled('password')) {
        $formFields['password'] = Hash::make($request->password);
    } else {
        unset($formFields['password']);
    }

    $profile->update($formFields);

    return redirect()->route('profiles.index')->with('success', 'Profil mis à jour avec succès.');
}







}