<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactsList;
use App\Models\UserType;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //all contacts
    public function index()
    {
        $contacts = ContactsList::where('refId', Auth::user()->id)->get();
        return view('pages.contacts.index',['contacts' => $contacts]);
    }
    //add contacts form
    public function create()
    {
        $userTypes = UserType::all();
        return view('pages.contacts.create',['userTypes' => $userTypes]);
    }
    //store contacts
    public function store(Request $request)
    {
       
         // Generate a random password
         $autoPassword = Str::random(8);

         // Save the user's photo
         $photo = $request->file('photo');
         $photo_name = $photo->getClientOriginalName();
         $photo_storage = $photo->storeAs("public/uploads", $photo_name);
         $photo_path = 'storage/uploads/'.$photo_name;

         // Create the user
         $user = User::create([
             'userType' => $request->userType,
             'email' => $request->email,            
             'password' => Hash::make($autoPassword),             
         ]);

           // Create the ContactsList
         $contacts = ContactsList::create([
             'userId' => $user->id,
             'refId' => Auth::user()->id,
             'name' => $request->name,
             'phone' => $request->phone,
             'company' => $request->company,
             'address' => $request->address,            
             'photo' => $photo_path,
         ]);

          // Send the login details to the user's email
          Mail::send('notification.newuser', ['user' => $user, 'password' => $autoPassword], function($message) use ($user) {
            $message->to($user->email)->subject('Your account has been created successfully');
        });
       
         session()->flash('success', 'New Contact created successfully..!!');
        return redirect()->back();
    }
}
