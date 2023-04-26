<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use App\Exports\UsersExport;
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
         return view('pages.employees.create',['userTypes'=> $userTypes]);
     }
     //store employee data
     public function store(Request $request)
     {    
        $data = $request->all();
        return $data; 
        $userTypes = UserType::whereNot('id',1)->paginate(10);    
         return view('pages.employees.create',['userTypes'=> $userTypes]);
     }
    public function exportUser()
    {
      return Excel::download(new UsersExport, 'users.xls');
    }
}
