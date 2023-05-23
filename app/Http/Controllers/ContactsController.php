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

    //view contacts
    public function view($id)
    {
        $contactDetails = ContactsList::where('id',$id)->first();
        return view('pages.contacts.view', ['contactDetails' => $contactDetails]);
    }
    //edit contacts
    public function edit($id)
    {
        $contactDetails = ContactsList::where('id',$id)->first();
        return view('pages.contacts.edit', ['contactDetails' => $contactDetails]);
    }
    //update contacts photo
    public function updatePhoto(Request $request)
    {
         // Save the user's photo
         $photo = $request->file('photo');
         $photo_name = $photo->getClientOriginalName();
         $photo_storage = $photo->storeAs("public/uploads", $photo_name);
         $photo_path = 'storage/uploads/'.$photo_name;

       ContactsList::where('id',$request->contactId)->update([
        'photo' =>  $photo_path,        
       ]);
       session()->flash('success','Photo updated Successfully..!!');
       return redirect()->back(); 
    }
    //update contacts
    public function update(Request $request)
    {        
       ContactsList::where('id',$request->contactId)->update([
        'name' => $request->name,
        'company' => $request->company,
        'phone' => $request->phone,
        'address' => $request->address,
       ]);
       session()->flash('success','Details updated Successfully..!!');
       return redirect()->back(); 
    }
    //delete contacts
    public function delete($id)
    {
        //selcet user id
        $userId = ContactsList::where('id', $id)->first();

        User::where('id', $userId->userId)->delete();
        ContactsList::where('id', $userId->id)->delete();

        session()->flash('delete','Account Deleted Successfully..!!');
        return redirect()->route('contacts.list'); 
    }

     //search Contacts
     public function searchContacts(Request $request){
        
        if($request->ajax()){
            //return $request->name;
            $data = ContactsList::where('name', 'like', $request->name.'%')->get();
            $output = '';
            if(count($data)>0){
                $output = '<ul class="list-group mt-0" style="display:block; position:relative; top:-10px; z-index:1;">';
                    foreach($data as $item){
                        $output .= '<li class="list-group-item" style="background-color:#dee2e6;">'.$item->name. '</li>';
                    }
                $output .= '</ul>';      
            }else{
                $output .= '<li class="list-group-item"> No data found </li>';
            }
            return $output;
        }
        //return view('pages.maintenance.create');
    }
     //search Contacts
     public function selectContacts(Request $request){        
        $contacts = ContactsList::where('name',  $request->searchContact )->first();
        return response()->json($contacts);
    }
}
