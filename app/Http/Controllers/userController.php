<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UsersExport;
use Excel;

class userController extends Controller
{
    public function index()
    {
        
        $users = User::all();       
        return view('pages.employees.index',['users' => $users]);
    }
    public function exportUser()
    {
      return Excel::download(new UsersExport, 'users.xls');
    }
}
