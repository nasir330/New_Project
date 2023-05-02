<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $users = User::all();       
        return view('pages.companyProfile.index',['users' => $users]);
    }
}
