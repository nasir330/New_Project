<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employees;
use App\Models\Financial;
use App\Models\UserType;
use App\Models\Department;
use App\Models\Designation;
use App\Exports\UsersExport;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Excel;

class userController extends Controller
{
    public function index()
    {        
        $users = User::all();       
        return view('pages.employees.index',['users' => $users]);
    }
     //add employee form
     public function create()
     {    
         $userTypes = UserType::whereNot('id',1)->paginate(10);
         $departments = Department::all();    
         $designations = Designation::all();    
         return view('pages.employees.create',['userTypes'=> $userTypes, 'departments'=> $departments, 'designations'=> $designations]);
     }
     //store employee data
     public function store(Request $request)
     {    
        // Generate a random password
        $autoPassword = Str::random(8);

        // Save the user's photo
        $photo = $request->file('photo');
        $photo_name = $photo->getClientOriginalName();
        $photo_storage = $photo->storeAs("public/uploads", $photo_name);
        $photo_path = 'storage/uploads/'.$photo_name;

        // store  user data
        $user = User::create([
            'userType' => $request->userType,
            'email' => $request->email,          
            'password' => Hash::make($autoPassword),           
        ]);

        // store employee data
        $employee = Employees::create([
            'userId' => $user->id,
            'firstName' => $request->firstName,          
            'lastName' => $request->lastName,          
            'fathersName' => $request->fathersName,          
            'gender' => $request->gender,          
            'presentAddress' => $request->presentAddress,          
            'permanentAddress' => $request->permanentAddress,          
            'dob' => $request->dob,          
            'phone' => $request->phone,          
            'referenceName' => $request->referenceName,          
            'referencePhone' => $request->referencePhone,          
            'govId' => $request->govId,          
            'govIdNo' => $request->govIdNo,          
            'photo' => $photo_path,          
            'department' => $request->department,         
            'designation' => $request->designation,         
            'joinDate' => $request->joinDate,         
            'leaveDate' => $request->leaveDate,         
            'status' => $request->status,         
            'shift' => $request->shift,         
            'hiringManager' => $request->hiringManager,
        ]);

        // store financial data
        $financial = Financial::create([
            'userId' => $user->id,
            'salaryType' => $request->salaryType,          
            'payScale' => $request->payScale,          
            'accHolderName' => $request->accHolderName,          
            'accNumber' => $request->accNumber,          
            'bankName' => $request->bankName,          
            'branch' => $request->branch,          
            'branchCode' => $request->branchCode,
        ]);

         // Send the login details to the user's email
         Mail::send('notification.newuser', ['user' => $user, 'password' => $autoPassword], function($message) use ($user) {
            $message->to($user->email)->subject('Your account has been created successfully');
        });
        
        // Flash a success message and redirect back
        session()->flash('success', 'Employee created successfully..!!');
        return redirect()->back();           
       
     }
     //view employees profile
     public function view($id)
     {
        $employee = User::find($id);
        return view('pages.employees.view',['employee' => $employee]);
     }
     //edit employees profile
     public function edit($id)
     {
        $employee = User::find($id);
        $departments = Department::all();    
        $designations = Designation::all();          
        return view('pages.employees.edit',['employee' => $employee, 'departments'=> $departments, 'designations'=> $designations]);
     }
     //employees photoUpdate
     public function photoUpdate(Request $request)
     {
        $url = "storage/";
        $photo = $request->file('photo');
        $photo_name = $photo->getClientOriginalName();      
        $photo_storage = $photo->storeAs("public/uploads", $photo_name);
        $photo_path = 'storage/uploads/'.$photo_name;

        Employees::where('userId',$request->id)->update([
            'photo'=> $photo_path,
         ]);
         session()->flash('success','Photo updated successfully..!!');
        return redirect()->back();
     }
     //employees infoUpdate
     public function infoUpdate(Request $request)
     {
        Employees::where('userId',$request->id)->update([
            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'fathersName'=> $request->fathersName,
            'gender'=> $request->gender,
            'dob'=> $request->dob,
            'phone'=> $request->phone,
            'presentAddress'=> $request->presentAddress,
            'permanentAddress'=> $request->permanentAddress,
            'referenceName'=> $request->referenceName,
            'referencePhone'=> $request->referencePhone,
            'govId'=> $request->govId,
            'govIdNo'=> $request->govIdNo,
         ]);
         session()->flash('success','Employee Info updated successfully..!!');
        return redirect()->back();
     }
     //employees companyInfoUpdate
     public function companyInfoUpdate(Request $request)
     {       
        Employees::where('userId',$request->id)->update([
            'department'=> $request->department,
            'designation'=> $request->designation,
            'joinDate'=> $request->joinDate,
            'leaveDate'=> $request->leaveDate,
            'status'=> $request->status,
            'shift'=> $request->shift,
            'hiringManager'=> $request->hiringManager,
         ]);
         session()->flash('success','Company Info updated successfully..!!');
        return redirect()->back();
     }
    public function exportUser()
    {
      return Excel::download(new UsersExport, 'users.xls');
    }
}